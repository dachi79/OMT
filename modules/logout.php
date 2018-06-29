<?php 
session_start();
unset($_SESSION['name']);
unset($_SESSION['nadimak']);
unset($_SESSION['status']);
header("location:../index.php");

