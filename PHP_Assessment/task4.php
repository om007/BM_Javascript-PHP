<?php
/*
 * QUESTION 4:
 * Create/Architect a PHP class which will receive certain defined inputs and
 * connect to database(does not need to connect to db just create a function for
 * connecting DB), class should include helper functions which can be both
 * internal static and external functions and at last class need to provide some
 * output.
 */

 class Product {
     //Properties
     public $id;
     public $name;
     public $price;
     private $host = 'localhost';
     private $user = 'root';
     private $pass = '1111';
     private $db = 'testdb';
     private $conn;

     
     function set_id($id) {
         $this->id = $id;
     }

     function get_id() {
         return $this->id;
     }

     function set_name($name) {
         $this->name = $name;
     }

     function get_name() {
         return $this->name;
     }

     function set_price($price) {
         $this->price = $price;
     }

     function get_price() {
        return $this->price;
     }

     function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db) or die('Connection to database failed');
     }

     function save() {

         echo "Data saved: <br> ID: {$this->id}, <br>Name: {$this->name}, <br>Price: {$this->price}";
     }
 }

 $product = new Product();
 $product->set_id(1);
 $product->set_name('First Product');
 $product->set_price(15);
 $product->save();