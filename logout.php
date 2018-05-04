<?php session_start();
session_unset('username');
session_unset('typeuser');
header("location:index");
?>