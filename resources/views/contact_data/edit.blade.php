<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>HTML/CSSの学習</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Document</title>
    </head>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <h1 class="display-4 font-italic">データの更新作業を行います。</h1>
            <p class="lead my-3">データを更新すると元に戻すことはできません。あらかじめご了承下さい。</p>
        </div>
        <h3 class="font-italic border-bottom">更新するデータ</h3>
        <form action="/data/{{ $contact->id }}" method="POST" onsubmit="if(confirm('本当に更新しますか？')) {return true} else {return false};">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">名前</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $contact->name }}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">年齢</label>
                <input type="number" name="age" class="form-control" id="age" value="{{ $contact->age }}">
            </div>
            <div class="mb-3 form-label">性別</div>
            <div class="mb-3 form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="sex" id="male" value="male" @if($contact->sex == "male") checked @endif>
                 <label class="form-check-label" for="male">男性</label>
            </div>
            <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="sex" id="female" value="male"  @if($contact->sex == "female") checked @endif>
                 <label class="form-check-label" for="female">女性</label>
            </div>
            <div class="mb-3">
                 <label for="text" class="form-label">お問い合わせ内容</label>
                 <input type="text" name='text' class="form-control" id="text" value="{{ $contact->text }}">
            </div>
            
            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </main>
</html>