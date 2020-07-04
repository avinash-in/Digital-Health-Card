<?php
// file called using <img src="image.php?id=123" alt="">

 // get and condition id, setup default if id not supplied

// setup default type/image in case of error (no id, invalid id, no matching image, query error)
$type = 'image/jpg';
$default = 'error.jpg'; // assumes you have an error image file

if($id > 0){
// make db connection and select db
$link=mysqli_connect('localhost','root','');
mysqli_select_db($link,'Hms');

// query for the image mime type and image data
$query = "SELECT doctype,image FROM medical_image;
$result = mysqli_query($link,$query);
if(mysqli_num_rows($result)){
	// query worked and image found
	list($type,$image) = mysqli_fetch_row($result);
}
}
// output the actual image or the default/error image
header("Content-Type: $type");
if(isset($image)){
echo $image;
} else {
readfile($default);
}