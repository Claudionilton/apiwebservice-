<?php
    private $idPessoa;
    private $telefone;
    private $cpf;

    public function getIdPessoa() {
        return $this->idPessoa;
    }
 
    public function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    public function getTelefone() {
        return $this->telefone;
    }
 
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getCpf() {
        return $this->cpf;
    }
 
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
?>