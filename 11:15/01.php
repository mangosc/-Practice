<?php 

    $var = 'abc';
    if (is_string($var)) {
        echo "$var 是字符串类型<br><br>";
    }
    $var = '12.3';
    if(is_numeric($var)) {
        echo "$var 是数字类型<br><br>";
    }
    $var = true;
    if(is_bool($var)) {
        echo "$var 是布尔类型<br><br>";
    }
    $var = array('a','b');
    if(is_array($var)) {
        echo "$var 是数组类型<br><br>";
    }
 ?>