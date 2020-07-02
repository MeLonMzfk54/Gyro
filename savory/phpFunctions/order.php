<?php
	require_once('connect.php');
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $count = $_POST["count"];
    $title = $_POST["title"];
    $sql = "INSERT INTO orders (title,count,name,tel) VALUES('$title','$count','$name','$tel')";
    mysqli_query($conn,$sql);
?>