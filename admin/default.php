<?php
session_start();
$_SESSION['in'] = 0 ;
header("Location: ../index.php");
exit();
