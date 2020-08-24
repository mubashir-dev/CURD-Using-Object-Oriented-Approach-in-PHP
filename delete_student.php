<?php
require_once "objects/objects.php";
$id=$_POST["id"];
$student->id=$id;
if($student->delete())
{
echo "Student Data Successfully Dropped";
}
else
{
    echo "Failed To  Dropped";
}
?>