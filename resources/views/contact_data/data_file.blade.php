<head>
    <link rel="stylesheet" href="{{ mix('css/top.css') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<img src="{{ mix('storage/profiles/' . $contact->file) }}" id="desert">

<button class="btn btn-primary btn-lg btn-block" type="button" onclick="location.href='/data'">お問い合わせ一覧</button>
