<!DOCTYPE html>

@php
    function lazyload_img($buffer) {
        return preg_replace("#<img([^>]*) src=['\"](.*?)['\"]([^>]*)>#", '<img$1 data-src="$2"$3><noscript><img$1 src="$2"$3></noscript>', $buffer);
    }
    ob_start("lazyload_img");
@endphp

<html lang="en" dir="ltr">

@include('inc.head')

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

@include('inc.under-body-scripts')

</body>
</html>
