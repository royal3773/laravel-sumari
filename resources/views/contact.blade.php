<!DOCTYPE html>  
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>HTML/CSSの学習</title>
        <link rel="stylesheet" href='{{ asset("css/contact.css") }}'>
        <script type="text/javascript" src='{{ asset("js/contact.js") }}'></script> <!--javascriptを読み込むための宣言文-->
    </head>
    <body>
        <div id="header">
            <h2>お問い合わせ</h2>
        </div>
        <div id="wrapper">
            <div id="nav">
                <ul>
                    <li><a href="top">トップ</a></li>
                    <li><a href="">ナビ2</a></li>
                    <li><a href="">ナビ3</a></li>
                    <li><a href="introduction">自己紹介</a></li>
                    <li><a href="contact">お問い合わせ</a></li>
                </ul>
            </div>
            @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
            @endif

            <form name="form" method="post" action="store">
                @csrf
                 <div class="item">
                     <label class="label">お名前</label>
                     <input class="inputs" type="text" name="name">
                 </div>
                 <div class="item">
                     <label class="label">年齢</label>
                     <input class="inputs" type="number" name="age">
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
                     <textarea class="inputs" name="text"></textarea>
                 </div>
                 <div class="item">
                     <label class="label">添付ファイル</label>
                     <input type="file" name="file">
                 </div>
                 <div class="btn-area">
                     <input type="submit" value="送信する" onClick="return check()">
                 </div>
            </form>
            
        </div>
        <div id="footer">
            <p>&copy; 20xx ○○ All Rights Reserved.</p>
        </div>
    </body>
</html>