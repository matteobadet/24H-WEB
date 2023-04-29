<?php

class Database{
    private static PDO $instance;

    public static function getInstance(){
        if(Database::$instance == null){
            Database::$instance = new PDO("mysql:host=localhost;dbname=my_recipes;charset=utf8","root","");
        }
        return Database::$instance;
    }
    public static function executeSELECT(string $sqlCommand,array $params){
        $result = Database::getInstance()->prepare($sqlCommand);
        $result->execute($params);
        return $result->fetchAll();
    }
    public static function executeINSERT(string $sqlCommand,array $params){
        $result = Database::getInstance()->prepare($sqlCommand);
        $result->execute($params);
    }
}