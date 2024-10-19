<?php

class ResponsavelFinanceiro {
    private $nome;
    private $cpf;
    private $data_nascimento;
    private $aluno;
    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
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

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setData_nascimento($data_nascimento): void {
        $this->data_nascimento = $data_nascimento;
    }

    function setAluno($aluno): void {
        $this->aluno = $aluno;
    }


}
