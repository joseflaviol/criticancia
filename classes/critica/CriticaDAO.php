<?php
  include("../banco/BancoHelper.php");

  class CriticaDAO{
    private $banco;
    private $conn;

    function __construct(){
      $this->banco = new BancoHelper();
      $this->conn = $this->banco->getConnection();
    }

    public function insereCritica($critica){
      //$sql = "INSERT INTO critica(critica, alvo, usuario) VALUES('$critica->getCritica()', )"
      echo $critica->getCritica();
    }
  }
?>
