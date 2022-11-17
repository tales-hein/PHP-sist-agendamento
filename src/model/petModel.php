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
    private $dono_id;


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
     * Get the value of dono_id
     */
    public function getDono_id()
    {
        return $this->dono_id;
    }

    /**
     * Set the value of dono_id
     *
     * @return  self
     */
    public function setDono_id($dono_id)
    {
        $this->dono_id = $dono_id;

        return $this;
    }

    public function inserir()
    {
        global $conexao;

        $sql = "INSERT INTO pet (
                    id_tipo,
                    nome,
                    dono
                )   
                VALUES (
                    '{$this->id_tipo}',
                    '{$this->nome}',
                    '{$this->dono}',
                )";
        if (mysqli_query($conexao, $sql)) {
            return true;
        } else {
            return false;
        }
    }


    public function alterar()
    {
    }
    public function excluir()
    {
    }
    public function listar()
    {
    }

    function validar()
    {
        $arrMsg = [];
        if ($this->id_tipo == '') {
            $arrMsg[] = 'Selecione o tipo de pet';
        }
        if ($this->nome == '') {
            $arrMsg[] = 'Digite um nome';
        }
        if ($this->dono == '') {
            $arrMsg[] = 'Digite o dono do pet';
        }
        return $arrMsg;
    }
}
