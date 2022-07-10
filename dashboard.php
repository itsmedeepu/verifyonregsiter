<?php
session_start();
include "assets/db.php";
if (empty($_SESSION['email']) || $_SESSION['email'] == '') {
    header('location:index.html');
    die();
} else {
    $query = "select * from students";
    $result = mysqli_query($con, $query);
    $num = mysqli_fetch_assoc($result);
    $qy = mysqli_fetch_array($result);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>WELCOME <?php echo $_SESSION['name'];?></h2>

<h2> <a href="logout.php">Logout</a></h2>
    
</body>
</html>