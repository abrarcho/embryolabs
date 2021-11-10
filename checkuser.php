<?php
require_once 'functions.php';

if(isset($_POST['email']))
{
    $email = sanitizeString($_POST['email']);
    $result = queryMysql("SELECT * FROM users WHERE email='$email'");
    
    if ($result->num_rows)
        echo "<span class='taken' style='color:red'>This email is already in use.</span>";
    
    else
        echo "<span class='available' style='color:green'>This email is available.</span>";
}

?>