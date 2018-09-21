<?php
  include("../banco/BancoHelper.php");

  class UsuarioDAO{
    private $banco;
    private $conn;

    function __construct(){
      $this->banco = new BancoHelper();
      $this->conn = $this->banco->getConnection();
    }
  }
?>
