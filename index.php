<?php include_once('includes/assets.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8 lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">

        <title>Grid</title>

        <link rel="stylesheet" href="<?= Assets::path('stylesheets/style.css'); ?>">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <header>
            <section class="row">
                <div class="columns small-12">
                    <h1>Foundation 4 <strong>&nbsp;VISUAL GRID ADJUSTER</strong></h1>
                    <a href="http://www.mvpdesign.com" target="_blank" class="copyright">created for your pleasure by</a>
                </div>
            </section>
        </header>

        <aside class="navigation">
            <section class="row">
                <form class="columns small-12">
                    <label class="columns small-4">Max Width <input type="text" name="max_width" value="60em" /></label>
                    <label class="columns small-4">Margin <input type="text" name="margin" value="0em" /></label>
                    <label class="columns small-4">Gutter <input type="text" name="gutter" value="0.5em" /></label>
                </form>
            </section>
        </aside>

        <aside id="grid" class="grid">
            <section class="row">
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
                <div class="columns small-1"><div></div></div>
            </section>
        </aside>

        <script src="<?= Assets::path('scripts/lib/jquery.min.js'); ?>"></script>
        <script src="<?= Assets::path('scripts/lib/respond.min.js'); ?>"></script>
        <script src="<?= Assets::path('scripts/site.js'); ?>"></script>
    </body>
</html>