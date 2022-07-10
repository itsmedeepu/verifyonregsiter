<?php

include 'assets/db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pwd'];

$m="select * from students where email='$email' &&  phone='$phone'";
$k=mysqli_query($con,$m);
$j=mysqli_num_rows($k);

if($j==1){

    echo "<script>alert('user alredy registered'),window.location.href='index.html';</script>";

}

else{

    $q="insert into students(name,email,phone,password) values('$name','$email','$phone','$pass'); insert into student_verify(stu_id,status,Description) values(last_insert_id(),'Pending','Verification is On process')";
    $query=mysqli_multi_query($con,$q);
    echo "<script>alert('registered successfully'),window.location.href='index.html';</script>";

}





?>