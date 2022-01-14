<?php

include 'conn.php';
if(isset($_GET['id'])){
$branchid= $_GET['id'];
$q=" DELETE FROM `branch` WHERE branch_id =$branchid ";
mysqli_query($con,$q);
}
header('Location:branchData.php');
?>