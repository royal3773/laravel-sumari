<head>
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<img src="{{ asset('storage/profiles/' . $contact->file) }}" id="desert">

<button class="btn btn-primary btn-lg btn-block" type="button" onclick="location.href='/data'">お問い合わせ一覧</button>
