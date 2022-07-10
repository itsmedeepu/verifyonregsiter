<?php
session_start();
include "db.php";
$email=$_POST['email'];
$pass=$_POST['pwd'];

$m="select * from admin where email='$email' &&  password='$pass'";
$k=mysqli_query($con,$m);
$j=mysqli_num_rows($k);
$row = mysqli_fetch_assoc($k);

if($j==1){
    
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    echo "<script>alert('Logged in sucessfully'),window.location.href='adddashboard.php';</script>";


}

else{

    echo "<script>alert('Invalid login Details'),window.location.href='admin.html';</script>";


}





?>