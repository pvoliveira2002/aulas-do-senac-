<?php

class Conn{

    public static $host = HOST;
    public static $user = USER;
    public static $pass = PASS;
    public static $db   = DB;

    
    private static $connect = null;

    private static function Conectar(){

        try{

            if(self::$connect ==null): 
               self::$connect = new PDO('mysql:host='. self::$host. ';dbname='. self::$db, self::$user, self::$pass);
            
            endif;
        }

        catch(PDOException $e){

            echo "Mensagem: ". $e->getMessage();
            die();
        }

        return self::$connect;

    }

    function getConn(){

        return self::Conectar();

    }

}