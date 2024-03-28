<?php
include "config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `employees`(`id`, `name`, `address`, `salary`, `gender`) 
    VALUES (NULL,'$name','$address','$salary','$gender')";

    $results = mysqli_query($con,$sql);

    if (!$result) {
        header("location: index.php?msg=New record created successfully");
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
        <h3>Add New Employee</h3>
        <p class="text-muted">Complete the form below to add a new user</p>
</div>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row">
            <div class="col">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" name="name"
                placeholder="Albert">
</div>
<div class="col">
    <label class="form-label">Address:</label>
    <input type="text" class="form-control" name="address"
    placeholder="Einstein">
</div>
<div class="mb-3">
<label class="form-label">salary:</label>
    <input type="text" class="form-control" name="salary"
    placeholder="$Decimal">
</div>
<div class="form-group mb-3"></div>
<label>Gender:</label> &nbsp;
<input type="radio" class="form-check-input" name="gender"
id="male" value="male">
<label for="male" class="form-input-label">Male</label>
&nbsp;
<input type="radio" class="form-check-input" name="gender"
id="female" value="female">
<label for="female" class="form-input-label">Female</label>
&nbsp;
</div>
<div>
    <button type="submit" class="btn btn-success" name="submit">Save</button>
    <a href="index.php" class="btn btn-danger">Cancel</a>
</div>

</form>


    <!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>