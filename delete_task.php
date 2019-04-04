<?php
include("db_conexion.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM task WHERE Id=$id";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        die("Query Failed");
    }

    $_SESSION["message"]='Task Removed succefully';
    $_SESSION["message_type"]='danger';

    header("Location: index.php");
}

?>