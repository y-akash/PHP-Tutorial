<?php
    $firstName='Akash';
    $secondName='Yadav';

    //we can concate the string with the help of .
    echo $firstName . $secondName;
    echo "My name is ".$firstName;
    
    //If we use double "" quotes than we can use variable inside that quotes php will understand that it is variable.
    echo "My name is $firstName";

    //Some function
    echo strlen($firstName);
    echo strtoupper($secondName);
    echo strtolower($firstName);

?>