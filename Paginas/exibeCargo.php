<?php 

require_once '../Classe/DAO/insert_Cargo.Class.php';
require_once '../Classe/Entidade/Cargo.Class.php';

$Cadastrar= new Cadastro_Cargo();

$Cargo= new Cargo;
$Cargo->setTipoCargo($_POST['tipo_cargo']);
$Cargo->setNome($_POST['nome_cargo']);
$Cargo->setValB_Hora($_POST['valor_hora']);
$Cargo->setEspecialidade($_POST['especialidade']);
$Cargo->setNivel($_POST['nivel']);
$Cargo->setExp_Formac($_POST['formacao']);
$Cargo->setExp_Experi($_POST['experiencia']);
$Cargo->setDescript($_POST['descricao']);

$Cadastrar->insereCargo($Cargo);


?>
