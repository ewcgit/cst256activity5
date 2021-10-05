<?php

namespace App\Services\Data;

// Necessary for program functionality.
use App\Models\CustomerModel;

class CustomerDao{
    // For database connections and the queries.
    public $db;
    private $con;
    
    public function __construct(){ // A constructor.
        $this->con = mysqli_connect("localhost", "root", "", "activity2"); // The default XAMPP settings.
    }
    
    /* public function addCustomer($firstName, $lastName){
    }*/
    
    public function addCustomer(customerModel $customer){
        // Database return.
        $con = mysqli_connect("localhost", "root", "", "activity2");
        $this->db = "insert into customer(First_Name, Last_Name) values ('{$customer->getFirstname()}', '{$customer->getLastname()}')";
        $query = "insert into customer(First_Name, Last_Name) values ('{$customer->getFirstname()}', '{$customer->getLastname()}')";
        
        if (mysqli_query($con, $query)) {
            echo "New record!";
        } else {
            echo mysqli_error($con);
        }
        /* $query = mysqli_query($this->con, $this->db);
        if(mysqli_num_rows($query) > 0){
            mysqli_free_result($query);
            mysqli_close($this->con);
            return true; // Successful run.
        }
        else{
            mysqli_free_result($query);
            mysqli_close($this->con);
            return false; // Failed run. */
        }
    }