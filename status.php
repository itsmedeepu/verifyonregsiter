<?php
include 'assets/db.php';
$id=$_POST['id'];
$m="select * from student_verify where stu_id='$id'";
$k=mysqli_query($con,$m);
$j=mysqli_num_rows($k);
$row=mysqli_fetch_assoc($k);
if($j!=1){

    echo "1";

}

else{
    $tr="";
    $id=$row['stu_id'];
    $status=$row['status'];
    $des=$row['Description'];
    $tr.='<td>
    <td>'.$id.'</td>
    <td>'.$status.'</td>
    <td>'.$des.'</td>
    </td>';
  echo $tr;

    

}





?>