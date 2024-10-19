<?php

class Adm {
    private $id_adm;
    private $user_adm;
    private $password_adm;
    private $perm;
    private $cargo;
    function getId_adm() {
        return $this->id_adm;
    }

    function getUser_adm() {
        return $this->user_adm;
    }

    function getPassword_adm() {
        return $this->password_adm;
    }

    function getPerm() {
        return $this->perm;
    }

    function getCargo() {
        return $this->cargo;
    }

    function setId_adm($id_adm): void {
        $this->id_adm = $id_adm;
    }

    function setUser_adm($user_adm): void {
        $this->user_adm = $user_adm;
    }

    function setPassword_adm($password_adm): void {
        $this->password_adm = $password_adm;
    }

    function setPerm($perm): void {
        $this->perm = $perm;
    }

    function setCargo($cargo): void {
        $this->cargo = $cargo;
    }


}
