<?php
include './connection.php';
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
    <div class="container my-5">

        <!-- add user -->
        <button type="button" class="btn btn-primary"><a class="text-light" href="./user.php">Add user</a></button>

        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                <th scope="col">SN</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM crud_table";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                        <th scope="row">'.$row["id"].'</th>
                        <th scope="row">'.$row["name"].'</th>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["mobile"].'</td>
                        <td>'.$row["password"].'</td>
                        <td>
                            <button type="button" class="btn btn-primary"><a href="./update.php?updateid='.$row["id"].'" class="text-white">Edit</a></button>
                            <button type="button" class="btn btn-danger"><a href="./delete.php?deleteid='.$row["id"].'" class="text-white">Delete</a></button>
                        </tr>
                        ';
                    }
                  } else {
                    echo "0 results";
                  }


                ?>
                
            </tbody>
        </table>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>