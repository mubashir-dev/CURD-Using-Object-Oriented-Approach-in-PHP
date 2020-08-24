<?php
if (isset($_REQUEST["id"]))
{
$id=$_REQUEST["id"];
require_once "objects/objects.php";
$student->id=$id;
$result=$student->Fetch_Data();
}
else
{
    header("Location:index.php");
}
if($_POST)
{
///echo var_dump($_POST);
$student->name=$_POST["name"];
$student->rollno=$_POST["rollno"];
$student->program=$_POST["program"];
$student->address=$_POST["address"];
if($student->Update())
{
    echo '<div class="container mt-3"><div class="alert alert-success radius_zero">Student Data Successfully Updated</div></div>';

}
else
{
    echo '<div class="container mt-3"><div class="alert alert-danger radius_zero">Failed To Update</div></div>';

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css.css">
</head>
<body>
<div class="container mt-5 p-4">
<a href="index.php" class="btn btn-success float-right">  Show Student   </a>
    <h4>Update Student</h4><hr>
    <form method="POST">
  <div class="form-row">
     <div class="form-group col-md-4">
    <label for="id">Student ID</label>
      <input type="text" class="form-control" name="id" id="id" placeholder="id" value="<?php echo $student->id;  ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $result['name'];  ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="rollno">Rollno</label>
      <input type="text" class="form-control" name="rollno" id="rollno" placeholder="Rollno" value="<?php echo $result['rollno'];  ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="program">Program</label>
    <input type="text" class="form-control" name="program" id="program" placeholder="Study Program" value="<?php echo $result['program'];  ?>">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $result['address'];  ?>">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

<script src="public/js/JQurey.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/script.js"></script>
</body>
</html>