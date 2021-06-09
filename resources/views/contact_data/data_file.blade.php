<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML/CSSの学習</title>
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>


<div class="img-fluid">
    <img src="{{ $url }}" id="desert">
</div>
    <button class="btn btn-primary btn-lg btn-block" type="button" onclick="location.href='/data'">お問い合わせ一覧</button>
</html>
