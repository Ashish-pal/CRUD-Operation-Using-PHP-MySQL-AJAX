<?php

include "db.php";


$q = "SELECT * FROM details WHERE id=" . $_POST['id'];

$rst = $conn->query($q);

//checking result is more than 0 or not
if ($rst->num_rows > 0) {
    //looping data
    while ($row = $rst->fetch_assoc()) {
        //echo data into json data that we can parse into object in js
        echo json_encode($row);
    }
}
