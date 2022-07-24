<?php
echo 'functions.php  ';
function foo($arg){
    //foo(2);
    $arg=$arg+2;
    //echo 'foo function<br>';
    //return 'test return';
    return $arg;
}
$param=foo(4);
echo $param;

function recursion($a){
    if ($a < 20) {
    echo "$a\n";
    recursion($a + 1);
    }
    }
    recursion(4);

function makeCoffee($coffee,$sugar=0) {
    return $coffee.'-'.$sugar.'<br>';
}   
$a=makeCoffee('Afuch',1);
echo $a;
makeCoffee('Afuch',5);
makeCoffee('Afuch');
makeCoffee('',1);

function doubleSugar($sugar){
    return $sugar*2;
}
$s=doubleSugar(4);
$w=doubleSugar($s);
echo $s;
echo $w;

function dd($arg){
   // echo'<pre>';
   // echo $arg;
   // echo'<pre>';
   echo"<pre>hi!!price $arg$<pre>";
}
dd(32);
//explode()
$pizza='piece piece1 piece2 piece3';
$pieces=explode(" ",$pizza);
print_r ($pieces);//array
var_dump ($pieces);//
echo (($pieces[0]));//string

//trim()
$pizza='   piece piece1 piece2 piece3   ';
$pizza=trim($pizza);
echo '<div style="background:red">'.$pizza.'</div>';
//strlen
echo strlen($pizza);
echo'<br>';
$pass='Test12345';
echo md5($pass);




