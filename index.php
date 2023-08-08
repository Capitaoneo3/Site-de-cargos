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
        var esconderCargoEspecialidade = function(){
            //mudar o elemento display para none através do jquery
            $("#cargo_especialidade_hid").css('display', 'none')
        }

        var aparecerCargoEspecialidade= function(){
            
            //mudar o elemento display para block através do jquery
            $("#cargo_especialidade_hid").css('display', 'block')
        }

        //essa função só será chamada após a página ter sido carregada
        $(document).ready(function(){

            $("input[name='tipo_cargo']").change(function(){
                //atribui par variavel input qual objeto radio trocou de valor 
                var input = $(this)//$(this) aponta para as tags carregadas com name 'tipo_cargo'

                var placeHolderText = "Selecione ";
                if(input.val() == 2){/*funcao jquey, quando usado em um objeto  
                DOM retorna um value que estiver na tag" input = $(this)"*/
                    aparecerCargoEspecialidade();
                    $("#nome_cargo").html("Nome da especialidade");
                    $("#label_cargo_especialidade").html("Selecione um cargo")
                    $("#cargo_especialidade_placeholder").html(placeHolderText+" um cargo");
                    //TODO carregar cargos e preencher select
                }else if(input.val() == 3){
                    aparecerCargoEspecialidade();
                    $("#nome_cargo").html("Nome da sub-especialidade");
                    $("#label_cargo_especialidade").html("Selecione uma especialidade")
                    $("#cargo_especialidade_placeholder").html(placeHolderText+" uma especialidade");                  
                    //TODO carregar especialidades e preencher select
                }
                else{
                    $("#nome_cargo").html("Nome do cargo");
                    esconderCargoEspecialidade();
                }
            })

        })
            
            

    </script>

</head>
<style>

#cargo_especialidade_hid{
    display: none;
}

fieldset{
    padding: 20px;
    margin-left: auto;
    margin-right:auto;
    margin-top: 50px;
    margin-bottom: 50px;
    width: 666px;
    border-style: solid;
    border-width: 2px;
    border-color: #66e0ff;
}
legend{
    margin-left: auto;
    margin-right: auto;
    width: auto;
    font-size: 35px;
    font-weight:bold; 
    text-shadow: 0.03em 0.03em 0.10em #00ccff;
}
select{
    width: 150px;
}
.radio-div{
    display:inline;
    margin-right: 50px;
}
.radio-div-2{
    display: block;
    margin-right: 50px;
}
.tipo{
    margin-bottom: 30px;
    margin-top: 1px;
}
.title{
    font-weight: bold;
    margin-top: 10px;
}
.button {
  padding: 5px 20px;
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #0099ff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 7px #999;
}
.button:hover {
    background-color: #0033cc;
}
.button:active {
  background-color: #0033cc;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.input-btn{
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>
<body>
<div>

    <form action="forms/insereCargo.php" method="POST">    

    <fieldset>

        <legend>Cadastrar Cargos</legend>

        <div class="custom-control custom-radio tipo">

            <div class="radio-div">
                <input type="radio" name="tipo_cargo" id="customRadio1" class="custom-control-input" value="1" checked><!--atuali-->
                <label class="custom-control-label" for="customRadio1">Cargo</label>
            </div>

            <div class="radio-div" style="margin-left: 20%">
                <input type="radio" name="tipo_cargo" id="customRadio2" class="custom-control-input" value="2"><!--atuali-->
                <label class="custom-control-label" for="customRadio2">Especialidade</label>
            </div>

            <div class="radio-div" style="margin-left: 15%">
                <input type="radio" name="tipo_cargo" id="customRadio3" class="custom-control-input" value="3"><!--atuali-->    
                    <label class="custom-control-label" for="customRadio3">Sub-especialidade</label>
            </div>

        </div>        
        <div>

            <label for="nome_cargo" id="nome_cargo" class="title">Nome do cargo</label>
            <input type="text" class="form-control" name="nome_cargo">

        </div>

        <div>
            <label for="valor_hora" class="title">Valor básico / hora</label>
            <input type="number" class="form-control" name="valor_hora" >
        </div>  

        <div id="cargo_especialidade_hid">
            <label for="especialidade" id="label_cargo_especialidade" class="title"></label>
            <select id="especialidade" name="especialidade" class="form-control"><!--atuali-->
                <option hidden value="default" id="cargo_especialidade_placeholder">selecione um cargo</option>
                <option value="valor1">programador</option>
                <option value="valor2">despenceiro</option>
                <option value="valor3">motorista</option>     
            </select>

        </div>

        <div class="title">
            <label class="title">Nível</label>
        </div>
        <div class="custom-control custom-radio tipo">
            <div class="radio-div-2">
                <input type="radio" name="nivel" id="customRadio4" class="custom-control-input" value="1"><!---->
                <label for="customRadio4" class="custom-control-label">Fundamental</label>
            </div>

            <div class="radio-div-2">
                <input type="radio" name="nivel" id="customRadio5" class="custom-control-input" value="2"><!---->
                <label for="customRadio5" class="custom-control-label">Médio</label>
            </div>

            <div class="radio-div-2">
                <input type="radio" name="nivel" id="customRadio6" class="custom-control-input" value="3"><!---->
                <label for="customRadio6" class="custom-control-label">Superior</label>
            </div>

        </div>
        <div>
                <label for="formacao" class="title">Formação</label>
                <input type="text" id="formacao" class="form-control" name="formacao" >
        </div>
        <div>
                <label for="exp" class="title">Experiência</label>
                <input type="text" id="exp" class="form-control" name="experiencia" >
        </div>
        <div>
                <label for="descricao" class="title">Descrição</label>
                <textarea id="descricao" class="form-control" name="descricao"></textarea>
        </div> 

        <div class="input-btn">
            <input type="submit" name="enviar" value="Enviar" class="button btn-block">
        </div>

    </fieldset>
    </form>

</div>
</body>
</html>