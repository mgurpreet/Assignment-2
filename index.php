

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <title>NEW EMPLOYEE</title>
</head>
<body>
    <nav class="nmavbar navbar-light justify-content-center fs-3 mb-5" 
    style="background-color: #00ff5573;">
    EMPLOYEE COMPLETE APPLICATION
</nav>

<div class="container">
    <?php
    if(isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
       '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <a href="create.php" class="btn btn-dark">Add New</a>

    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">salary</th>
      <th scope="col">Gener</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php

    include "config.php";
    
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)) {

    ?>


    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><?php echo $row['salary'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      
      <td>
        <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
</td>
    </tr>
    
    <?php
    }
    ?>
    
  </tbody>
</table>
</div>

    <!-- bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>