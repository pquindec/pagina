<?php
            $user="root";
            $pass="";
            $server="localhost:3306";
            $db="proyecto";
    
    
    $cone= mysqli_connect($server,$user,$pass,$db);


    if($cone->connect_error){
        echo $error->$con->connect_error;
    }

    class DB{
        private $host;
        private $db;
        private $user;
        private $password;
    
        public function __construct(){
            $this->host     = 'localhost:3306';
            $this->db       = 'proyecto';
            $this->user     = 'root';
            $this->password = "";
        }
    
        function connect(){
        
            try{
                
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                $pdo = new PDO($connection, $this->user, $this->password, $options);
        
                return $pdo;
    
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }   
        }
    }
?>