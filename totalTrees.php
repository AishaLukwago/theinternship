<?php
require('districts.php');

$wakiso_trees=[569,80003,7673643,8984];
$kabale_trees=[69,803,7363,89];

$wakiso_sum=0;
for($i=0,$n=count($wakiso_trees);$i<$n;$i++){

	$wakiso_sum += $wakiso_trees[$i];
}
 echo "The sum of Trees in Wakiso is ".$wakiso_sum,"<br>";

 $kabale_sum=0;

 for($i=0,$n=count($kabale_trees);$i<$n;$i++){

	$kabale_sum += $kabale_trees[$i];
}
 echo "The sum of Trees in kabale is ".$kabale_sum,"<br>";

 $total_sum = $wakiso_sum + $kabale_sum;

 echo "The total sum of trees in wakiso and kabale is ".$total_sum;



?>