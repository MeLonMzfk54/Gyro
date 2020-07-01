<?php
	require_once('connect.php');
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $title = $_POST["call"];
    $count = $_POST["count"];
    $sql = "INSERT INTO orders (title,count,name,tel) VALUES('$title','$count','$name','$tel')";
    mysqli_query($conn,$sql);
?>