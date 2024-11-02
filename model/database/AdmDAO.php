<?php

require_once 'DB.php';

class AdmDAO {
    
    public function autentificacao($nome, $senha) {
        $query = "SELECT id_adm FROM adm WHERE user_adm = '$nome' AND password_adm = PASSWORD('$senha')";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function get_info($id) {
        $query = "SELECT user_adm, perm, cargo FROM adm WHERE id_adm = $id";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
}
