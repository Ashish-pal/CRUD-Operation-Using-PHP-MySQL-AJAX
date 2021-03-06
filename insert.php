<?php

include 'db.php';

$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$query = "INSERT INTO details(name, address, phone) VALUES('$name','$address','$phone')";

$stmt = $conn->query($query);

if ($stmt) {
    echo "Data Added";
} else {
    echo "Error Occured";
}
