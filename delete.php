<?php 


$con = mysqli_connect('localhost','root','root','shopping');
 if($con){

 echo " Database connection is succesfully.";

 }
 else{
  echo "connection is not established.";
 }




$pid = $_GET['pid']; 

// sql to delete a record
$sql = " DELETE FROM carddata2 WHERE pid = $pid ";


mysqli_query($con,$sql);

header('location:fetchdata.php');


 ?> 