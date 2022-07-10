<?php

include 'assets/db.php';
session_start();
$email=$_POST['email'];
$pass=$_POST['pwd'];

$m="select * from students where email='$email' &&  password='$pass'";
$k=mysqli_query($con,$m);
$j=mysqli_num_rows($k);
$row = mysqli_fetch_assoc($k);

if($j==1){
    $id=$row['id'];

    $n="select * from student_verify where stu_id=$id";
    $l=mysqli_query($con,$n);
    $h=mysqli_num_rows($l);
    $r = mysqli_fetch_assoc($l);
    if($r['status']=='Pending')
    {

        echo "<script>alert('Admin not yet verfied ur id'),window.location.href='index.html';</script>";

    }
    else{

        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['phone']=$row['phone'];

        echo "<script>window.location.href='dashboard.php';</script>";




    }

}

else{

    echo "<script>alert('Invalid login Details'),window.location.href='index.html';</script>";


}





?>