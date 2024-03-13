<pre>
<?php

require("db.php");

$id = $_POST['id'];

var_dump($id);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$level_id = $_POST['level_id'];
$gender = $_POST['gender'];
$id = $_POST['id'];
$birthdate=$_POST['birthdate'];

$stm = $connect->prepare("UPDATE student SET name=?, email=?, phone=?, level_id=?, gender=?, birth_date=? WHERE id=?");
$stm->bind_param("ssssssi", $name, $email, $phone, $level_id, $gender, $birthdate, $id);
$stm->execute();

$connect->close();
header("Location: readUsers.php");
?>
</pre>


