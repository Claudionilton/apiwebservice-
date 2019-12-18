<?php

    private $idPessoaCurso;
    private $idPessoaFkey;
    private $idMatriculaFkey;

    public function getIdPessoaCurso() {
        return $this->idPessoaCurso;
    }
 
    public function setIdPessoaCurso($idPessoaCurso) {
        $this->idPessoaCurso = $idPessoaCurso;
    }
    public function getIdPessoaFkey() {
        return $this->idPessoaFkey;
    }
 
    public function setIdPessoaFkey($idPessoaFkey) {
        $this->idPessoaFkey = $idPessoaFkey;
    }
    public function getIdMatriculaFkey() {
        return $this->idMatriculaFkey;
    }
 
    public function setIMatriculaFkey($idMatriculaFkey) {
        $this->idMatriculaFkey = $idMatriculaFkey;
    }
    
    
?>