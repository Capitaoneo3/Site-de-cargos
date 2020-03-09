<?PHP

 class Cargo{
     
    private $nome;
    private $tipoCargo;/*1,2,3*/
    
    private $especialidade;
    private $sub_Esp;
    private $valB_Hora;/*valor basico hora*/
    private $nivel;
    private $exp_Formac;   
    private $exp_Experi;
    private $descript;/*descrição*/
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTipoCargo()
    {
        return $this->tipoCargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setTipoCargo($cargo)
    {
        $this->tipoCargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * @param mixed $especialidade
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    /**
     * @return mixed
     */
    public function getSub_Esp()
    {
        return $this->sub_Esp;
    }

    /**
     * @param mixed $sub_Esp
     */
    public function setSub_Esp($sub_Esp)
    {
        $this->sub_Esp = $sub_Esp;
    }

    /**
     * @return mixed
     */
    public function getValB_Hora()
    {
        return $this->valB_Hora;
    }

    /**
     * @param mixed $valB_Hora
     */
    public function setValB_Hora($valB_Hora)
    {
        $this->valB_Hora = $valB_Hora;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getExp_Formac()
    {
        return $this->exp_Formac;
    }

    /**
     * @param mixed $exp_Formac
     */
    public function setExp_Formac($exp_Formac)
    {
        $this->exp_Formac = $exp_Formac;
    }

    /**
     * @return mixed
     */
    public function getExp_Experi()
    {
        return $this->exp_Experi;
    }

    /**
     * @param mixed $exp_Experi
     */
    public function setExp_Experi($exp_Experi)
    {
        $this->exp_Experi = $exp_Experi;
    }

    /**
     * @return mixed
     */
    public function getDescript()
    {
        return $this->descript;
    }

    /**
     * @param mixed $descript
     */
    public function setDescript($descript)
    {
        $this->descript = $descript;
    }


    
   

 }
?>