<?php

class Conexion{
    public  static function conectar(){
        $link = new PDO("mysql:host=localhost; dbname=bienestar", "root", "");
        return $link;
    }
}
