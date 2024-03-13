<pre>
<?php

$data = $_POST;

require("db.php");
$stm = $connect->prepare("   insert into student (name,email,phone,level_id,gender,birth_date) 
                    values(?,?,?,?,?,?)");

$stm->execute([$data['name'], $data['email'], $data['phone'], $data['level_id'], $data['gender'], $data['birthdate']]);

// $connect->close();
header("Location: readUsers.php");
?>
</pre>


