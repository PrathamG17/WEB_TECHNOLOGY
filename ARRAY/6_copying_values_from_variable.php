<?php
    $indexArr = range(1, 10, 1);
    $associativeArr = array("one" => 1, "two" => 2, "three" => 3);

    list($no1, $no2, $no3, $no4,,$no6) = $indexArr;
    //list($key1 => $value1, $key2 => $value2, $key3 => $value3, $key4 => $value4) = $associativeArr;

    /*
        list function only works on numeric array...
        ',,' escape one element from copy..
    */
    print("<br>no1 : $no1");
    print("<br>no2 : $no2");
    print("<br>no3 : $no3");
    print("<br>no4 : $no4");
    print("<br>no6 : $no6");

?>