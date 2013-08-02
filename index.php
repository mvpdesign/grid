<?php include_once('includes/config.php'); ?>
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

        <title>Visual Grid Reference</title>
        <meta name="description" content="A visual reference for working with a fluid, responsive grid within the Foundation framework.">

        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="<?= Assets::path('stylesheets/style.css'); ?>">

        <meta property="og:image" content="http://www.visualgridref.com<?= Assets::path('images/facebook.jpg'); ?>" />
        <meta property="og:title" content="Visual Grid Reference" />
        <meta property="og:url" content="http://www.visualgridref.com/" />
        <meta property="og:type" content="website" />

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <header>
            <section class="row">
                <div class="columns small-12">
                    <h1>Foundation 4 <strong>&nbsp;VISUAL GRID ADJUSTER</strong></h1>
                    <a href="http://www.mvpdesign.com" target="_blank" class="copyright"><span>created for your pleasure by</span></a>
                </div>
            </section>
        </header>

        <aside class="navigation">
            <section class="row clearfix">
                <form class="columns small-12">
                    <label class="columns small-12 medium-4"><center>Max Width <input type="text" name="max_width" value="60em" /></center></label>
                    <label class="columns small-12 medium-4"><center>Margin <input type="text" name="margin" value="0em" /></center></label>
                    <label class="columns small-12 medium-4"><center>Gutter <input type="text" name="gutter" value="1em" /></center></label>
                </form>
            </section>
        </aside>

        <aside id="viewport" class="viewport">
            <section class="row clearfix">
                <div class="columns small-12">
                    Viewport: <span>0</span>
                </div>
            </section>
        </aside>

        <aside id="grid" class="grid">
            <section class="row">
                <div class="columns small-12 container">
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                    <div class="columns small-1 column"><div></div></div>
                </div>
            </section>
        </aside>

        <div class="buttons">
            <div class="row">
                <a href="#" class="download-photoshop button">Download PS Script</a>
                <a href="#" class="download-png button">Download PNG</a>
            </div>
        </div>

        <div id="hidden-grid"></div>

        <script src="<?= Assets::path('scripts/lib/jquery.min.js'); ?>"></script>
        <script src="<?= Assets::path('scripts/lib/respond.min.js'); ?>"></script>
        <script src="<?= Assets::path('scripts/lib/html2canvas.js'); ?>"></script>
        <script src="<?= Assets::path('scripts/lib/modernizr.custom.js'); ?>"></script>
        <script src="<?= Assets::path('scripts/site.js'); ?>"></script>
                
        <?php if(ENVIRONMENT == 'PRODUCTION'): ?>
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
              ga('create', 'UA-42869249-1', 'visualgridref.com');
              ga('send', 'pageview');
            
            </script>
        <?php endif; ?>
    </body>
</html>