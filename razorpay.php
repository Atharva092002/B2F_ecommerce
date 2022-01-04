<?php
session_start();
$id=$_POST['id'];
$_SESSION['id'] = $id;
$conn=new mysqli('localhost:3308','root','','croppurchase');
$quantity=$_POST['Quantity'];
$_SESSION['Quantity'] = $quantity;
$new_q=$quantity;
$user = mysqli_query($conn,"SELECT * FROM croppurchase where id='$id'");
$result = mysqli_num_rows($user);

if($result>0)
{
    while($row = mysqli_fetch_array($user))
    {
        if ($row["Quantity"]==0)
			{
				echo '<script>alert("Sorry this product is out of stock. Do check back later");window.location="yourcart.php";</script>';
			}
			else if ($quantity<0)
			{
				echo '<script>alert("Please enter the correct quantity");window.location="yourcart.php";</script>';
			}
			else if ($quantity>$row["Quantity"])
			{
				echo '<script>alert("Sorry we dont have this much quantity of product");window.location="yourcart.php";</script>';
			}
			else if (empty($row_NEW['Address']))
			{
				echo '<script>alert("Sorry you cannot purchase product, please update address first in profile page");window.location="yourcart.php";</script>';
			}
			else if(empty($row_NEW['Mobile']))
			{
				echo '<script>alert("Sorry you cannot purchase product, please update mobile number first in profile page");window.location="yourcart.php";</script>';
			}
            else
            {
?>
<form action="invoice.php" method="POST">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script    
src="https://checkout.razorpay.com/v1/checkout.js"    
data-key=rzp_test_PhtNN9tdjceDEW  Enter the Test API Key ID generated from Dashboard → Settings → API Keys    
data-amount="100" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.    
data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account    
data-buttontext="Pay with Razorpay"    
data-name="Boost the Farmers"    
data-description="Farm products"      
data-prefill.name=""    
data-prefill.email=""    
data-theme.color="#C30417"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
<style>
.razorpay-payment-button{display:none;}
</style>
<script type="text/javascript">
$(document).ready(function()
{
    $('.razorpay-payment-button').click();
});
</script>
<?php
            }
    }
}
?>