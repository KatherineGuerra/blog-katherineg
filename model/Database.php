<?php
    class Database {
        /*globel variables*/
        private $connection;
        private $host;
        private $username;
        private $password;
        private $database;
        
        /*local variables*/
        public function __construct($host, $username, $password, $database){
            /*to access our globel variable use $this*/
            /*to set the value use the = sign*/
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
        
        public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeConnection(){
            if(isset($this->connection)){
                $this->connection->close();
            }
        }
        
        public function query($string){
            /*this line of code is calling on openConnection function*/
            $this->openConnection();
            
            $query = 
            
        }
    }
