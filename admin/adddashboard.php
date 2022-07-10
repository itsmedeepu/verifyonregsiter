<?php
session_start();
include "db.php";
if (empty($_SESSION['email']) || $_SESSION['email'] == '') {
    header('location:admin.html');
    die();
} else {
    $query = "select students.id,students.email,students.phone,students.name,student_verify.status,student_verify.Description from students join student_verify on student_verify.stu_id=students.id where student_verify.status='Pending'";
    $result = mysqli_query($con, $query);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



<h2>WELCOME <?php echo $_SESSION['name'];?></h2>

<h2> <a href="logout.php">Logout</a></h2>


<h2>REGSITERED STUDENTS</h2>
<div>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>STATUS</th>
    <th>Description</th>
    <th>Verify</th>
  </tr>
  <?php

while($res=mysqli_fetch_array($result)){

    ?>

    <tr>

        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['phone']; ?></td>
        <td><?php echo $res['status']?></td>
        <td><?php echo $res['Description']; ?></td>
        <td><button type="submit"><a href="verify.php?id=<?php echo $res['id']?>">Verify</a></button></td>
    </tr>

    <?php

}

?>
</table>
</div>

<br>
<br>
<br>
<h2>VERIFIED STUDENTS</h2>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>STATUS</th>
    <th>DESCRIPTION</th>
    <!-- <th>Verify</th> -->
  </tr>
  <?php

$query = "select students.id,students.email,students.phone,students.name,student_verify.status,student_verify.Description from students join student_verify on student_verify.stu_id=students.id where student_verify.status='Verified'";
$result = mysqli_query($con, $query);



while($re=mysqli_fetch_array($result)){

    ?>

    <tr>

        <td><?php echo $re['id']; ?></td>
        <td><?php echo $re['name']; ?></td>
        <td><?php echo $re['email']; ?></td>
        <td><?php echo $re['phone']; ?></td>
        <td><?php echo $re['status']; ?></td>
        <td><?php echo $re['Description']?></td>
        <!-- <td><button type="submit"><a href="verify.php?id=<?php echo $res['id']?>">Verify</a></button></td> -->
    </tr>

    <?php

}

?>

</div>

</table>
</body>
</html>