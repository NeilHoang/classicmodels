<?php


class Customers
{
   public $customersName;
   public $phone;
   public $city;
   public $customersNumber;
   
   public function __construct($customersName,$phone,$city,$customersNumber)
   {
       $this->customersName = $customersName;
       $this->phone = $phone;
       $this->city = $city;
       $this->customersNumber = $customersNumber;
   }
}