<?php
include("../partials/connect.php");
$connect=mysqli_connect($host,$user,$password,$dbname);
    $email = $_POST["email"];
    $msg = $_POST["msg"];
    echo $sql = "INSERT INTO contact(email,msg) VALUES('$email','$msg')";
  echo  $connect->query($sql)
?>