<?php 
include_once '../connect.php';
if(!isset($_SESSION['username'])){
	header('location:login.php');
}