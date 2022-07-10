<?php
require_once 'assets/db.php';
session_start();
session_destroy();
echo "<script>alert('Logged Out Successfully!!!!!!'),window.location.href='login.html'</script>";

?>