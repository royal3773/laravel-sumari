<!-- レイアウトの引き継ぎ -->
@extends('layouts.layout')
<!-- タイトルを設定 -->
@section('title', 'お問い合わせフォーム')
<!-- ページ毎のCSSを設定 -->
@section('css') <link rel="stylesheet" href="{{ asset('css/contact.css') }}"> @endsection
@section('javascript')<script type="text/javascript" src='{{ asset("js/contact.js") }}'></script> @endsection

<div id="header">
    <h2>お問い合わせ</h2>
</div>
<!-- メインとなるコンテンツ -->
@section('content')
    @if (session('flash_message'))
    <div class="flash_message">
        {{ session('flash_message') }}
    </div>
    @endif
    <form name="form" method="post" action="store" enctype="multipart/form-data">
        @csrf
        <div class="item">
            <label class="label">お名前</label>
            <input class="inputs" type="text" name="name" value="{{ old('name') }}">
        </div>
        <div class="item">
            <label class="label">年齢</label>
            <input class="inputs" type="number" name="age" value="{{ old('age') }}">
        </div>
        <div class="item">
            <label class="label">性別</label>
            <div class="inputs">
                <input id="male" type="radio" name="sex" value="male">
                <label for="male">男性</label>
                <input id="female" type="radio" name="sex" value=female>
                <label for="female">女性</label>
            </div>
        </div>
        <div class="item">
            <label class="label">お問い合わせ</label>
            <textarea class="inputs" name="text" value="{{ old('text') }}"></textarea>
        </div>
        <div class="item">
            <label class="label">添付ファイル</label>
            <input type="file" name="file">
        </div>
        <div class="btn-area">
            <input type="submit" value="送信する" onClick="return check()">
        </div>
    </form>

@endsection