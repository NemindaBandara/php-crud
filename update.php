<?php 
  include 'db.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $age = $_POST['age'];

  $sql = "update studentInfo set name='$name', age='$age' where id='$id'";
  $result = $conn->query($sql);
  $conn->close();


  header("Location: index.php");
?>