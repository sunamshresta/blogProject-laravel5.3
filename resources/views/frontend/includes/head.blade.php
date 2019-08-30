<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel blog project</title>
        
        <!-- loader css -->
        <style>
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(loader/Preloader_0.gif) center no-repeat #fff;
            }
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <style>
            html, body {
                /*background-color: #fff;*/
                /*color: #636b6f;*/
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            #gi img{
                width: 100%;
                height: 200px;
            }
            
        </style>
       <!-- loader script -->
        <script src="{{ URL::to('js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('js/modemizr.js') }}"></script>
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>
    </head>
    <body>  
        <div class="se-pre-con"></div>