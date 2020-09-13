<?php 
    $arr=['Akash','Anupam','Anubhav','Manya','Tanya'];

    for($i=0;$i<count($arr);$i++){
        echo $arr[$i] ."<br>";
    }

    foreach($arr as $elment){
        echo $elment ."<br>";
    }

    $i=0;
    while($i<count($arr)){
        echo $arr[$i] ."<br>";
        $i++;
    }

?>