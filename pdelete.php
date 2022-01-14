<?php

include 'conn.php';
if(isset($_GET['id'])){
$policy= $_GET['id'];
$q=" DELETE FROM `policy` WHERE policy_no =$policy ";
mysqli_query($con,$q);
}
header('Location:policyData.php');
?>