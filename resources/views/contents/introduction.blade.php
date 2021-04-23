<!-- レイアウトの引き継ぎ -->
@extends('layouts.layout')
<!-- タイトルを設定 -->
@section('title', '自己紹介ページ')
<!-- ページ毎のCSSを設定 -->
@section('css') <link rel="stylesheet" href="{{ asset('css/introduction.css') }}"> @endsection

<div id="header">
    <h2>自己紹介</h2>
</div>
<!-- メインとなるコンテンツ -->
@section('content')
<div id="container">
    <div class="clearfix">
        <div id="main">
            <img id="self-introduction" src="image/introduction.jpg" alt="川" />
        </div>
        <div id="mainsub">
            <ul>
                <li>名前</li>
                <li>誕生日</li>
                <li>血液型</li>
                <li>住まい</li>
            </ul>
        </div>
    </div>
</div>
    <div id="side">
        <h2>自己紹介</h2>
            <p>コンテンツ２の本文になります。コンテンツ２の本文になります。</p>
            <p>コンテンツ２の本文になります。コンテンツ２の本文になります。</p>
            <p>コンテンツ２の本文になります。コンテンツ２の本文になります。</p>
            <p>コンテンツ２の本文になります。コンテンツ２の本文になります。</p>
    </div>
@endsection