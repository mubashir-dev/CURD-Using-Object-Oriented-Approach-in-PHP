<?php
require_once "classes/Student.php";
require_once "database/Database.php";
$db=new Database();
$con=$db->getConnection();
$student = new Student($con);
?>