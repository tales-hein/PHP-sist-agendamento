<?php

/**
 * [Description User]
 */
class User
{
    private $id_user;
    private $nome;
    private $senha;
    private $senha_confirma;
    private $email;
    private $telefone;
    private $cpf;


    function __construct()
    {
    }

    /**
     * Get the value of id_user
     */
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

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
     * Get the value of Senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of Senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of Senha
     */
    public function getSenha_confirma()
    {
        return $this->senha_confirma;
    }

    /**
     * Set the value of Senha
     *
     * @return  self
     */
    public function setSenha_confirma($senha_confirma)
    {
        $this->senha_confirma = $senha_confirma;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }


    public function inserir()
    {
        global $conexao;

        $sql = "INSERT INTO usuarios (
                    nome,
                    senha,
                    email,
                    telefone,
                    cpf
                )   
                VALUES (
                    '{$this->nome}',
                    '{$this->senha}',
                    '{$this->email}',
                    '{$this->telefone}',
                    '{$this->cpf}'
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

        $sql = "UPDATE usuarios SET
                    nome = '{$this->nome}',
                    senha = '{$this->senha}',
                    email = '{$this->email}',
                    telefone = '{$this->telefone}',
                    cpf = '{$this->cpf}'
                WHERE
                    user_id = '{$this->id_user}'
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

        $sql = "DELETE FROM usuarios WHERE
                    user_id = '{$this->id_user}'
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
            $arrMsg[] = 'nome';
        }
        if ($this->senha == '') {
            $arrMsg[] = 'senha';
        }
        if ($this->senha_confirma == '') {
            $arrMsg[] = 'senha_confirma';
        }
        if ($this->senha != $this->senha_confirma) {
            $arrMsg[] = 'nomatch';
        }
        if ($this->telefone == '') {
            $arrMsg[] = 'telefone';
        }
        if ($this->email == '') {
            $arrMsg[] = 'email';
        }
        if ($this->cpf == '') {
            $arrMsg[] = 'cpf';
        }

        return $arrMsg;
    }
}
