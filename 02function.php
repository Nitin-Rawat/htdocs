<?php

function first($num)
{
     $num ="first";
     
     // echo "<br> $num";
}

function second(&$num)
{
     $num = "Second____________________!";   //This is changed by refference , as $num stores address of $str and change the value on that address.
     // return $num;
     // echo "<br> $num";
}

$str = "php";

first($str);
// echo "<br> Func_1 : $str" ;
second($str);
// echo "<br> Func_1 : $str";


// echo "<br> $str";

$anonymous_fun =function () {
     echo "<br><br> <H1>anonymous function</h1>";
};   
// $anonymous_fun();




function recur_func($num){
     if($num <= 10){
          echo "<br> $num";
          recur_func(++$num ); //can't use $num++ <== this will cause infinte loop, use $num + 1, or ++$num to avoide infinty
     }
}
recur_func(1);



?>

