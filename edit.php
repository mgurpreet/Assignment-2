<?php
include "config.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];

    $sql = "UPDATE employees " .
    "SET name = '$name', address = '$address', salary = '$salary', gender = '$gender' " .
    "WHERE id = $id";

    $results = mysqli_query($con,$sql);

    if (!$result) {
        header("location: index.php?msg=Data updated successfully");
    }

    else {
        echo "Failed: " . mysqli_error($con);
    }
}


?>

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
    <div class="text-center mb-4">
        <h3>Edit Employee Information</h3>
        <p class="text-muted">Click update after changing any information</p>
</div>

<?php

$sql = "SELECT * FROM employees WHERE id = $id LIMIT 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" name="name"
                value="<?php echo $row['name'] ?>">
</div>
<div class="col">
    <label class="form-label">Address:</label>
    <input type="text" class="form-control" name="address"
    value="<?php echo $row['address'] ?>">
</div>
<div class="mb-3">
<label class="form-label">salary:</label>
    <input type="text" class="form-control" name="salary"
    value="<?php echo $row['salary'] ?>">
</div>
<div class="form-group mb-3"></div>
<label>Gender:</label> &nbsp;
<input type="radio" class="form-check-input" name="gender"
id="male" value="male" <?php echo ($row['gender']=='male')?"checked":""; ?> >
<label for="male" class="form-input-label">Male</label>
&nbsp;
<input type="radio" class="form-check-input" name="gender"
id="female" value="female" <?php echo ($row['gender']=='female')?"checked":""; ?> >
<label for="female" class="form-input-label">Female</label>
&nbsp;
</div>
<div>
    <button type="submit" class="btn btn-success" name="submit">Update</button>
    <a href="index.php" class="btn btn-danger">Cancel</a>
</div>

</form>


    <!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>