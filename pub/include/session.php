<?php 
session_start(); 
if (isset($_SESSION['candidate'])) {
   //header('location: login.php');
 } else {
   header('location: login.php');
 } ?>