<?php
include 'conexion.php';

class User extends DB{
    private $nombre;
    private $username;

    public function userExists($user, $pass){
        $query = $this->connect()->prepare('SELECT * FROM inicio WHERE usuario = :user AND contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM inicio WHERE usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['usuario'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getUsuario(){
        return $this->username;
    }
}


?>
