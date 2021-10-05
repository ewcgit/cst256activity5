<?php

namespace App\Models;

class orderModel{
    
    // Private variables created as previously instructed.
    private $product;
    private $customerid;
    
    function __construct($product, $customerid){ // A constructor.
        $this->product=$product;
        $this->customerid=$customerid;
    }
    
    // Auto-generated getters and setters are now all below.
    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * @return mixed
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }
    
    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }
    
    /**
     * @param mixed $customerid
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;
    }
}