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
    
    public function update_adm_basico(Adm $obj) {
        $query = "UPDATE adm SET user_adm = :p_user_adm WHERE id_adm = :p_id_adm";
        $conn = DB::getConnection()->prepare($query);
        $conn->execute(array(':p_user_adm'=>$obj->user_adm, ':p_id_adm'=>$obj->id_adm));
        return $conn->rowCount()>0;
    }
    
    public function update_adm_all(Adm $obj) {
        $query = "UPDATE adm SET user_adm = :p_user_adm, password_adm = PASSWORD(:p_password_adm) WHERE id_adm = :p_id_adm";
        $conn = DB::getConnection()->prepare($query);
        $conn->execute(array(':p_user_adm'=>$obj->user_adm, ':p_id_adm'=>$obj->id_adm, ':p_password_adm'=>$obj->password_adm));
        return $conn->rowCount()>0;
    }
    
}
