<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <?php
                    // Check if there's an error message passed from create.php or edit.php
                    if (isset($_GET['errorMessage'])) {
                        $errorMessage = $_GET['errorMessage'];
                        echo "<p>$errorMessage</p>";
                    } else {
                        // Check if any of the fields are missing
                        $missingFields = [];
                        if (empty($_GET['name'])) {
                            $missingFields[] = 'name';
                        }
                        if (empty($_GET['address'])) {
                            $missingFields[] = 'address';
                        }
                        if (empty($_GET['salary'])) {
                            $missingFields[] = 'salary';
                        }
                        if (empty($_GET['gender'])) {
                            $missingFields[] = 'gender';
                        }
                        if (!empty($missingFields)) {
                            $missingFieldsList = implode(', ', $missingFields);
                            echo "<p>Please fill all the information. Missing fields: $missingFieldsList</p>";
                        } else {
                            echo "<p>Invalid request or missing parameters.</p>";
                        }
                    }
                    ?>
                    <hr>
                    <p class="mb-0">Please <a href="/index.php">click here</a> to return to the landing page.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
