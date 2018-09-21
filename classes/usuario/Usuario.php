<?php

  class Usuario{
    private $nomeUsuario;
    private $senha;
    private $email;

    function __construct($nomeUsuario, $senha, $email){
      $this->nomeUsuario = $nomeUsuario;
      $this->senha = $senha;
      $this->email = $email;
    }

    public function setNomeUsuario($nomeUsuario){
      $this->nomeUsuario = $nomeUsuario;
    }

    public function getNomeUsuario(){
      return $this->nomeUsuario;
    }

    public function setSenha($senha){
      $this->senha = $senha;
    }

    public function getSenha(){
      return $this->senha;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    function getEmail(){
      return $this->email;
    }
  }


?>
