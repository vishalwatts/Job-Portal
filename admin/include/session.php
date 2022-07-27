<?php 
session_start(); 
if (isset($_SESSION['author_admin'])) {
   //header('location: login.php');
 } else {
   header('location: login.php');
 } ?>