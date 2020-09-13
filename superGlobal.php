<?php 

    // SUPERGLOBALS

    // $_GET[] and $_POST[] are also superglobal variable.

    echo $_SERVER['SERVER_NAME'] . "<br>" ;
    echo $_SERVER['REQUEST_METHOD'] . "<br>" ;
    echo $_SERVER['SCRIPT_FILENAME'] . "<br>" ;
    echo $_SERVER['PHP_SELF'] . "<br>" ;

    // foreach($_SERVER as $element){
    //     echo $element . "<br>";
    // }
        
    // $_SESSION , $_COOKIE are also SUPERGLOBALS


    //for session.php file
    session_start();

    echo "Session => " . $_SESSION['name'];
    
    //We can also overwrite this session variable
    $_SESSION['name']="SessionoverWrite";

    echo "After overWite => " . $_SESSION['name'];
    
    // To unset or delete the single session variable 
    unset($_SESSION['name']);

    // To unset or delete the all session variable 
    session_unset();

    // After unset the session variable if we try to access that session variable than we will get error.



    //Get Cookie
    $getCookie=$_COOKIE['cookieName'] ?? "Unknown";

    echo "GetCookie=> " . $getCookie;
?>