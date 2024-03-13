<pre>
<?php

require("db.php");

$id = $_GET['id'];

var_dump($id);


$stm = $connect->prepare(" delete from student where id = ?");

$stm->execute([$id]);

$connect->close();
header("Location: readUsers.php");
?>
</pre>


