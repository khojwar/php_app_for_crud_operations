<?php
include './connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud_table (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";

        header('Location: display.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <!-- form -->
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter your mobile number">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password number">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>