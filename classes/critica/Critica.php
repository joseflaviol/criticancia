<?php
  class Critica{
    private $critica;
    private $alvo;
    private $usuario;

    function __construct($critica, $alvo, $usuario){
      $this->critica = $critica;
      $this->$alvo = $alvo;
      $this->$usuario = $usuario;
    }

    public function setCritica($critica){
      $this->critica = $critica;
    }

    public function getCritica(){
      return $this->critica;
    }

    public function setAlvo($alvo){
      $this->alvo = $alvo;
    }

    public function getAlvo(){
      return $this->alvo;
    }

    public function setUsuario($usuario){
      $this->usuario = $usuario;
    }

    public function getUsuario(){
      return $this->usuario;
    }
  }
?>
