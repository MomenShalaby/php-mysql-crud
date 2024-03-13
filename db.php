

<?php
// try {
//     $connect = new PDO("mysql:host=localhost;dbname=iti", "root", "5Fe20ugo@s4s");

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// Host: sql11.freesqldatabase.com
// Database name: sql11691037
// Database user: sql11691037
// Database password: M61huSrHqC
// Port number: 3306
// $connect = mysqli_connect("localhost", "root", "5Fe20ugo@s4s", "iti", "3306");
$connect = mysqli_connect("sql11.freesqldatabase.com", "sql11691037", "M61huSrHqC", "sql11691037", "3306");

if ($connect->connect_errno) {
    die("error in database connection: ");
}

?>