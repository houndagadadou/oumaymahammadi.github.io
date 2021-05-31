<?php
    $connection = mysqli_connect("localhost","root","","teenyweeny");
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM categories WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
            header('Location: categories.php');
        }
}
?>