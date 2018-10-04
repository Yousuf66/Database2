<?php
include('connect.php');

 $a=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
    // delete query
    	mysqli_query($conn,"DELETE FROM Customer_13207 WHERE Cust_ID=$a");
        header('Location: http://localhost/displayCust_13207.php');
   


$conn->close();
?>

