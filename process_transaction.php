<?php

include('config.php');
include("check_user.php");
$db=new Database();
$conn=$db->db_connect();

if(isset($_POST['submitreg']))
{

	$url=$_POST['url'];
	$rid=mysqli_real_escape_string($conn,$_POST['rid']);
	$transactionID=mysqli_real_escape_string($conn,$_POST['transactionID']);

  $update=$db->updateQuery("UPDATE `registration` SET `transaction_id`='$transactionID' where rid='$rid'");

  header("Location:registered-events.php");

}
else
{
	echo "Invalid";
}

?>
