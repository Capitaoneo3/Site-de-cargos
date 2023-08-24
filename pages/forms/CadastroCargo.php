<?php 
require_once '../../classes/dao/CargoQuery.php';
require_once '../../classes/Cargo.php';


$cargoQuery= new CargoQuery();

$cargo= new Cargo;
$cargo->setTipoCargo($_POST['tipo_cargo']);
$cargo->setNome($_POST['nome_cargo']);
$cargo->setValB_Hora($_POST['valor_hora']);
$cargo->setEspecialidade($_POST['especialidade']);
$cargo->setExp_Formac($_POST['formacao']);
$cargo->setExp_Experi($_POST['experiencia']);
$cargo->setDescript($_POST['descricao']);

$cargoQuery->insereCargo($cargo);


?>
