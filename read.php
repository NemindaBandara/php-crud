<?php
 include 'db.php';
  $sql = "select * from studentInfo";
  $result = $conn->query($sql);

  while ($row = $result->fetch_assoc()) {
    if ($row['id'] ==$_GET['id']) {
      echo '<form class="" action="update.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
      echo '<td><input type="number" class="form-control" name="age" value="'.$row['age'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" class="form-control" name="id" value="'.$row['id'].'">';
      echo '</form>';
    }
    
    
    else {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['age'] . "</td>";
      echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
      echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
      echo "</tr>";}
  }

  $conn->close();
?>