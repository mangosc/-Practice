<?php 

    $a = 1000;
    function Test()
    {
        echo $a;
        echo global $a;
    }
    Test();

    $a = 123;
    $b = 456;
    function sum() 
    {
        $GLOBALS['b'] = $GLOBALS['a']+$GLOBALS['b'];
    }
    sum();
    echo $b;//输出579

    function Test()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
    Test();
    Test();

    function Test()
    {
        global $a = 1000;
    }
    Test();
    $b=$a+1000;
    echo $b; //$b的值等于2000

    $a = 123;
    $b = 456;
    function sum()
    {
        global $a,$b;
        $b = $a+$b;//$b的值等于123+456 即579
    }
    sum();
    echo $b;//显示579
 ?>