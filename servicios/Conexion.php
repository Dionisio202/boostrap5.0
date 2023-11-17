<?php
class Conexion{
    public function Conectar(){
        define("host","localhost");
        define("username","root");
        define("password","");
        define("dbname","producto");
        try{
            $conectar=new PDO("mysql:host=".host.";dbname=".dbname,username,password);
            return $conectar;
        }catch(PDOException $e){
            die("error de conexion ".$e->getMessage());
        }
    }
}

?>