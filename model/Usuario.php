<?php


class Usuario {
    private $id_usuario;
    private $login;
    private $senha;
    private $email;
    private $cpf;
    
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    function setLogin($login): void {
        $this->login = $login;
    }

    function setSenha($senha): void {
        $this->senha = $senha;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }
    function getEmail() {
        return $this->email;
    }

    function setEmail($email): void {
        $this->email = $email;
    }



}
