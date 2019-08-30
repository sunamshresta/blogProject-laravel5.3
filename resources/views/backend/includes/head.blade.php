<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title')</title>
         

          <!-- loader css -->
          <style type="text/css">
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url("{{ asset('loader/Preloader_2.gif') }}") center no-repeat #fff;
            }
          </style>
        
        <link rel="shortcut icon" href="{{ URL::to('logo/logo.png') }}" />  

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <style>
        
        /*    #sout .dropdown-menu{
            position: relative;*/
            /*z-index: 2;*/
        /*}*/
        /*.navbar-inverse{
            background-color: #0355a7 !important;
        }*/
        *{
            margin: 0px auto;
            padding: 0px;
        }

            html, body {
                background-color: lightgrey;
                color: black;
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .sidebar{
                min-height: 420px;
            }
            /*nav{
               position: sticky !important;
                top: 100px;
                right: 0px;
                margin: 0px;
            }*/
           /*.navbar #sout li:hover{
                background-color: lightblue;
           }*/
        </style>
        @yield('stylesheet')
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
