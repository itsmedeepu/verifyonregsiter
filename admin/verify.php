<?php
session_start();
include "db.php";
if (empty($_SESSION['email']) || $_SESSION['email'] == '') {
    header('location:admin.html');
    die();
} else {

    $name=$_SESSION['name'];
    $message="Verified By admin-$name";

    $id=$_GET['id'];
    $query="update student_verify set status='Verified',Description='$message' where stu_id='$id'";
    mysqli_query($con,$query);
    echo "<script>alert('User verified successfully!!!!!!'),window.location.href='adddashboard.php'</script>";
    echo $name;
    // echo $id;

    // $query = "select students.id,students.email,students.phone,students.name from students join student_verify on student_verify.stu_id=students.id where student_verify.status='Pending'";
    // $result = mysqli_query($con, $query);
}


?>



