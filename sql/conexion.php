<?php 

    class Database{
        private $servername;
        private $user;
        private $password;
        private $dbname;

        public function __construct(){
            $this->servername = 'localhost';
            $this->user = 'danny';
            $this->password = 'Danny16029567*';
            $this->dbname = 'servi-red-viejo';
        }

        public function connect(){
            $conn = new mysqli($this->servername,$this->user,$this->password,$this->dbname);
            return $conn;
        }


    }
