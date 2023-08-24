<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/list_cargo.css">
  </link>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Lista de Cargos</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>

<body>
  <div class="vertical-center">
    <div style="height: 300px; overflow-y: scroll;">
      <ul id="lista-itens">
        <?php
        require_once '../classes/dao/CargoQuery.php';
        require_once '../classes/Cargo.php';
          $cargoQuery =new CargoQuery();

          $cargoQuery->listaCargos();

        ?>
        <!-- Os itens do banco de dados serão adicionados aqui -->
      </ul>
    </div>
  </div>
</body>

</html>