<?php

namespace App\Services\Data;

// Necessary for program functionality.
use App\Models\usertableModel;
use App\Services\Business\SecurityService;
use App\Services\Data\SecurityDAO;

class UserTableDAO{
    public function index(){
        $conn = mysqli_connect("localhost", "root", "", "activity2");
        $query1 = "SELECT * FROM usertable ORDER BY ID DESC";
        $query_run = mysqli_query($conn, $query1);
        
        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }
        
        $sql = "SELECT id, firstname, lastname FROM usertable";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        }
        else {
            echo "0 results";
        }
        
        $conn->close();
        }        
        public function show($id){
            $conn = mysqli_connect("localhost", "root", "", "activity2");
            $query1 = "SELECT * FROM usertable ORDER BY ID DESC";
            $query_run = mysqli_query($conn, $query1);
            
            if (mysqli_connect_error()){
                die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
            }
            
            $sql = "SELECT id, firstname, lastname FROM usertable WHERE id = '$id'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                }
            }
            else {
                echo "0 results";
            }
            
            $conn->close();
        }
}
?>