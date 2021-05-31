<?php

$conn = mysqli_connect("localhost","root","","teenyweeny"); 
//check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";*/

$name = $_POST['name'];
$price = $_POST['price'];
$picture = $_POST['picture'];
$category = $_POST['category'];
$size = $_POST['size'];
$createdat = $_POST['createdat'];


$sql="INSERT INTO `products` (name, price, picture, category,size, createdat) VALUES ('$name', '$price', '$picture', '$category', '$size', '$createdat')";
mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql))
{
	header('Location:./admin/products.php');
}
else
{
	echo "error!";
}







?>