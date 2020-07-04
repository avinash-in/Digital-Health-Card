<html>
<head></head>
<body>
    <center>
        <h1>insert</h1>

    <form action="" method="POST" enctype="multipart/form-data">
    <label for="">choose image</label><br>
    <input type="file" name="image" id="image"/><br>
    <input type="submit" name="upload" value="uploadimg"/><br>
</form>
    </center>
</body>
</html>
<?php
 $con= mysqli_connect("localhost","root","");
 $db=mysqli_select_db($con,'hms');
 
 if(isset($_POST['upload']))
 {
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     $query = "INSERT INTO medical_image('image') VALUES ('$file')";
     $query_run = mysqli_query($con,$query);
     if($query_run) {
         echo "sussec";
     }
     else{
         echo "error";
     }
 }
?>