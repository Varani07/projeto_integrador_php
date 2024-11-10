<?php

require_once 'DB.php';

class UsuarioDAO {

    public function cadastrar_usuario(Usuario $obj) {
        $query = "INSERT INTO usuarios (id_usuario, login, senha, email, cpf) VALUES (null, :plogin, PASSWORD(:psenha), :pemail, :pcpf)";
        $conn = DB::getConnection()->prepare($query);
        $conn->execute(array(':plogin'=>$obj->login, ':psenha'=>$obj->senha, ':pemail'=>$obj->email, ':pcpf'=>$obj->cpf));
        return $conn->rowCount()>0;
    }
    
    public function autentificacao($nome, $senha) {
        $query = "SELECT id_usuario FROM usuarios WHERE login = '$nome' AND senha = PASSWORD('$senha')";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function get_info($id) {
        if (!is_int(($id))){
            $id = (int) $id;
        }
        $query = "SELECT id_usuario, login, email, cpf FROM usuarios WHERE id_usuario = $id";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }

    public function get_id_by_cpf($cpf) {
        $query = "SELECT id_usuario FROM usuarios WHERE cpf = '$cpf'";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }

    public function get_info_all() {
        $query = "SELECT id_usuario, login, email, cpf FROM usuarios";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }

    public function get_info_by_nome($nome) {
        $query = "SELECT id_usuario, login, email, cpf FROM usuarios WHERE login LIKE '%$nome%'";
        $conn = DB::getConnection()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function update_usuario_basico(Usuario $obj) {
        $query = "UPDATE usuarios SET login = :p_login, email = :p_email, cpf = :p_cpf WHERE id_usuario = :p_id";
        $conn = DB::getConnection()->prepare($query);
        $conn->execute(array(':p_login'=>$obj->login, ':p_email'=>$obj->email, ':p_cpf'=>$obj->cpf, ':p_id'=>$obj->id_usuario));
        return $conn->rowCount()>0;
    }
    
    public function update_usuario_all(Usuario $obj) {
        $query = "UPDATE usuarios SET login = :p_login, email = :p_email, cpf = :p_cpf, senha = PASSWORD(:p_senha) WHERE id_usuario = :p_id";
        $conn = DB::getConnection()->prepare($query);
        $conn->execute(array(':p_login'=>$obj->login, ':p_email'=>$obj->email, ':p_cpf'=>$obj->cpf, ':p_senha'=>$obj->senha, ':p_id'=>$obj->id_usuario));
        return $conn->rowCount()>0;
    }
    
}
