<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type='text/javascript' src='../mediaplayer/jwplayer.js'></script>

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
        var _ss = _ss || [];
        _ss.push(['_setDomain', 'https://koi-PLBR48.sharpspring.com/net']);
        _ss.push(['_setAccount', 'KOI-XLGOXE']);
        _ss.push(['_trackPageView']);
        (function() {
            var ss = document.createElement('script');
            ss.type = 'text/javascript'; ss.async = true;
            ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-PLBR48.sharpspring.com/client/ss.js?ver=1.1.1';
            var scr = document.getElementsByTagName('script')[0];
            scr.parentNode.insertBefore(ss, scr);
        })();
        </script>
        <?php if (isset($tracking)) echo $tracking ?>
    </head>
    <body>
        <div class="wrapper">
            <img src="/img/logo-blue-1.png" class="logo" alt="ThermoSpas - Designed to Improve Your Life">