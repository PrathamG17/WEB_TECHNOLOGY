<?php
    /*
        --------Multidimensional Array----------
        --> 2D array is array of 1D array...
        --> 3D array is array of 2D array...
        likewise...
    */

    $_1D_1 = range(1, 10, 2);
    $_1D_2 = range(11, 20, 2);
    $_1D_3 = range(21, 30, 2);

    $_2D = array($_1D_1, $_1D_2, $_1D_3);

    print("<br><br> 2D Array : ");
    print_r($_2D);

    print("<br><br>Count element in 2D array : ");
    print(count($_2D));

    print("<br><br>Accessing Individual Elements : ");
    
    print("<br>_2D[0][1] : ");
    print($_2D[0][1]);

    print("<br>_2D[1][2] : ");
    print($_2D[1][2]);

    print("<br>_2D[2][3] : ");
    print($_2D[2][3]);

    //trying multidimensional code for associative array...asap
?>