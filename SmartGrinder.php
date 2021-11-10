<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-0">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>SmartGrinder - Embryo Labs</title>
        <link rel="shortcut icon" type="img/x-icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="/assets/styles/styles.css">
        <script src='jquery-3.6.0.min.js'></script>
        <script src='jquery.mobile-1.4.5.js'></script>
        <style>
            html, body
            {
                background-color: #000000;
            }
            #page3:hover
            {
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }
            #page2
            {
                font-size: 20px;
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
                font-size: 20px;
            }
            #page2
            {
                position: absolute;
                left: 30%;
                right: 70%;
            }
            #page3
            {
                font-size: 20px;
                position: absolute;
                left: 70%;
                right: 30%;
                color: #a55031;
            }
            #section1, #section2, #section3, #section4
            {
                text-align: center;
                position: relative;
            }
            #text1
            {
                position: absolute;
                top: 9%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 3vw;
                font-family: 'Monda';
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }
            #text2
            {
                position: absolute;
                top: 10%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 2.4vw;
                font-family: 'Monda';
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }
            #text3
            {
                position: absolute;
                top: 8%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 2vw;
                font-family: 'Monda';
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }
            #text4
            {
                position: absolute;
                top: 9%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 2.8vw;
                font-family: 'Monda';
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }
            #text5
            {
                position: absolute;
                top: 19%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 4.1vw;
                font-family: 'Monda';
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }
            .button
            {
                position: absolute;
                transform: translate(-50%, -50%);
                background-color: #ff4400;
                color: #000000;
                padding: 1vw 1vw;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-family: 'Monda';
                font-size: 1.5vw;
                margin: 4px 2px;
                cursor: pointer;
            }
            #preorder1
            {
                top: 91%;
                left: 50%;
            }
            #preorder2
            {
                top: 90%;
                left: 50%;
            }
            #preorder4
            {
                top: 83%;
                left: 50%;
            }
            .bottom
            {
                margin: 0;
                background-size: cover;
                background-color: #000000;
            }
            .socials
            {
                fill: #ff4400;
            }
            #instagramlogo
            {
                position: absolute;
                left: 47%;
                right: 53%;
            }

            #facebooklogo
            {
                position: absolute;
                left: 37%;
                right: 63%;
            }

            #twitterlogo
            {
                position: absolute;
                left: 57%;
                right: 43%;
            }

            #linkedinlogo
            {
                position: absolute;
                left: 27%;
                right: 73%;
            }

            #tiktoklogo
            {
                position: absolute;
                left: 67%;
                right: 33%;
            }
            #embryo
            {
                position: absolute;
                left: 3%;
                right: 97%;
            }
            p 
            {
                text-align: center;
                font-size: 14px;
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }
        </style>
        <script src="https://www.wheelofpopups.com/api/v5744/widget.js" type="text/javascript" defer="defer"></script>
        <script>
            (function(d,h,w){var gist=w.gist=w.gist||[];gist.methods=['trackPageView','identify','track','setAppId'];gist.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);gist.push(e);return gist;}};for(var i=0;i<gist.methods.length;i++){var c=gist.methods[i];gist[c]=gist.factory(c)}s=d.createElement('script'),s.src="https://widget.getgist.com",s.async=!0,e=d.getElementsByTagName(h)[0],e.appendChild(s),s.addEventListener('load',function(e){},!1),gist.setAppId("q3facuah"),gist.trackPageView()})(document,'head',window);
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-194125224-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-194125224-1');
        </script>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header" class="top">
                <br>
                <a href="Home.php"><svg class="socials" id="embryo" width="38px" height="38px"><use href="assets/svg/symbol-defs.svg#icon-embryo-small"></use></svg></a>
                <h class="text" id="page2">SmartGrinder</h>
                <a href="Mission.php"><h class="text" id="page3">Mission</h></a>
                <br><br><br>
            </div>
            <div data-role="section" id="section1" class="sections">
                <img src="assets/images/render2.png" class="background">
                <div>
                    <h id="text1">Introducing the SmartGrinder</h>
                    <a href="shop.php" id="preorder1" class="button">Buy now</a>
                </div>
            </div>
            <div data-role="section" id="section2" class="sections">
                <img src="assets/images/render3.png" class="background">
                <div>
                    <h id="text2">Tailored for an elite cannabis experience.</h>
                    <a href="shop.php" id="preorder2" class="button">Buy now</a>
                </div>
            </div>
            <div data-role="section" id="section3" class="sections">
                <img src="assets/images/render4.png" class="background">
                <div>
                    <h id="text3">Month of battery capacity. Mini USB charging.</h>
                </div>
            </div>
            <div data-role="section" id="section4" class="sections">
                <img src="assets/images/render5.png" class="background">
                <div>
                    <h id="text4">10 grams of storage capacity.</h>
                    <h id="text5">Pollen storage.</h>
                    <a href="shop.php" id="preorder4" class="button">Buy now</a>
                </div>
            </div>
            <div data-role="footer" class="bottom">
                <br>
                <br>
                <a href="https://www.linkedin.com/company/56416351/"><svg class="socials" id="linkedinlogo" width="27px" height="27px"><use href="assets/svg/symbol-defs1.svg#youtube"></use></svg></a>
                <a href="https://www.facebook.com/EmbryoLabsInc/"><svg class="socials" id="facebooklogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-facebook"></use></svg></a>
                <a href="https://www.instagram.com/embryochannel/"><svg class="socials" id="instagramlogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-instagram"></use></svg></a>
                <a href="https://twitter.com/EmbryoLabsInc"><svg class="socials" id="twitterlogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-twitter"></use></svg></a>
                <a href="https://www.tiktok.com/@embryolabs"><svg class="socials" id="tiktoklogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-tiktok"></use></svg></a>
                <br><br>
                <p id="copyright" class="text">Copyright © 2021 Embryo Labs Inc. All rights reserved.</p>
                <br>
            </div>
        </div>
    </body>