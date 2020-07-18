<?php 
 $con = mysqli_connect('localhost','root','root','shopping');
 if($con){

 echo " Databse connection is succesfull.";

 }
 else{
  echo "connection is not established.";
 }


mysqli_select_db($con,'shopping');
 $pid = $_POST['pid'];	
 $pname = $_POST['pname'];
 $pdesc = $_POST['pdesc'];
 $price = $_POST['price'];
 

 $query = "insert into carddata2 (pid,pname, pdesc, price)
values ('$pid','$pname','$pdesc', '$price')";

mysqli_query($con,$query);
header('location:add.php');

mysqli_select_db($con,'shopping');


?>
