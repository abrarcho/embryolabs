<?php

    $dbhost = 'localhost';
    $dbname = 'embryolabs';
    $dbuser = 'naveedadmin'; //Database admin username
    $dbpass = '65355384'; //Randomly generated database admin password
    
    $connection = new mysqli($dbhost, $dbname, $dbuser, $dbpass);
    if ($connection->connect_error)
        die("Fatal Error");
    
    function queryMysql ($query)
    {
        global $connection;
        $result = $connection->query($query);
        if (!$result) die("Fatal Error");
        return $result;
    }
    
    function destroySession()
    {
        $_SESSION = array();
        
        if (session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie(session_name(), '', time()-2592000, '/');
        
        session_destroy();
    }
    
    function mysql_entities_fix_string($connection, $string)
    {
        return htmlentities(mysql_fix_string($connection, $string));
    }
    
    function mysql_fix_string($connection, $string)
    {
        if (get_magic_quotes_gpc())
            $string = stripslashes ($string);
        
        return $connection->real_escape_string($string);
    }
    
    function sanitizeString($var)
    {
        if (get_magic_quotes_gpc())
            $var = stripcslashes ($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        
        return $var;
    }
    
?>