<html>
<body>
<?php

$Trees = array(
	"wakiso"=>array("muvule"=>569, "eucalyptus"=>80003,"musizi"=>767363,"musabu"=>8984),
	"kabale"=>array("muvule"=>69,"eucalyptus"=>803,"musizi"=>7363,"musabu"=>89),
	"kibale"=>array("muvule"=>90,"eucalyptus"=>703,"mmusizi"=>763,"musabu"=>29)
	);

   $keys = array_keys($Trees);
   for($i=0; $i<3;$i++){
   	echo $keys[$i]."{<br>";

   	foreach($Trees[$keys[$i]] as $key=> $value){
   		echo $key .":" .$value . "<br>";   	
   	}
   	echo "}<br>";
   }



?>
</body>
</html>