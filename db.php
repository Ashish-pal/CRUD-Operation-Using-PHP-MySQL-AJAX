<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DBNAME", "ajaxtodo");

    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME) or die("cannot connect to the database");

    /*$conn = new mysqli('localhost', 'root', '', 'ajaxtodo');

    if ($conn->connect_error) {
    die("Connection Failed");

} */
