<?php

include 'db.php';

$query = "DELETE FROM details WHERE id=" . $_POST['id'];

//execute query
if ($conn->query($query)) {
    echo "data Deleted";
} else {
    echo "Unable to Delete Data" . $conn->error;
}
