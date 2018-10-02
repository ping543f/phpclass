<?php

//$usr= $_POST['un'];
//$pass= $_POST['pw'];

$usr= $_GET['un'];
$pass= $_GET['pw'];
echo "<table border='1px'><tr>";
echo "<td>Your name is : ".$usr."</td></tr><tr><td>";
echo "Password is: ".$pass."</td></tr></table>";

?>