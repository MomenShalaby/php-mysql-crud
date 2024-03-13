<a href="index.html">Create a new user </a>



<table border="2">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>level_id</th>
    <th>Gender</th>
    <th>Birth Date</th>
  
</tr>

<?php

require("db.php");

$data = $connect->query("SELECT * FROM student");

$data = $data->fetch_all(MYSQLI_ASSOC);
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $attr) {
        echo "<td>$attr</td>";
    }
    echo "<td> 
        <a href='view.php?id={$row['id']}'> view</a>
        <a href='edit.php?id={$row['id']}'> edit</a>
        <a href='delete.php?id={$row['id']}'> delete</a>
        </td>";
    echo "</tr>";
}

?>
</table>
