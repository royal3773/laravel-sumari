<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML/CSSの学習</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <header class="py-5 text-center">
                <h2>申し込みフォーム一覧</h2>
                    <p class="lead">
                        こちらは過去に問い合わせいただいた方の内容が記載されております。
                        こちらもよろしければご確認ください。
                    </p>
            </header>
            <!-- フラッシュメッセージを表示 -->
            @if(session('delete_message'))
            <div class='alert alert-success'>
            {{ session('delete_message') }}
            </div>
            @elseif(session('update_message'))
            <div class='alert alert-success'>
            {{ session('update_message') }}
            </div>
            @endif
            <!-- データ一覧を表示 -->
            <table class="table table-bordered table-info table-responsive-sm table table-hover">
                <thead>
                    <tr>
                        <th scope="col">番号</th>
                        <th scope="col">名前</th>
                        <th scope="col">年齢</th>
                        <th scope="col">性別</th>
                        <th scope="col">お問い合わせ内容</th>
                    </tr>
                </thead>
                @foreach ($contacts as $contact)
                <tbody class="table-light">
                    <th scope="row">{{ $contact->id }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->age }}</td>
                    <td>{{ $contact->sex }}</td>
                    <td>{{ $contact->text }}</td>
                    <!-- 編集処理へ移動 -->
                    <td><a class="btn btn-outline-primary" href="/data/{{ $contact->id }}/edit">更新</a></td>
                    <!-- 削除処理 -->
                    <form action="data/{{ $contact->id }}" method="POST" onsubmit="if(confirm('本当に削除しますか？')) { return true } else {return false };">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-outline-danger">削除</button></td>
                    </form>
                </tbody>
                @endforeach
                
            </table>
            <button class="btn btn-primary btn-lg btn-block" onclick="history.back(-1)">戻る</button>
            
            <footer class="footer mt-auto">
                <p>&copy; 20xx ○○ All Rights Reserved.</p>
            </footer>
        </div>
    </body>
</html> 