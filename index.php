<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>PHP CRUD Application</title>
</head>
<body>



  <div class="container mt-3">
    <h1 class="text-center">PHP CRUD Application</h1>
    <p class="text-center">Create, Read, Update, Delete operations in PHP</p>

    <form class="" action="create.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name: </label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      
      <div class="mb-3">
        <label for="age" class="form-label">Age: </label>
        <input type="number" class="form-control" id="age" name="age" required>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table mt-5">
      <tbody>
        <?php include 'read.php'; ?>
      </tbody>
    </table>
  </div>



  
  
</body>
</html>