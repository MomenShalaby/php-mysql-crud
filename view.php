<?php

require("db.php");

$id = $_GET['id'];

$stm = $connect->prepare("SELECT * FROM student WHERE id = ?");
$stm->bind_param("i", $id);
$stm->execute();

$result = $stm->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo "<table border='2'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>level_id</th>
            <th>Gender</th>
            <th>Birth Date</th>
          </tr>";
    echo "<tr>";
    foreach ($data as $attr) {
        echo "<td>$attr</td>";
    }
    echo "<td> 
            <a href='view.php?id={$data['id']}'>View</a>
            <a href='edit.php?id={$data['id']}'>Edit</a>
            <a href='delete.php?id={$data['id']}'>Delete</a>
          </td>";
    echo "</tr>";
    echo "</table>";
} else {
    echo "No data found";
}



?>


<a href="readUsers.php">Return to all users </a>