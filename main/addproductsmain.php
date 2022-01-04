<?php
$id=$_POST['id'];
$Name=$_POST['Name'];
$price=$_POST['price'];
$Sold=$_POST['Sold'];
$Rating=$_POST['Rating'];
$quantity=$_POST['quantity'];
$file = $_FILES['Prodimg']['name'];
$conn=new mysqli('localhost:3308','root','','croppurchase');
    if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $stmt=$conn->prepare("insert into croppurchase(id,Name,image,price,SoldBy,Rating,Quantity) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssss',$id,$Name,$file,$price,$Sold,$Rating,$quantity);
        $stmt->execute();
        move_uploaded_file($_FILES['Prodimg']['tmp_name'],"$file");
        echo '<script>alert("The information has been updated in our Database");window.location="../admin/addproducts.php";</script>';
        $stmt->close();
        $conn->close();
    }
?>