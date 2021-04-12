<?php

namespace App\Http\Controllers;

use App\models\Contact;
use Illuminate\Http\Request;

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
        return view('data', ['contacts' => $contacts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //$requestに入ってきたデータをcontactsテーブルのそれぞれのカラムに入れる処理
        $contact_file = $request->file;
        $contact_file_path = $contact_file->store('public/uploads');
        dd($contact_file_path);
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->age = $request->input('age');
        $contact->sex = $request->input('sex');
        $contact->text = $request->input('text');
        $contact->file  = $contact_file;
        
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
    {//データを送る
        $contact = Contact::find($contact_id);
        return view('edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$contact_id)
    {
        $contact = Contact::find($contact_id);
        $contact->name = $request->input('name');
        $contact->age = $request->input('age');
        $contact->sex = $request->input('sex');
        $contact->text = $request->input('text');
        $contact->file  = $request->input('file');
        
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
        return  view('softdelete_method', ['contacts' => $contacts]);
    }
    public function restore($contact_id)
    {//論理削除したデータを復元する
        $contact = Contact::onlyTrashed()->find($contact_id)->restore();
        session()->flash('restore_message', '復元しました！');
        return redirect('softdelete_method');
    }
    public function forcedelete($contact_id) 
    {//物理削除を行う
        $contact = Contact::onlyTrashed()->find($contact_id)->forceDelete();
        session()->flash('forcedelete_message', '完全に削除しました！');
        return redirect('softdelete_method');
    }
}
