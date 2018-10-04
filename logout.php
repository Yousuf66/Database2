<?php
session_start();
include('conn.php');
$a= $_SESSION["ide"];
mysqli_query($conn,"UPDATE USER SET ACTIVE='0' WHERE ID = $a");







$_SESSION = false;
session_destroy();
	header("Location: login.php");

?>
