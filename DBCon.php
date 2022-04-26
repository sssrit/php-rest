<?php
class DBCon {

    private $server;
    private $dbname;
    private $username;
    private $password;

    function __construct($servername,$database,$dbuser,$dbpass)
    {
        $this->server = $servername;
        $this->dbname = $database;
        $this->username = $dbuser;
        $this->password = $dbpass;
      //  echo "Contructor run";
       
    }

    public function dbConnect()
    {
        $con =  new mysqli($this->server,$this->username,$this->password,$this->dbname);
        
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        } 
        return $con;
    }

  
}
?>