<?php

class UsuarioDAO {
    
    public function autentificacao($nome) {
        $query = "SELECT senha FROM usuarios WHERE login = '$nome'";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
}
