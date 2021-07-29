<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

require('masaba.php');
// Set session variables
$_SESSION["masabu_total"] = $masabu_total;
echo "<br>";

echo "Session variable is set to " .$masabu_total;
?>

</body>
</html>
