<?php
require_once 'Conexao.php';

class CargoQuery
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao;
    }

    public function insereCargo($Cargo)
    {
        $sql = "INSERT INTO cargos(tipo_cargo,nome,valor_hora,
        formacao,experiencia,descricao) 
        VALUES (" . $Cargo->getTipoCargo() . ",'" . $Cargo->getNome() . "'," . $Cargo->getValB_Hora() . ",'" . $Cargo->getExp_Formac() . "',
        '" . $Cargo->getExp_Experi() . "','" . $Cargo->getDescript() . "')";


        $conn = $this->conexao->getCon();

        $result =    mysqli_query($conn, $sql);
        if ($result) {
            // Verifica se foram retornadas linhas
            if (mysqli_affected_rows($conn) > 0) {
                echo "Query bem-sucedida. Foram retornadas " . mysqli_affected_rows($conn) . " linhas.";
                echo '<a href="../../index.php"><button>Concluir</button></a>
            ';
            } else {
                echo "Query bem-sucedida. Nenhuma linha retornada.";
                echo '<a href="../../index.php"><button>Concluir</button></a>
            ';
            }
        } else {
            echo "Falha na execução da query: " . mysqli_error($conn);
            echo '<a href="../../index.php"><button>Concluir</button></a>
            ';
        }

        // Fecha a conexão
        mysqli_close($conn);
    }

    public function listaCargos()
    {
        $query = "SELECT * FROM cargos";
        $conn = $this->conexao->getCon();

        $result =    mysqli_query($conn, $query);
        // Loop para criar os elementos da lista
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['nome'] . "</li>";
        }
        if ($result) {
            // Verifica se foram retornadas linhas
            if (mysqli_affected_rows($conn) > 0) {
            } else {
            }
        } else {
            echo "Falha na execução da query: " . mysqli_error($conn);
        }
        // Fecha a conexão com o banco de dados
        $conn->close();
    }
}
