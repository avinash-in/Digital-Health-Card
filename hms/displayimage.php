<html>
<head></head>
<body>
    <center>
    <form action="" method="POST" enctype="multipart/form-data"></form>
    <table>
    <thead>
    <tr>
    <th>image</th>
    </tr>
    </thead>

    <?php
    $con= mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,'hms');

    $query= " SELECT image FROM medical_image";
    $query_run=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($query_run)){
        ?> 

        <tr>
        <td> <?php echo '<img src="data:image/jpeg/png/jpg;base64,' .base64_encode($row['image']).'" alt="image" style="width: 100px; height:100px:" >'; ?></td>
        </tr>

        <?php
    }

?>
    </table>
    
    </center>
</body>
</html>