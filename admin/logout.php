<?php
session_start();
include('../function.inc.php');
unset($_SESSION['IS LOGIN']);
redirect('login.php');
?>