<?php

include 'conn.php';
if(isset($_GET['id'])){
$agentid= $_GET['id'];
$q=" DELETE FROM `agent` WHERE agent_id =$agentid ";
mysqli_query($con,$q);
}
header('Location:agentData.php');
?>