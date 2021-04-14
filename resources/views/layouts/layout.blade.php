<!DOCTYPE html>  
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href='{{ asset('css/layout.css') }}'>
        @yield('css')
        @yield('javascript')
    </head>
    <body>
        <div id="wrapper">
        @component('components.menubar')
        <!-- ナビを挿入 -->
        @endcomponent

        <!-- メインコンテンツを表示 -->
        @yield('content')
        </div>

        @component('components.footer')
        <!-- フッターの表示 -->
        @endcomponent
    </body>
</html>