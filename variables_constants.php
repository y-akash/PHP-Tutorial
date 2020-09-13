<?php
    $name='akash';
    $branch='comp';
    $class='BE';
    echo $class;

    // Creating CONSTANTS
    define('constantName','valueOftheConstant');

    // define('constantName','valueOftheConstant');//trying to edit the constant so here we get the error
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables & Constants</title>
</head>
<body>
    <h1>hey</h1>
    <h2><?php $name?></h2>
    <h2><?php echo $branch?></h2>
    <h2><?php echo constantName ?></h2>
</body>
</html>

