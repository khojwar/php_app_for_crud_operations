<?php

include './connection.php';


if ($_GET['deleteid']) {
    $id = $_GET['deleteid'];
    // sql to delete a record
    $sql = "DELETE FROM crud_table WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header('Location: display.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}


?>