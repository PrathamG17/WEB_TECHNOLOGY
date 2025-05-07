<?php
    $indexArr = array(1, 2, 3, 4, 5, 6);

    print("<br><br>Array is : ");
    print_r($indexArr);

    $indexArr = array_pad($indexArr, 10, 100);
    print("<br><br>Array is : ");
    print_r($indexArr);

    $indexArr = array_pad($indexArr, -15, 100);
    print("<br><br>Array is : ");
    print_r($indexArr);

    /*
        second parameter kaalji purvak dyava.. to kayam array chya existing size peksha
        jast ch asaayla hava.. tarach effect disel..
    */

    $associativeArr = array("one" => 1, "two" => 2, "three" => 3, "four" => 4);
    $associativeArr = array_pad($associativeArr, 10, "Payal");

    print("<br><br>Array is : ");
    print_r($associativeArr);

    $associativeArr = array_pad($associativeArr, -15, "Payal");

    print("<br><br>Array is : ");
    print_r($associativeArr);

    /*
        associative array case madhe pad element he.. index pramane indexed kele jatil..
        sequential...
    */
?>
