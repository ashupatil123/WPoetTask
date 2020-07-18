<!DOCTYPE html>
<html>
<body>

  <form action="imgupload.php" method="post" enctype="multipart/form-data"/>
  
  <br><input name="pic[]" type="file" multiple="multiple" /></br>
  
 <br><p> <input type="submit" name="Submit" value="Upload Image"/></p></br>

<br><a href="add.php" class="btn btn-info" role="button">Back</a></br>
<br></br>


</body>
</html>



 <?php

 $con = mysqli_connect('localhost','root','','shopping');
 if($con){

echo " Database connection is succesfull.";

 }
 else{
  //echo "connection is not established";
 }

mysqli_select_db($con,'shopping');




 $targetDir ="newimg/";
  
  if(!empty(array_filter($_FILES['pic']['name'])))
    {
                     
     foreach($_FILES['pic']['name']  as $key=>$val)
       {

                  
       $fileName = basename($_FILES['pic']['name'][$key]);
                        
        $targetFilePath = $targetDir.$fileName;
         

         if(move_uploaded_file($_FILES["pic"]["tmp_name"][$key], $targetFilePath))
          {
          $insertValuesSQL = "newimg/".$fileName;
         // echo $insertValuesSQL;
          }
           $insertValuesSQL= "insert into card_data(pimg) values('$insertValuesSQL')";
           mysqli_query($con,$insertValuesSQL);
        }
        echo "Image Upload Succesfully";
		//mysqli_select_db($con,'shopping');

}

?>

