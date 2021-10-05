<?php

namespace App\Services\Data;

// Necessary for program functionality.
use App\Models\orderModel;

class OrderDao{
    // For database connections and the queries.
    public $db;
    private $con;
    
    public function __construct(){ // A constructor.
        $this->con = mysqli_connect("localhost", "root", "", "activity2"); // The default XAMPP settings.
    }
    
    /* public function addCustomer($firstName, $lastName){
    }*/
    
    public function addOrder(orderModel $order){
        // Database return.
        $con = mysqli_connect("localhost", "root", "", "activity2");
        $this->db = "insert into orders(Product, Customer_Id) values ('{$order->getProduct()}', '{$order->getCustomerid()}')";
        $query = "insert into orders(Product, Customer_Id) values ('{$order->getProduct()}', '{$order->getCustomerid()}')";
        
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