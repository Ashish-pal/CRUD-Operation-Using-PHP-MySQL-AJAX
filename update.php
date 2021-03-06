<?php

include 'db.php';

extract($_POST);

$q = "UPDATE details SET name='$name', address='$address', phone='$phone' WHERE id=" . $id;

//execute query
if ($conn->query($q)) {
    echo "Data Updated";
} else {
    echo "Unable to Update Data";
}
