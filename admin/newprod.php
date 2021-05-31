<?php
 $conn = mysqli_connect("localhost","root","","teenyweeny");

$prodname=$_POST['name'];
$price=$_POST['price'];
$size=$_POST['size'];
$category=$_POST['category'];
$createdat=$_POST['createdat'];
$picture=$_POST['picture'];
if (isset($_POST['submit'])){
$query = "INSERT INTO  products (name,price,picture,category,size,createdat)values('$prodname','$price','$picture','$category','$size','$createdat')";
$query_run = mysqli_query($conn,$query);

if($query_run)
     {
        header('Location:products.php');

}
else{
    echo "error";
}
}
?>