<?php


require("db.php");


$id = $_GET['id'];
$stm = $connect->query(" select * from student where id = $id");

$data = $stm->fetch_assoc();


?>


<!DOCTYPE html>
<html>

<head>
  <title>Sample Form</title>
  <style>
    input {
      margin-bottom: 20px;
    }

    textarea {
      width: 200px;
      height: 40px;
    }

    #main {
      display: flex;
      margin: auto;
      width: 50%;
      justify-content: center;

    }

    #main>form {
      border: 3px solid black;
      margin-top: 20px;
      padding: 20px;
    }
  </style>
</head>


<body>
  <div id="main">

    <form action="anotherEdit.php" method="post">


    <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>">

      <label for="name">First Name:</label>
      <input type="text" id="name" name="name" value="<?php echo $data['name'] ?>">
      <br>
   
      
      <label for="email">email:</label>
      <input type="text" id="email" name="email" value="<?php echo $data['email'] ?>">
      <br>
     
      <label for="phone">phone:</label>
      <input type="text" id="phone" name="phone" value="<?php echo $data['phone'] ?>">
      <br>

      <label for="level_id">Level:</label>
      <input type="text" id="level_id" name="level_id" value="<?php echo $data['level_id'] ?>">
      <br>


      <label for="gender">Gender:</label>
<input type="radio" id="male" name="gender" value="m" <?php if ($data['gender'] == 'm')
  echo 'checked'; ?>>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="f" <?php if ($data['gender'] == 'f')
  echo 'checked'; ?>>
<label for="female">Female</label>
<br>

      
<label for="birthdate">Birth Date:</label>
      <input type="date" id="birthdate" name="birthdate">
      <br>


      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
    </form>
  </div>

</body>

</html>