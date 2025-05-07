<?php

    print("-----ARRAY-----<br>");

    /*
        following are two ways to create array ..
        1) Using array() construct by passing argument..
        2) and storing one by one value in array which create new array and elements
            in it..
    */
    $indexArr = array(1, 2, 3, 4, 5);

    $associativeArr["one"] = 1;
    $associativeArr["two"] = 2;
    $associativeArr["three"] = 3;
    $associativeArr["four"] = 5;

    print("<br>Index array : ");
    print_r($indexArr);

    print("<br>Associative array : ");
    print_r($associativeArr);

    //Identifying array element..
    $indexArr[2] = 10;
    $associativeArr["two"] = 10;

    print("<br><br>Modified Index array : ");
    print_r($indexArr);

    print("<br>Modified Associative array : ");
    print_r($associativeArr);

    /*
        $indexArr["1"] it will be treated like as $indexArr[1]
        but during interpolation of array don't use quotes for key likewise 
        $associativeArr["two"] it will generate error..
    */ 

    unset($indexArr[3]);

    print("<br><br>after Unset Index array : ");
    print_r($indexArr);

    //also mix array as..
    $mixedArr = array(1, 2, 3, "three" => 33, 4, 5);
    print("<br><br>mixed array : ");
    print_r($mixedArr);

    //adding element at the end..
    $indexArr[] = 6;    //$indexArr[5] = 6

    /*
        In associative array above syntax treated //$indexArr[0] = 6
    */
    print("<br><br>Modified Index array : ");
    print_r($indexArr);

?>
