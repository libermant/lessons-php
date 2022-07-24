<?php
$a=6;
$b="";
$c=[];
var_dump(isset($c));
var_dump(empty($c));
echo'<br>';

$month=[
   "januar",
   "februar",
   "merch",
   "april",
   "may",
   "yuni",
   "july",
   "ogust",
   "saftember",
   "october",
   "november",
   "dechember"
];

$days=[31,28,31,30,31,30,31,31,30,31,30,31];
if(!empty)

foreach($month as $key => $m) {
    echo "in month $m there is $days[$key] ";
    echo '<br>';
    }


?>