<?php

include 'db.php';

$query = "SELECT * FROM details";

$result = $conn->query($query);

//checking result that should be more than 0
if ($result->num_rows > 0) {
    //html code for output
    $opt = '<table class="table table-bordered">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    ';

    //looping our data till the last on our database
    while ($row = $result->fetch_assoc()) {
        $opt .= "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['phone']}</td>
                    <td><button type='button' class='btn btn-warning edit' id='" . $row['id'] . "'>Edit</button></td>
                    <td><button type='button' class='btn btn-danger delete' id='" . $row['id'] . "'>Delete</button></td>
                </tr>
                ";
    }
    $opt .= '</tbody>
        </table>';
    // echo our output that we can use in our index.php using ajax response
    echo $opt;
}
