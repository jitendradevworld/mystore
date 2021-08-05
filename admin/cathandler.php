<?php
include("../partials/connect.php");
$connect=mysqli_connect($host,$user,$password,$dbname);
    $category = $_POST["name"];
    $sql = "INSERT INTO categories(name) VALUES('$category')";
    $connect->query($sql)
?>