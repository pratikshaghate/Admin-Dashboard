<?php
include("Connection.php");
session_start();
$_SESSION['username'];
session_destroy();
echo "<script>
alert('logout successfully');
window.location.href=('index.php');
</script>";
?>