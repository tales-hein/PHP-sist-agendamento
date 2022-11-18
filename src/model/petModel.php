<?php

/**
 * [Description Pet]
 */
class Pet
{
    private $pet_id;
    private $nome;
    private $especie;
    private $raca;
    private $cpfDono;


    function __construct()
    {
    }

    /**
     * Get the value of pet_id
     */
    public function getPet_id()
    {
        return $this->pet_id;
    }

    /**
     * Set the value of pet_id
     *
     * @return  self
     */
    public function setPet_id($pet_id)
    {
        $this->pet_id = $pet_id;

        return $this;
    }

    /**
     * Get the value of especie
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set the value of especie
     *
     * @return  self
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

     /**
     * Get the value of raca
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     *
     * @return  self
     */
    public function setRaca($raca)
    {
        $this->raca = $raca;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpfDono
     */
    public function getCpfDono()
    {
        return $this->cpfDono;
    }

    /**
     * Set the value of cpfDono
     *
     * @return  self
     */
    public function setCpfDono($cpfDono)
    {
        $this->cpfDono = $cpfDono;

        return $this;
    }

    public function inserir()
    {
        global $conexao;

        $sql = "INSERT INTO pets (
                    nome,
                    cpf_dono,
                    especie,
                    raca
                )   
                VALUES (
                    '{$this->nome}',
                    '{$this->cpfDono}',
                    '{$this->especie}',
                    '{$this->raca}'
                )";
        if (mysqli_query($conexao, $sql)) {
            return true;
        } else {
            return false;
        }
    }


    public function atualizar()
    {
        global $conexao;

        $sql = "UPDATE pets SET
                    nome = '{$this->nome}',
                    cpf_dono = '{$this->cpfDono}',
                    especie = '{$this->especie}',
                    raca = '{$this->raca}'
                WHERE
                    pet_id = '{$this->pet_id}'
            ";
        
        if (mysqli_query($conexao, $sql)){
            return true;
        }else {
            return false;
        }
    }
    public function excluir()
    {
        global $conexao;

        $sql = "DELETE FROM pets WHERE
                    pet_id = '{$this->pet_id}'
            ";
        
        if (mysqli_query($conexao, $sql)){
            return true;
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
        if ($this->nome == '') {
            $arrMsg[] = 'Selecione o tipo de pet';
        }
        if ($this->cpfDono == '') {
            $arrMsg[] = 'Digite um nome';
        }
        if ($this->especie == '') {
            $arrMsg[] = 'Digite o dono do pet';
        }
        if ($this->raca == '') {
            $arrMsg[] = 'Digite o dono do pet';
        }
        return $arrMsg;
    }
}
