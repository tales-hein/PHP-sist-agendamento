<?php

/**
 * [Description Servico]
 */
class Servico
{
    private $id_servico;
    private $id_tipo;
    private $nome;
    private $dono;


    function __construct()
    {
    }

    /**
     * Get the value of id_servico
     */
    public function getId_servico()
    {
        return $this->id_servico;
    }

    /**
     * Set the value of id_servico
     *
     * @return  self
     */
    public function setId_servico($id_servico)
    {
        $this->id_servico = $id_servico;

        return $this;
    }

    /**
     * Get the value of id_tipo
     */
    public function getId_tipo()
    {
        return $this->id_tipo;
    }

    /**
     * Set the value of id_tipo
     *
     * @return  self
     */
    public function setId_tipo($id_tipo)
    {
        $this->id_tipo = $id_tipo;

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
     * Get the value of Dono
     */
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Set the value of Dono
     *
     * @return  self
     */
    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    public function inserir()
    {
        global $conexao;

        $sql = "INSERT INTO servico (
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
            $arrMsg[] = 'Selecione o serviço';
        }
        if ($this->nome == '') {
            $arrMsg[] = 'Digite o nome do pet';
        }
        if ($this->dono == '') {
            $arrMsg[] = 'Digite o CPF do dono';
        }
        return $arrMsg;
    }
}
