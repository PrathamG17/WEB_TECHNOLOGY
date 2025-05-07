<?php
    $characters = range('a', 'p', 1);

    print("<br><br>Array is : ");
    print_r($characters);

    $characters1 = array_slice($characters, 5, 5, true);

    print("<br><br>Sliced Array is : ");
    print_r($characters1);

    $characters1 = array_slice($characters, -7, 5, false);

    print("<br><br>Sliced Array is : ");
    print_r($characters1);

    /*
        fourth parameter state ki keys pahilya array chya preserve karaychya ki nahi..
        same try with associative array...
    */
?>