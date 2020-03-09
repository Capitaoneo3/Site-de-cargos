<?php
//data access object
 class Conexao{
    private $usuario="root";
    private $senha="";
    private $caminho="localhost";
    private $banco="mydb";
    private $con;
    
    
    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha,$this->banco)
        or die("Não foi possivel estabelecer conexÃ£o com o banco!".mysqli_error($this->con));
        
   
        
        
        //mysqli_select_db($this->con, $this->banco)or die('Erro ao conectar ao banco!'.  mysqli_error($this->con));
        
    }
    
    
    public function getCon(){
        
        return $this->con;
    }
    
}