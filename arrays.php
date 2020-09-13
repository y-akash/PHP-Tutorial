<?php
    //**********Index Array**********
    $arr1=[1,2,3,4];
    // echo $arr1; //It will give you array.
    print_r($arr1);
    echo $arr1[0];

    //Count the element of Array or we can say that it return length of Array
    echo count($arr1);

    //Another way to create an array
    $arr2=array(5,6,7,8,9);
    
    //To merge the two array in one array
    $arr3=array_merge($arr1,$arr2);
    print_r($arr3);
    


    //**********Associative Array (Key=>value)**********
    $arr4=['firstName'=>'Akash','lastName'=>'Yadav','Branch'=>'Comp'];
    print_r($arr4);
    echo $arr4['firstName'];

    // Another way to create an Associative Array
    $arr5=array('fName'=>'Akash','lName'=>'Yadav','Branchh'=>'Comp');
    print_r($arr5);


    
    //**********Multidimensional Array**********
    $arr6=[
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    print_r($arr6);

?>