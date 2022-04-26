<?php

class employee{

private $conn;

function __construct($dbObject)
    {
        $this->conn = $dbObject;
        //echo"Employee Construtor run";
    }

    public function findAll(){
        $output = array();
        $sql = "select * from employees";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($row);
        }else{
            echo json_encode(array('message' => 'No Record Found','status' => false));
        }
    }

    public function findSingle(){
        $output = array();
        $sql = "select * from employees";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($row);
        }else{
            echo json_encode(array('message' => 'No Record Found','status' => false));
        }
    }
}

?>