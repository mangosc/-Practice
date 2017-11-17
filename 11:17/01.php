<?php 
    //创建一个对象
    class Cart {
        var $todays_date;
        function Cart() {
            $this->todays_date = date("Y-m-d");
        }
    }
    $cart1 = new Cart;
    $cart2 = new Cart;
 ?>