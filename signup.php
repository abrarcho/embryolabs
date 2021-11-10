<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-0">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>Account sign-up</title>
        <script src='jquery-3.6.0.min.js'></script>
        <style>
            .formclass 
            {   font-size: 20px;
                font-family: Monda;
                src: local("Monda Regular"), url("../fonts/Monda-Regular.ttf") format("truetype");
                text-align: justify;
            }
            
            #signupform
            {
                text-align: center;
                font-size: 15px;
                font-family: Monda;
                src: local("Monda Regular"), url("../fonts/Monda-Regular.ttf") format("truetype");
            }
            
        </style>
        <script>
            function checkUser(email)
            {
                if (email.value == '')
                {
                    $('#used').html('&nbsp;');
                }
                
                $.post
                {
                    'checkuser.php', { email : email.value }, function(data)
                    {
                        $('#used').html(data)
                    }
                }
            }
        </script>
    </head>
    <body>
        <div id='signupform' data-role="content">
            <form method='post' action='signup.php'>
                <input class='formclass' type='text' maxlength='60' size='19' name='fname' placeholder='First name'>
                &nbsp;
                <input class='formclass' type='text' maxlength='60' size='19' name='lname' placeholder='Last name'>
                <br>
                <div
                <br><br>
                <input class='formclass' type='text' maxlength='100' size='41' name='email' placeholder='name@example.com' onBlur='checkUser(this)'>
                <br>
                <div id='used'>&nbsp;</div>
                <br>
                This will be your Embryo Labs log-in.
                <br><br>
                <input class='formclass' type='password' maxlength='16' size='41' name='password1' placeholder='Password'>
                <br><br>
                <input class='formclass' type='password' maxlength='16' size='41' name='password2' placeholder='Confirm password'>
                <br><br>
                <input class='formclass' type='submit' size='41' value='Create an Embryo Labs Account'>
        </div>
    </body>
</html>
<?php

    
?>