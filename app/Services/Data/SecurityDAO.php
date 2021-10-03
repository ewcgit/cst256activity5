<?php

namespace app\Services\Data;
use App\Models\userModel;

class SecurityDAO{
    // For database connections and the queries.
    public $db;
    private $con;
    
    public function __construct(){ // A constructor.
        $this->con = mysqli_connect("localhost", "root", "", "activity2"); // The default XAMPP settings.
    }
    
    public function findByUser(UserModel $validation){
        // Database return.
        $this->db = "select USERNAME, PASSWORD from users where USERNAME = '{$validation->getUsername()}' and Password = '{$validation->getPassword()}'";
        $query = mysqli_query($this->con, $this->db);
        if(mysqli_num_rows($query) > 0){
            mysqli_free_result($query);
            mysqli_close($this->con);
            return true; // Successful run.
        }
        else{
            mysqli_free_result($query);
            mysqli_close($this->con);
            return false; // Failed run.
            }
        }
}