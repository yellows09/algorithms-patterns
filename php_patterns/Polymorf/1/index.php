<?php
//include_once 'RegisterMsg.php';
//
//$te = new RegisterMsg();
//$te->register('text');

//var_dump(in_array('test',[0,1]));

$basket = [
    [],
    [],
];
$countBasket = fn(array $basket) => count($basket);
echo $countBasket($basket);