<?php 
require_once 'Conexao.Class.php';
require_once 'Cargo.Class.php';

class Cadastro_Cargo {
    
    private $conexao;
    
    public function __construct()
    {
        $this->conexao= new Conexao;
        
        
    }

    public function insereCargo($Cargo){
        $sql="INSERT INTO cargos(tipo_cargo,nome,valor_hora,nivel,
        formacao,experiencia,descricao) 
        VALUES (".$Cargo->getTipoCargo().",'".$Cargo->getNome()."',".$Cargo->getValB_Hora().",
       '".$Cargo->getNivel()."','".$Cargo->getExp_Formac()."',
        '".$Cargo->getExp_Experi()."','".$Cargo->getDescript()."')";

        echo $sql;
        mysqli_query($this->conexao->getCon(),$sql);

    }
    
    
    
    
    
 
}
?>