<?php
//error_reporting(0);
require_once "objects/objects.php";
if($_POST)
{
$student->name=$_POST["name"];
$student->rollno=$_POST["rollno"];
$student->program=$_POST["program"];
$student->address=$_POST["address"];
if($student->create_recored())
{
echo '<div class="container mt-3"><div class="alert alert-success radius_zero">Student Data Successfully Saved</div></div>';
}
else
{
    echo '<div class="container mt-3"><div class="alert alert-danger radius_zero">Failed To Saved Data</div></div>';
}
}
//Call Read Function//
$result=$student->read();
$row=$student->countAll();
//Code For Deleting The Student Recores//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curd In PHP</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css.css">
 </head>
<body>
<!--Start of Bootstrap-->
<div class="container mt-5">
<div class="result"></div>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
 <img src="public/images/plus.png"> ADD STUDENT
</button>
<h4 class="mb-5">CURD-OOP PHP</h4><hr>
</div>
<div class="container mt-4">
    <h4>Student Data </h4><hr>
    <?php
    if($row>0){
 
        echo "<table class='table'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>RollNo</th>";
                echo "<th>Program</th>";
                echo "<th>Address</th>";
                echo "<th>Update</th>";
                echo "<th>Delete</th>";

            echo "</tr>";
     
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
     
                extract($row);
      
                echo "<tr>";
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$rollno}</td>";
                    echo "<td>{$program}</td>";
                    echo "<td>{$address}</td>";
                    echo "<td>  
                    <img src='public/images/edit.png'></a> </td>";
                    echo "<td><a delete-id='{$id}' class='btn delete-object'>
                    <img src='public/images/delete.png' Delete</a></td>";
                echo "</tr>";
            }
        echo "</table>";
    }
     
    // tell the user there are no products
    else{
        echo "<div class='alert alert-info'>No products found.</div>";
    }
    ?>
    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
    </div>
    <div class="form-group col-md-6">
      <label for="rollno">Rollno</label>
      <input type="text" class="form-control" name="rollno" id="rollno" placeholder="Rollno">
    </div>
  </div>
  <div class="form-group">
    <label for="program">Program</label>
    <input type="text" class="form-control" name="program" id="program" placeholder="Study Program">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
    
    </div>
  </div>
</div>
</div>
<!--End of Bootstrap-->
<script src="public/js/JQurey.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/script.js"></script>
</body>
</html>