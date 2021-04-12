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
                <h2>削除済データ</h2>
                    <p class="lead">
                    こちらは、削除されたデータの一覧です。ここでは、復元と完全に削除することが可能です。
                    </p>
            </header>
            <!-- フラッシュメッセージを表示 -->
            @if(session('restore_message'))
            <div class='alert alert-success'>
            {{ session('restore_message') }}
            </div>
            @elseif(session('forcedelete_message'))
            <div class='alert alert-success'>
            {{ session('forcedelete_message') }}
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
                        <th scope="col">削除日</th>
                    </tr>
                </thead>
                @foreach ($contacts as $contact)
                <tbody class="table-light">
                    <th scope="row">{{ $contact->id }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->age }}</td>
                    <td>{{ $contact->sex }}</td>
                    <td>{{ $contact->text }}</td>
                    <td>{{ $contact->deleted_at }}</td>
                    <!-- 復元処理 -->
                    <form action="softdelete_method/{{ $contact->id }}/restore" method="POST" onsubmit="if(confirm('復元します。よろしいですか？')) { return true } else {return false };">
                    @csrf
                    @method('PUT')
                    <td><button type="submit" class="btn btn-outline-primary">復元</button></td>
                    </form>
                    <!-- 完全削除 -->
                    <form action="softdelete_method/{{ $contact->id }}/forcedelete" method="POST" onsubmit="if(confirm('完全に削除します。よろしいですか？')) { return true } else {return false };">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-outline-danger">完全削除</button></td>
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