<?php 
require_once '../Classe/Entidade/Cargo.php';
require_once 'Conexao.php';

class CargoQuery {
    
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

      
        $conn = $this->conexao->getCon();

        $result =    mysqli_query($conn,$sql);
        if ($result) {
            // Verifica se foram retornadas linhas
            if (mysqli_affected_rows($conn) > 0) {
                echo "Query bem-sucedida. Foram retornadas " . mysqli_affected_rows($conn) . " linhas.";
            } else {
                echo "Query bem-sucedida. Nenhuma linha retornada.";
            }
        } else {
            echo "Falha na execução da query: " . mysqli_error($conn);
        }
        
        // Fecha a conexão
        mysqli_close($conn);

        
    }
    
}
?>