<?php 
    // Cookie will store in user's computer
    if(isset($_POST['submit'])){
        setcookie('cookieName',$_POST['name'],time()+86400);    //(Cookie_Name, Value, duration of the cookie which will store on users computer)

        header("location:superGlobal.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="cookie.php" method="POST">
        <input type="text" name="name">
        <input type="submit" name='submit' value="submit">
    </form>
</body>
</html>