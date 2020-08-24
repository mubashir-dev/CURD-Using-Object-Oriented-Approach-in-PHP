<?php
class Database 
{
public $conn;
private $dsn = 'mysql:host=localhost;dbname=phpoop';
private  $username = '';
private $password = '';
private  $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

    //Connection Function
    public function getConnection()
    {
        $this->conn=null;
        try
        {
            $this->conn = new PDO($this->dsn, $this->username, $this->password, $this->options);
        }
        catch(PDOException $exp)
        {
            echo "Connection Error".$exp->getMessage();
        }
        return $this->conn;
    }
}







?>