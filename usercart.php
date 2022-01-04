<?php
session_start();
$id=$_POST['id'];
$Username=$_SESSION['Username'];
$cartids=rand(1,1000)*12345;
$quantity=1;
$conn=new mysqli('localhost:3308','root','','orders');
    if ($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $user=mysqli_query($conn,"SELECT * from orders.cart where cusername='$Username' and Product_id='$id'");
        $result=mysqli_num_rows($user);
        if($result==0)
        {
        $stmt=$conn->prepare("insert into cart(Product_id,cusername,cart_ids,Quantity) values(?, ?, ?,?)");
        $stmt->bind_param('ssss',$id,$Username,$cartids,$quantity);
        $stmt->execute();
        echo '<script>alert("Product has been added to cart");window.location="yourcart.php";</script>';
        $stmt->close();
        $conn->close();
        }
        else
        {
            echo '<script>alert("This product has already been added to cart");window.location="yourcart.php";</script>';
        }
    }
?>