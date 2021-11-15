<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ИИТУТС @yield('title')</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src={{ asset('libs/jquery.js') }}></script>
    <script src={{ asset('js/app.js') }}></script>
    <?= $head ?>
</head>
<body>

<?= $top_head ?>
<?= $mast_head ?>

<?= $main_nav ?>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>
