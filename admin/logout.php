<?php
require_once 'db.php';
session_start();
session_destroy();
echo "<script>alert('Logged Out Successfully!!!!!!'),window.location.href='admin.html'</script>";

?>