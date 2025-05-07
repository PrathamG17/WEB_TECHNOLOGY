<?php
    //consequitive integers or characters..
    $integerArr = range(1, 11, 2);
    $characterArr = range('a', 'z', 3);

    /*
        above third parameter he step aahe.. ki kitavi step consider karaychi..
        aani pahile don parameter inclusive aahet..
    */

    print("<br><br>Integer Array : ");
    print_r($integerArr);

    print("<br><br>Character Array : ");
    print_r($characterArr);

    print("<br><br>Count Elements : ");
    print(count($integerArr));

    print("<br><br>[using sizeof] Count Elements : ");
    print(sizeof($integerArr));

    /*
        sizeof() is an alias for count() function..
    */
?>
