<?php

include 'db.php';
$name = $_POST['name'];
$age = $_POST['age'];
$sql = "insert into studentInfo (name, age) values ('$name','$age')";
$conn->query($sql);
$conn->close();
header("Location: index.php");
?>