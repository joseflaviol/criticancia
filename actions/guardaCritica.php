<?php
  include("../classes/critica/Critica.php");
  include("../classes/critica/CriticaDAO.php");
  include("../classes/banco/BancoHelper.php");

  $critica = $_POST['critica'];
  $alvo = $_POST['alvo'];
  $usuario = "Jose";

  $criticaClass = new Critica($critica, $alvo, $usuario);

  $cDAO = new CriticaDAO();
  $cDAO->insereCritica($criticaClass);
?>
