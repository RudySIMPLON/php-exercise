<?php 
$datetime1 = date_create('2017-01-13');
$datetime2 = date_create('2016-05-16');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');