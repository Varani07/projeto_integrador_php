<?php

require_once 'DB.php';

class AdmDAO {
    
    public function autentificacao($nome) {
        $query = "SELECT password_adm, id_adm FROM adm WHERE user_adm = '$nome'";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function get_info($id) {
        $query = "SELECT user_adm, perm, cargo, password_adm FROM adm WHERE user_adm = $id";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
}
