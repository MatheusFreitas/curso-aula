<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
    }
    
  $nome = $_REQUEST["nome"];
  $sexo = $_REQUEST["sexo"];
  $estado = $_REQUEST["estado"];
  $observacoes = $_REQUEST["observacoes"];
  
  $aceito = false;
  if(isset($_REQUEST["aceito"])){
        $aceito = true;
  }
  
  $pessoa = array();
  $pessoa["nome"] = $nome;
  $pessoa["sexo"] = $sexo;
  $pessoa["aceito"] = $aceito;
  $pessoa["estado"] = $estado;
  $pessoa["observacoes"] = $observacoes;
  
  array_push($_SESSION["cadastros"], $pessoa);
 
  echo "Cadastro efetuado com sucesso !" ;

?>        
