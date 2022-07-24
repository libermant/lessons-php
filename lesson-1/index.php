<?php
$name="tsipi";
$a=rand(0,30);
echo $a;
echo '<br/>';
for($i=0;$i<$a;$i++){
	if($i%2==0){
		echo $i;
	};
};
echo '<br/>';

/*$q=0;
for($i=0;$i<100;$i++){
	echo $q[i].$q[-i];
}*/

$limit=100;
$x=0;
$y=1;
for($i=0;$i<$limit;$i++){
	$z = $x + $y;
	echo $z .'<br>';
	$x=$y;
	$y=$z;
}
echo '<br/>';

function foo($a){
	$a=$a+2;
	return $a;
}
$obj=foo(2);
echo $obj;
	
?>
