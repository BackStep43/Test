<?php
    function Dbconnect(){
        $db_host = 'localhost';
        $db_name = 'location_place';
        $db_user = 'root';
        $db_pass = '';

        

        try{
            $db = new PDO("mysql:host=${db_host}; dbname=${db_name}", $db_user, $db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "database is connected";
            return $db;
        }
        catch(PEOException $e){
            echo "Connection failed" . $e->getMessage();
        }
    }
?>