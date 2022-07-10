<?php
$con=mysqli_connect('localhost','root','');


if(mysqli_select_db($con,'practice')){

    //echo 'selected databse';

}

else{

    //echo 'connection failed';
}




?>