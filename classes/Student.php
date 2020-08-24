<?php
class Student
{
private $conn=null;
private $table_name="Student";
//-------------Class Main Variables//
public $id;
public $name;
public $rollno;
public $program;
public $address;
//Constractor
public function __construct($db)
{
$this->conn=$db;
}                       
//Method For Insert Data Into Database Table
public function create_recored()
{
    $sql="INSERT INTO Student (name,rollno,program,address) VALUES(?,?,?,?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(1,$this->name);
    $stmt->bindParam(2,$this->rollno);
    $stmt->bindParam(3,$this->program);
    $stmt->bindParam(4,$this->address);
    if($stmt->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
    
}
//Method For Read Data From Database
public function read()
{
$sql="SELECT *FROM Student";
$stmt=$this->conn->prepare($sql);
$stmt->execute();
return $stmt;
}
//Method For CountAll From Database//
public function countAll()
{
    $sql="SELECT id FROM Student";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute();
    $num=$stmt->rowCount();
    return $num;
}
//Method For Delete The Data From Database//
// delete the product
function delete()
{
 
    $query = "DELETE FRO


    M Student WHERE id = ?";
     
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
 
    if($result = $stmt->execute()){
        return true;
    }else{
        return false;
    }
}
//Method For Fetch The Data From Database 
public function Fetch_Data()
{
$query = "SELECT *FROM Student WHERE id = ? LIMIT 0,1";
$stmt = $this->conn->prepare($query);
$stmt->bindParam(1, $this->id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC); 
return $row;
}
//Method For Update The Date In Database//
public function Update()
{
    $query = "UPDATE Student  SET name = ?,rollno = ?,program = ?,address  = ? WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    // bind parameters
    $stmt->bindParam(1, $this->name);
    $stmt->bindParam(2, $this->rollno);
    $stmt->bindParam(3, $this->program);
    $stmt->bindParam(4, $this->address);
    $stmt->bindParam(5, $this->id);
    // execute the query
    if($stmt->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
     

}

}
?>