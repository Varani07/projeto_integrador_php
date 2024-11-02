<?php

require_once 'DB.php';

class UsuarioDAO {
    
    public function autentificacao($nome, $senha) {
        $query = "SELECT id_usuario FROM usuarios WHERE login = '$nome' AND senha = PASSWORD('$senha')";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function get_info($id) {
        $query = "SELECT login, email, cpf FROM usuarios WHERE id_usuario = $id";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function update_usuario_basico($nome, $cpf, $email, $id) {
        $query = "UPDATE usuarios SET login = :p_login, email = :p_email, cpf = :p_cpf WHERE id_usuario = :p_id";
        $conn = DB::getConnection()->query($query);
        $conn->execute(array());
    }
    
}
