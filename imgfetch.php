<?php

$con = mysqli_connect('localhost','root','','shopping');
 if
($con){

  echo " Database connection is succesfull";

 }
 else{
  echo "connection is not established";
 }

function ShowData(){

	global $con;
	$query = "SELECT * FROM `card_data`";
	$run = mysqli_query($con,$query);

	if($run == TRUE){
	?>
	<table border="1" width="80%">
		<th>Product Image</th>
		
	<?php
	while($data = mysqli_fetch_assoc($run)){

		?>
		
			<tr>
				<td><?php echo $data['pimg'];?></td>
			</tr>

		<?php
		}

		?></table> <?php
	}
	else{
		echo "Error !!";
		}


}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<body>

<?php ShowData(); ?>

</body>
</html>