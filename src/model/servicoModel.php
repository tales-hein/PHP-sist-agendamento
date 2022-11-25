<?php

/**
 * [Description Servico]
 */
class Servico
{
    private $servico_id;
    private $data_id;
    private $cliente_cpf;
    private $nome_pet;


    function __construct()
    {
    }

    /**
     * Get the value of servico_id
     */
    public function getServico_id()
    {
        return $this->servico_id;
    }

    /**
     * Set the value of servico_id
     *
     * @return  self
     */
    public function setServico_id($servico_id)
    {
        $this->servico_id = $servico_id;

        return $this;
    }

    /**
     * Get the value of data_id
     */
    public function getData_id()
    {
        return $this->data_id;
    }

    /**
     * Set the value of data_id
     *
     * @return  self
     */
    public function setData_id($data_id)
    {
        $this->data_id = $data_id;

        return $this;
    }

    /**
     * Get the value of cliente_cpf
     */
    public function getCliente_cpf()
    {
        return $this->cliente_cpf;
    }

    /**
     * Set the value of cliente_cpf
     *
     * @return  self
     */
    public function setCliente_cpf($cliente_cpf)
    {
        $this->cliente_cpf = $cliente_cpf;

        return $this;
    }

    /**
     * Get the value of nome_pet
     */
    public function getNome_pet()
    {
        return $this->nome_pet;
    }

    /**
     * Set the value of nome_pet
     *
     * @return  self
     */
    public function setNome_pet($nome_pet)
    {
        $this->nome_pet = $nome_pet;

        return $this;
    }

    public function atualizarBdCreate()
    {
        global $conexao;

        $sql = "UPDATE agenda SET
                                status_data='f'
                          WHERE
                                data_id='{$this->data_id}';
                         ";
        if(mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }

    public function atualizarBdDesagendar($data_id)
    {
        global $conexao;

        $sql = "UPDATE agenda SET
                                status_data='a'
                          WHERE
                                data_id='{$data_id}';
                         ";
        if(mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }

    public function inserir()
    {
        global $conexao;

        $sql = "INSERT INTO servico (
                    cliente_cpf,
                    pet_nome,
                    data_id
                )   
                VALUES (
                    '{$this->cliente_cpf}',
                    '{$this->nome_pet}',
                    '{$this->data_id}'
                )";
        if (mysqli_query($conexao, $sql)) {
            return $this->atualizarBdCreate();
        } else {
            return false;
        }
    }
    public function excluir($data_id)
    {
        global $conexao;

        $sql = "DELETE FROM servico WHERE
                    data_id = '{$data_id}'
            ";
        
        if (mysqli_query($conexao, $sql)){
            return $this->atualizarBdDesagendar($data_id);
        }else {
            return false;
        }
    }
    public function listar()
    {
    }

    function validar()
    {
        $arrMsg = [];
        if ($this->cliente_cpf == '') {
            $arrMsg[] = 'Selecione o serviço';
        }
        if ($this->nome_pet == '') {
            $arrMsg[] = 'Digite o nome do pet';
        }
        if ($this->data_id == '') {
            $arrMsg[] = 'Digite o CPF do dono';
        }
        return $arrMsg;
    }
}
