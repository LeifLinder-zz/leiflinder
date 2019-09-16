<?php
class conn{
   private $host="localhost";
   private $username="root";
//   private $password="singtex291";
 private $password="";
public $conn;  
  // always remember to set charset with defining
  // PDO connection or norwegian wont work
   public function __construct() {   
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host .";charset=utf8", $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }         
        return $this->conn;
    }
}
?>