<?php
if(!empty($_GET['id'])){

    $dbhost ='localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $dbName ='hms';

    $db= new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

    if($db->connect_error){
        die("con fail ".$db->connect_error);
    }

    $result =$db->query("SELECT image FROM medical_image");
    $imgData=$result->fetch_assoc();
    header("Content-type: image/jpg");
    echo $result; 
}

?>
