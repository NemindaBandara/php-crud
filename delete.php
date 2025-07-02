<?php
  include 'db.php';
  $id = $_GET['id'];
  $sql = "delete from studentInfo where id=$id";
  $conn->query($sql);
  $conn->close();
  header("Location: index.php");
?>