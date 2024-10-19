<?php

class ResponsavelLegal {
    private $nome;
    private $sobrenome;
    private $email;
    private $genero;
    private $cpf;
    private $etnia;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $estado_civil;
    private $religiao;
    private $celular;
    private $num_residencial;
    private $data_nascimento;
    private $aluno;
    
    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
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

    function getEtnia() {
        return $this->etnia;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
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

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getAluno() {
        return $this->aluno;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
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

    function setEtnia($etnia): void {
        $this->etnia = $etnia;
    }

    function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    function setBairro($bairro): void {
        $this->bairro = $bairro;
    }

    function setCidade($cidade): void {
        $this->cidade = $cidade;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
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

    function setData_nascimento($data_nascimento): void {
        $this->data_nascimento = $data_nascimento;
    }

    function setAluno($aluno): void {
        $this->aluno = $aluno;
    }


}
