<?php
include "config.php";

$id = $_GET['id'];
$sql = "DELETE FROM 'employee' WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Locatiob: index.php?msg=Record delete succesfully");
}
else {
    echo "Failed: " . mysqli_error($con)
}
?>