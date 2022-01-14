<?php

include 'conn.php';
if(isset($_GET['id'])){
$cid= $_GET['id'];
$q=" DELETE FROM `customer` WHERE customer_id =$cid ";
mysqli_query($con,$q);
}
header('Location:customerData.php');
?>