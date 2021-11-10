<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-0">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<title>Embryo Labs</title>
        <link rel="shortcut icon" type="img/x-icon" href="/assets/favicon.ico"/>
        <link rel="stylesheet" href="/assets/styles/styles.css">
        <script src='jquery-3.6.0.min.js'></script>
        <script src='jquery.mobile-1.4.5.js'></script>
	<style>
            .indexbackground
            {
                background-size: cover;
                background-color: #000000;
                height: 100vh;
                width: 100%;
                margin: 0;
                display: flex;
                z-index: -1;
                position: fixed;
                top: 0;
                left: 0;
            }

            #scrolling
            {
                width: 100%;
                z-index: 100;
            }

            #page2:hover, #page3:hover
            {
                text-shadow: 0 0 0.30em #ff4400;
                color: #ff4400;
            }

            #page2, #page3
            {
                font-size: 20px;
                color: #a55031;
                z-index: 7;
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
                font-size: 20px;
                margin: 4px 2px;
                cursor: pointer;
            }
            
            #preorder0
            {
                z-index: 7;
                top: 500%;
                left: 50%;
            }

            .bottom
            {
                margin: 0;
                background-size: cover;
                background-color: #000000;
                z-index: 7;
            }

            .socials
            {
                fill: #ff4400;
            }

            #page2
            {
                position: absolute;
                left: 30%;
                right: 70%;
            }

            #page3
            {
                position: absolute;
                left: 70%;
                right: 30%;
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
            
            #scrolling > [id^="image"]
            {
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: fixed;
                top: 0;
            }

            #image5
            {
                position: absolute;
                top: 0;
                left: 0;
                max-width: 100%;
                width: 100%;
                z-index: 2;
            }

            #image4
            {
                position: absolute;
                top: 0;
                left: 0;
                max-width: 100%;
                width: 100%;
                z-index: 4;
            }

            #image3
            {
                position: absolute;
                top: 0;
                left: 0;
                max-width: 100%;
                width: 100%;
                z-index: 3;
            }

            #image2
            {
                position: absolute;
                top: 0;
                left: 0;
                max-width: 100%;
                width: 100%;
                z-index: 5;
            }

            #image1
            {
                position: absolute;
                top: 0;
                left: 0;
                max-width: 100%;
                width: 100%;
                z-index: 6;
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
                        <a href="SmartGrinder.php"><h class="text" id="page2">SmartGrinder</h></a>
                        <a href="Mission.php"><h class="text" id="page3">Mission</h></a>
                        <br><br><br>
                </div>
                <div data-role="scroll" id="scrolling">
                        <img src="assets/images/bg.png" class="indexbackground">
                        <img src="assets/images/parts/5.png" id="image5">
                        <img src="assets/images/parts/4.png" id="image4">
                        <img src="assets/images/parts/3.png" id="image3">
                        <img src="assets/images/parts/2.png" id="image2">
                        <img src="assets/images/parts/1.png" id="image1">
                        <a href="shop.php" id="preorder0" class="button">Buy now</a>
                </div>
                <div data-role="footer" class="bottom">
                        <br>
                        <br>
                        <a href="https://www.linkedin.com/company/56416351/"><svg class="socials" id="linkedinlogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-linkedin"></use></svg></a>
                        <a href="https://www.facebook.com/EmbryoLabsInc/"><svg class="socials" id="facebooklogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-facebook"></use></svg></a>
                        <a href="https://www.instagram.com/embryolabs/"><svg class="socials" id="instagramlogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-instagram"></use></svg></a>
                        <a href="https://twitter.com/EmbryoLabsInc"><svg class="socials" id="twitterlogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-twitter"></use></svg></a>
                        <a href="https://www.tiktok.com/@embryolabs"><svg class="socials" id="tiktoklogo" width="27px" height="27px"><use href="assets/svg/symbol-defs.svg#icon-tiktok"></use></svg></a>
                        <br><br>
                        <p id="copyright" class="text">Copyright © 2021 Embryo Labs Inc. All rights reserved.</p>
                        <br>
                </div>
        </div>
    <script>
            images = [
                    {
                            element: document.querySelector('#image1'),
                            stickyTill: 0,
                            visible: true,
                    },
                    {
                            element: document.querySelector('#image3'),
                            stickyTill: 20,
                            visible: true,
                    },
                    {
                            element: document.querySelector('#image2'),
                            stickyTill: 40,
                            visible: true,
                    },
                    {
                            element: document.querySelector('#image4'),
                            stickyTill: 60,
                            visible: true,
                    },
                    {
                            element: document.querySelector('#image5'),
                            stickyTill: 90,
                            visible: true,
                    },
            ]

            let windowHeight = window.innerHeight;

            document.getElementById('scrolling').style.height = (windowHeight * 5) + 'px';

            function scrollPosition() {
                    var h = document.documentElement,
                            b = document.body,
                            st = 'scrollTop',
                            sh = 'scrollHeight';
                    let percent = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
                    // console.log('scrollTop: ', h[st]);
                    // console.log('scrollHeight: ', h[sh]);
                    // console.log('percent: ', percent);
                    // document.getElementById('percent').innerText = Math.round(percent);
                    // document.getElementById('progress').innerText = h[st];
                    images.forEach(function (cur) {
                            if (percent >= cur.stickyTill && cur.visible) {
                                    cur.element.style.position = 'absolute';
                                    cur.element.style.top = h[st] + 'px';
                                    cur.visible = false;
                            }
                            else if (percent <= cur.stickyTill) {
                                    cur.element.style.position = 'fixed';
                                    cur.element.style.top = 0 + 'px';
                                    cur.visible = true;
                            }
                    });
            }

            document.addEventListener('scroll', scrollPosition);
    </script>
    </body>
</html>