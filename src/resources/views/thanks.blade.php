<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
</head>

<body>
    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>お問い合わせありがとうございました</h2>
        </div>
        <form class="form" action="/" method="POST">
            @csrf
            <div class="form__button">
                <button class="form__button-submit" type="submit">HOME</button>
            </div>
        </form>
        <div class="thanks__text">Thank you</div>
    </div>
</body>

</html>