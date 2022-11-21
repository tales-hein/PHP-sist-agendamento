<?php
$ignoraSessao = true;
require_once('../../lib/config.php');

$action = $_REQUEST['action'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$objUser = new User();

$objUser->setId_user($_REQUEST['id_user']);
$objUser->setNome($_REQUEST['nome']);
$objUser->setSenha($_REQUEST['senha']);
$objUser->setSenha_confirma($_REQUEST['senha_confirma']);
$objUser->setEmail($_REQUEST['email']);
$objUser->setTelefone($_REQUEST['telefone']);
$objUser->setCpf($_REQUEST['cpf']);

switch ($action) {
    case 'logar':
        $arrMsgErro = [];
        if ($email == '') {
            $arrMsgErro[] = 'Informe o usuário';
        }
        if ($senha == '') {
            $arrMsgErro[] = 'Informe a senha';
        }
        if (count($arrMsgErro) > 0) {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/login/login.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/login/modalErroLogin.php');
        } else {

            global $conexao;
            $sql = "SELECT * FROM usuarios WHERE senha='{$senha}' AND email='{$email}'";
            $result = $conexao->query($sql);
            $qtd = $result->num_rows;

            if ($qtd > 0) {
                $row = $result->fetch_object();
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $row->user_id;
                $_SESSION['nome'] = $row->nome;
                $_SESSION['telefone'] = $row->telefone;
                $_SESSION['cpf'] = $row->cpf;
                header('Location: /src/view/painel/index.php');
            } else {
                $arrMsgErro[] = 'Login inválido';
                require_once(__AGENDAMENTO_DIR__ . 'src/view/login/login.php');
                require_once(__AGENDAMENTO_DIR__ . 'src/view/login/modalErroLogin.php');
            }
        }
        break;
    case 'logout':
        sessaoLogout();
        break;
    case 'inserir':
        $arrMsgErro = $objUser->validar();
        if (count($arrMsgErro) == 0) {
            if ($objUser->inserir() === true) {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/login/modalSucessCadastro.php');
            } else {
                echo "<script>alert('Erro no cadastro.')</script>";
                require_once(__AGENDAMENTO_DIR__ . 'src/view/login/loginCriarConta.php');
            }
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/login/loginCriarConta.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/login/loginJs.php');
        }
    case 'loadPagLogin':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/login/loginEntrar.php');
        break;
    case 'loadPagCadastro':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/login/loginCriarConta.php');
        break;
    case 'modalerro':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/login/modalErroLoginCadastro.php');
        break;
    default:
        # code...
        break;
}
