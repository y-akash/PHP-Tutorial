<?php 
    //session variable are available to us until we close the browser.
    //session variable are store on server and not on user computer.

    if(isset($_POST['submit'])){

        //to start the session     
        session_start();

        $_SESSION['name']=$_POST['name'];       // if we have to use this session variable whose name is "name" than we have to first start the session by using session_start() than we can accesss this session variable.

        header("location:superGlobal.php");  


        // Null Coalescing  ??
                
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="session.php" method="POST">
        <input type="text" name="name">
        <input type="submit" name='submit' value="submit">
    </form>
</body>
</html>