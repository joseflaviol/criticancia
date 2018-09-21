<?php

  class BancoHelper{
    private $conn;

    function __construct(){
      $servername = "localhost";
      $username = "root";
      $password = "1234";
      $database = "criticancia";

      $conn = new mysqli($servername, $username, $password, $database);

      $sql = "CREATE TABLE IF NOT EXISTS critica(id int not null auto_increment primary key, critica text, alvo varchar(50), usuario varchar(50))";
      $conn->query($sql);
      $sql = "CREATE TABLE IF NOT EXISTS usuario(id int not null auto_increment primary key, usuario varchar(50), senha varchar(100), email varchar(50))";
      $conn->query($sql);
    }

    public function getConnection(){
      return $this->conn;
    }
  }


?>
