<?php
$CropName=$_POST['CropName'];
$SciName=$_POST['SciName'];
$Soiltype=$_POST['soiltype'];
$Amt=$_POST['Amt'];
$Season=$_POST['Season'];
$best=$_POST['best'];
$climate=$_POST['climate'];
$file = $_FILES['Cropimg']['name'];
$conn=new mysqli('localhost:3308','root','','cropsinfo');
    if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $user=mysqli_query($conn,"SELECT 'CropName' from cropsinfo where 'CropName'='$CropName'");
        $result=mysqli_num_rows($user);
        $stmt=$conn->prepare("insert into cropsinfo(CropName,ScientificName,Soil_Type,Amt_Rain,Season,Best_seeds,Climate,Image) values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssss',$CropName,$SciName,$Soiltype,$Amt,$Season,$best,$climate,$file);
        $stmt->execute();
        move_uploaded_file($_FILES['Cropimg']['tmp_name'],"$file");
        echo '<script>alert("The information has been updated in our Database");window.location="../admin/addcropinformation.php";</script>';
        $stmt->close();
        $conn->close();
    }
