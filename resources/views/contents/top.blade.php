<!-- レイアウトの引き継ぎ -->
@extends('layouts.layout')
<!-- タイトルを設定 -->
@section('title', 'testです')
<!-- ページ毎のCSSを設定 -->
@section('css') <link rel="stylesheet" href="{{ asset('css/top.css') }}"> @endsection

    <div id="header">
        <h1><a href="top.html"><img id="desert" src="image/desert.jpg" alt="砂漠" /></a></h1>
    </div>
<!-- メインとなるコンテンツ -->
@section('content')
    <div id="container">
        <div id="main">
            <div class="post">
                <p>ここは文章が入ります。ここは文章が入ります。ここは文章が入ります。<br />今は、適当な文章を入れてあります。これをダミーテキストといいます。</p>
            </div>
            <div class="post clearfix">
                <h2>小見出し１</h2>
                <p>
                    コンテンツ1の本文になります。コンテンツ1の本文になります。コンテンツ1の本文になります。コンテンツ1の本文になります。
                    コンテンツ1の本文になります。コンテンツ1の本文になります。コンテンツ1の本文になります。コンテンツ1の本文になります。
                </p>
                <p><a href="">→コンテンツ1のページへ</a></p>
            </div>
            <div class="post clearfix">
                <h2>小見出し２</h2>
                <p>
                    コンテンツ2の本文になります。コンテンツ2の本文になります。コンテンツ2の本文になります。コンテンツ2の本文になります。
                    コンテンツ2の本文になります。コンテンツ2の本文になります。コンテンツ2の本文になります。コンテンツ2の本文になります。
                </p>
            </div>
        </div>
        <div id="side">
            <div class="box">
                <h2>サイドメニュー</h2>
                <div class="boxBody">
                    <ul>
                        <li>項目１</li>
                        <li>項目２</li>
                        <li>項目３</li>
                        <li>項目４</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
@endsection