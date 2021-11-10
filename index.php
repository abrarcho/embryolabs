<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-0">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>Buy SmartGrinder</title>
        <link rel="shortcut icon" type="img/x-icon" href="/assets/favicon.ico"/>
        <link rel="stylesheet" href="/assets/styles/styles.css">
        <script src='jquery-3.6.0.min.js'></script>
        <script src='jquery.mobile-1.4.5.min'></script>
        <style>
            html, body
            {
                background-color: #000000;
            }
            p#header
            {
                font-family: 'Monda';
                color: #ff4400;
                font-size: 28px;
                text-align: center;
                text-shadow: 0 0 0.30em #ff4400;
            }
            p#line
            {
                font-family: 'Monda';
                color: #ff4400;
                font-size: 14px;
                text-align: center;
                text-shadow: 0 0 0.30em #ff4400;
            }        
            .button
            {
                position: absolute;
                background-color: #ff4400;
                color: #000000;
                padding: 1vw 1vw;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-family: 'Monda';
                font-size: 18px;
                margin: 4px 2px;
                cursor: pointer;
                transform: translate(-50%, -50%);
                width: 200px;
            }
            #yes
            {
                top: 45%;
                left: 50%;
            }
            #no
            {
                top: 55%;
                left: 50%;
            }
        </style>
    </head>
    <body>
        <div data-role="page">
            <br>
            <p id="header">You must be over 19 years to visit this site</p>
            <p id="line">Please confirm your age.</p>
            <a href="Home.php" id="yes" class="button">I am 19 or older</a>
            <a href="https://www.google.ca/" id="no" class="button">I am under 19</a>
        </div>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-194125224-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-194125224-1');
        </script>
    </body>
</html>