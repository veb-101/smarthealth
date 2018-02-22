<?php
$starttime = '9:00';  // your start time
$endtime = '21:00';  // End time
$duration = '30';  // split by 30 mins

$array_of_time = array ();
$start_time    = strtotime ($starttime); //change to strtotime
$end_time      = strtotime ($endtime); //change to strtotime

$add_mins  = $duration * 60;

while ($start_time <= $end_time) // loop between time
{
   $array_of_time[] = date ("h:i", $start_time);
   $start_time += $add_mins; // to check endtie=me
}
echo '<pre>';
print_r($array_of_time);
echo '</pre>';
?>
