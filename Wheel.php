<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-0">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title></title>
        <style>
            #app
            {
                height: 400px;
                width: 400px;
                margin: 0 auto;
                position: relative;
            }
            .marker
            {
                position: absolute;
                width: 60px;
                left: 172px;
                top: -20px;
                z-index: 2;
            }
            .wheel
            {
                width: 100%;
                height: 100%;
            }
            .button
            {
                display: block;
                width: 250px;
                margin: 40px auto;
                cursor: pointer;
            }
            .button:hover
            {
                opacity: 0.8;
            }
            .blur
            {
                animation: blur 10s;
            }
            @keyframes blur
            {
                0%
                {
                    filter: blur(1.5px);
                }
                
                80%
                {
                    filter: blur(1.5px);
                }
                
                100%
                {
                    filter: blur(0px);
                }
            }
        </style>
    </head>
    <body>
        <div data-role="wheel" id="app">
            <img class="marker" src="">
            <img class="wheel" src="">
            <img class="button" src="">
        </div>
    </body>
    <script>
        (function ()
        {
            const wheel = document.querySelector('.wheel');
            const startButton = document.querySelector('.button');
            let deg = 0;
            
            startButton.addEventListener('click', () =>
            {
                startButton.style.pointerEvents = 'none';
                deg = Math.floor(5000 + Math.random() * 5000);
                wheel.style.transition = 'all 6s ease-out';
                wheel.style.transform =  `rotate(${deg}deg)`;
                wheel.classList.add('blur');
            });
            
            wheel.addEventListener('transitionend', () => 
            {
                wheel.classList.remove('blur');
                startButton.style.pointerEvents = 'auto';
                wheel.style.transition = 'none';
                const actualDeg = deg % 360;
                wheel.style.transform = `rotate(${actualDeg}deg)`;
            })
        })();
    </script>
</html>