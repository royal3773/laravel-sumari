<!DOCTYPE html>  
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML/CSSの学習</title>
        <link rel="stylesheet" href='{{ asset("css/introduction.css") }}'>
    </head>
    <body>
        <div id="header">
            <h2>自己紹介</h2>
        </div>
        <div id="wrapper">
            <div id="nav">
                <ul>
                    <li><a href="top">トップ</a></li>
                    <li><a href="">ナビ2</a></li>
                    <li><a href="">ナビ3</a></li>
                    <li><a href="introduction">自己紹介</a></a></li>
                    <li><a href="contact">お問い合わせ</a></li>
                </ul>
            </div>
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
        </div>
        <div id="footer">
            <p>&copy; 20xx ○○ All Rights Reserved.</p>
        </div>
    </body>