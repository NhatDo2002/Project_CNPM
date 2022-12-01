<?php 
    class DB{
        protected $conn;
        protected $host = "localhost";
        protected $user = "root";
        protected $pass = "";
        protected $database = "quanlyhethong";

        function __construct(){
            $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->database);
            mysqli_query($this->conn,'set names utf8');
        }

    }
?>