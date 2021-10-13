<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;

class UsersRestController extends Controller{
    public $usersIndex1;
    public $usersIndex2;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $this->usersIndex1 = new SecurityService();
        return $this->usersIndex1->getAllUsers();
        /*$conn = mysqli_connect("localhost", "root", "", "activity2");
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
        
        $conn->close(); */
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $this->usersIndex2 = new SecurityService();
        return $this->usersIndex2->getUser($id);
        /* $conn = mysqli_connect("localhost", "root", "", "activity2");
        $query1 = "SELECT * FROM usertable ORDER BY id DESC";
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
        
        $conn->close(); */
    }
}