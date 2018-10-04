
<?php
include('conn.php');
$a=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
$updateQ = mysqli_query($conn,"SELECT * FROM Customer_13207 WHERE  Cust_ID= ?");
     
    // store retrieved row to a variable
    $row = $updateQ->fetch_assoc();
     
    // values to fill up our form
    $shopid = $row['Cust_ID'];
    $shop_name = $row['SName'];
    $contactperson = $row['CName'];
    $contactnumber = $row['CNo'];
    $address = $row['Address'];
    $area = $row['Area'];
    $geographicalcoordinates = $row['GC'];


$conn-> close();
?>
