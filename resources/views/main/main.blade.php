<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $title ?>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://liblbt.yanao.ru/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://liblbt.yanao.ru/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <!--<script src={{ asset('libs/jquery.js') }}></script>-->
    <script src={{ asset('js/app.js') }}></script>
    <!--<script src="https://raw.githubusercontent.com/ressio/lazy-load-xt/master/dist/jqlight.lazyloadxt.min.js"></script>-->
</head>
<body>

@include('inc.header')

<main>
    <div class="content">
        <div class="container">
            <div class="inner-wrapper">
                <?= $content_primary ?>
                <?= $content_sidebar ?>
            </div>
        </div>
    </div>
</main>

@include('inc.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>
