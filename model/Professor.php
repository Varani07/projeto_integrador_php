<?php

class Professor {
    private $id_professor;
    private $nome;
    private $sobrenome;
    private $nome_pai;
    private $nome_mae;
    private $email;
    private $genero;
    private $cpf;
    private $grau_ins;
    private $etnia;
    private $endereco;
    private $bairro;
    private $estado;
    private $cidade;
    private $estado_civil;
    private $religiao;
    private $celular;
    private $num_residencial;
    private $data_nasc;
    private $manha;
    private $tarde;
    private $noite;
    function getId_professor() {
        return $this->id_professor;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getNome_pai() {
        return $this->nome_pai;
    }

    function getNome_mae() {
        return $this->nome_mae;
    }

    function getEmail() {
        return $this->email;
    }

    function getGenero() {
        return $this->genero;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getGrau_ins() {
        return $this->grau_ins;
    }

    function getEtnia() {
        return $this->etnia;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado_civil() {
        return $this->estado_civil;
    }

    function getReligiao() {
        return $this->religiao;
    }

    function getCelular() {
        return $this->celular;
    }

    function getNum_residencial() {
        return $this->num_residencial;
    }

    function getData_nasc() {
        return $this->data_nasc;
    }

    function getManha() {
        return $this->manha;
    }

    function getTarde() {
        return $this->tarde;
    }

    function getNoite() {
        return $this->noite;
    }

    function setId_professor($id_professor): void {
        $this->id_professor = $id_professor;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    function setNome_pai($nome_pai): void {
        $this->nome_pai = $nome_pai;
    }

    function setNome_mae($nome_mae): void {
        $this->nome_mae = $nome_mae;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setGenero($genero): void {
        $this->genero = $genero;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setGrau_ins($grau_ins): void {
        $this->grau_ins = $grau_ins;
    }

    function setEtnia($etnia): void {
        $this->etnia = $etnia;
    }

    function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    function setBairro($bairro): void {
        $this->bairro = $bairro;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }

    function setCidade($cidade): void {
        $this->cidade = $cidade;
    }

    function setEstado_civil($estado_civil): void {
        $this->estado_civil = $estado_civil;
    }

    function setReligiao($religiao): void {
        $this->religiao = $religiao;
    }

    function setCelular($celular): void {
        $this->celular = $celular;
    }

    function setNum_residencial($num_residencial): void {
        $this->num_residencial = $num_residencial;
    }

    function setData_nasc($data_nasc): void {
        $this->data_nasc = $data_nasc;
    }

    function setManha($manha): void {
        $this->manha = $manha;
    }

    function setTarde($tarde): void {
        $this->tarde = $tarde;
    }

    function setNoite($noite): void {
        $this->noite = $noite;
    }


}
