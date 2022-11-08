<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"
    />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex, nofollow" />

    <title>Забери iPhone 14 Pro!</title>
    <link
        rel="stylesheet"
        href="{{ asset('css/all.min.css') }}"
        integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg=="
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}" />
    <script src="{{ asset('js/checkout.js') }}"></script>
</head>
<body>


{{ $slot }}

<script src="https://checkout.cloudpayments.ru/checkout.js"></script>
<script
    src="{{ asset('js/jquery.min.js') }}"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
<script
    src="{{ asset('js/all.min.js') }}"
    integrity="sha512-jAu66pqHWWQ564NS+m2Zxe13Yek98R7JWNjQLzW+PQ4i2jsMxBT1nGrQ0gFUIVJ4kPkEFe5gelBWNEDTBqmn/w=="
    crossorigin="anonymous"></script>
<script src="{{ asset('js/main.min.js') }}"></script>

<script src="{{ asset('js/bundle.js') }}"></script>
<script src="{{ asset('js/card.js') }}"></script>
<script src="{{ asset('js/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/card.min.js') }}"></script>

<script src="{{ asset('js/scripts.js?v=1') }}"></script>

@stack('footer-scripts')
</body>
</html>
