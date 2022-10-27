<?php 
    require 'config.php';

    class Connection
    {
        public static function make($host, $db, $user, $password, $port)
        {
            $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=UTF8";
    
            try {
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        
                return new PDO($dsn, $user, $password, $options);    
              
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        
        }
    }    
      
    return Connection::make($host, $db, $user, $password, $port);
?>