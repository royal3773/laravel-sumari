<?php

namespace App\Http\Controllers;

use App\models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {//data.blade.phpへお問い合わせのデータを送る
        $contacts = Contact::all();
        // dd(Storage::disk('s3')->exists('/public'));
        return view('contact_data.data', ['contacts' => $contacts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //お問い合わせフォームを表示
        return view('contents.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //$requestに入ってきたデータをcontactsテーブルのそれぞれのカラムに入れる処理
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->age = $request->input('age');
        $contact->sex = $request->input('sex');
        $contact->text = $request->input('text');
        //ファイルが選択されており、アップロードされている状態であれば、ファイルをstorage/public/profilesに保存する
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $contact_file_name = $request->file('file')->getClientOriginalName();
            $contact_file = $request->file('file')->storeAs('public', $contact_file_name);
            $contact->file = basename($contact_file);
            $contents = Storage::get('public/'.$contact_file_name); //ファイルを読み取る
            Storage::disk('s3')->put($contact_file_name, $contents, 'public'); // Ｓ３にアップ

        }
        $contact->save();
        session()->flash('flash_message', '送信が完了しました。');
        return redirect('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($contact_id)
    {//編集用ページへデータを送る
        $contact = Contact::find($contact_id);
        return view('contact_data.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$contact_id)
    {//編集したものを更新する
        $contact = Contact::find($contact_id);
        $contact->name = $request->input('name');
        $contact->age = $request->input('age');
        $contact->sex = $request->input('sex');
        $contact->text = $request->input('text');
        // $contact->file  = $request->input('file');
        
        $contact->save();
        session()->flash('update_message', '更新が完了しました！');
        return redirect('data/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($contact_id)
    {//data.blade.phpから送られてきた番号を取り出し削除（ソフトデリート）
        $contact = Contact::find($contact_id);
        $contact->delete();
        session()->flash('delete_message', '削除が完了しました！');
        return redirect('data');
    }
    public function softdelete_get()
    {//論理削除したデータを表示
        $contacts = Contact::onlyTrashed()->whereNotNull('id')->get();
        return  view('contact_data.softdelete_method', ['contacts' => $contacts]);
    }
    public function restore($contact_id)
    {//論理削除したデータを復元する
        $contact = Contact::onlyTrashed()->find($contact_id)->restore();
        session()->flash('restore_message', '復元しました！');
        return redirect('softdelete_method');
    }
    public function forcedelete($contact_id) 
    {//物理削除を行う
        $file = Contact::onlyTrashed()->find($contact_id)->file;
        $file_delete = Storage::disk('s3')->delete($file);
        $contact = Contact::onlyTrashed()->find($contact_id)->forceDelete();
        session()->flash('forcedelete_message', '完全に削除しました！');
        return redirect('softdelete_method');
    }
    public function file($contact_id)
    {//ファイルを個別でみる
        $contact = Contact::find($contact_id);
        $filename = $contact->file;
        $url = Storage::disk('s3')->url($filename);
        return view('contact_data.data_file', ['contact' => $contact, 'url' => $url]);
    }
}
