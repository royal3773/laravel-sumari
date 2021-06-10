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
<img src="https://simpleboard1.s3.ap-northeast-1.amazonaws.com/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88+2021-05-02+18.06.54.png">
    <button class="btn btn-primary btn-lg btn-block" type="button" onclick="location.href='/data'">お問い合わせ一覧</button>
</html>
