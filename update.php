<?php
include './connection.php';

// to get the id of the user to be updated
if ($_GET['updateid']) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM crud_table WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // print_r($row);

    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    // echo $name;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE crud_table SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        // echo "Record updated successfully";

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
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $name ?>" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?>" placeholder="Enter your Email">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo $mobile ?>" placeholder="Enter your mobile number">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" value="<?php echo $password ?>" placeholder="Enter your password number">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>