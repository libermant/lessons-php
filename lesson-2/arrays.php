<?php
// $person=["last_name"=>"liberman"];
// if(array_key_exists('last_name', $person)){

// }
// $key = array_key_exists('last_name', $person)&&
// !empty ($person['last_name']){

// }
// var_dump($key);

// 
// $a = [];
// $c = ['tets',1,"","a",null];
//  var_dump(isset($a)); 
//  var_dump(empty($a));

// function clear($arr){
    
//     return (empty(!$arr));
// }

// //print_r(array_filter($c,"clear"));
// print_r(array_values($c));

$myArray = [15, null, "  ", -2, NULL, "", " \n", "Red", 54, "\t"];
$newArray=[];
forEach($myArray AS $el){
    $index=count($myArray);
    if (!empty ($el))( $newArray[$index]=$el);
};
print_r($myArray);
var_dump($newArray);
