<?php
 $age = $_GET['age'];
 $name = $_GET['name'];
 $date= date(" jS / F /Y ") ;
 echo ' Happy,' . $age . ' b-day ' .  $name. 
 '<br>
 Today '.$date.
    ' u start a new Tehilim Chapter -'.$age+1;  
?>