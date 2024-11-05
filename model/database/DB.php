<?php


abstract class DB {
    private static $conexao;
    
    public static function getConnection() {
        $server = 'localhost';
        $user = 'root';
        $database = 'pedagogico';
        $password = '';
        
        if(empty(self::$conexao)){
            try {
                self::$conexao = new PDO("mysql:host=$server;dbname=$database;", $user, $password,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);
            } catch (PDOException $exc) {
                dir('Erro de conexão ='.$exc->getMessage());
            }
        }
        return self::$conexao;
    }
    protected function __construct() {
        
    }
    private function __clone() {
        
    }
}