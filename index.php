<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <title>Cargos</title>

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

    <script>
        //essa função só será chamada após a página ter sido carregada
        $(document).ready(function(){
            $( "#innetHTML_insereCargo" ).load( "forms/insereCargo.html" );

        })
            
    </script>
</head>

<body>
<div id= innetHTML_insereCargo>
</div>
</body>
</html>