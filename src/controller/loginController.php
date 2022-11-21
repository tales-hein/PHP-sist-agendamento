<?php
$ignoraSessao = true;
require_once('../../lib/config.php');

$action = $_REQUEST['action'];
$email = $_POST['email'];
$password = $_POST['password'];

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
        if ($password == '') {
            $arrMsgErro[] = 'Informe a senha';
        }
        if (count($arrMsgErro) > 0) {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/login/login.php');
        } else {
            //adm@agenda.com > 123
            //user@agenda.com > 987
            if (($email == 'adm@agenda.com' && $password == '123') or
                ($email == 'user@agenda.com' && $password == '987')
            ) {
                $_SESSION['email'] = $email;
                $_SESSION['perfil'] = $email == 'adm@agenda.com' ? 'adm' : 'user';

                header('Location: /src/view/painel');
            } else {
                $arrMsgErro[] = 'Login inválido';
                require_once(__AGENDAMENTO_DIR__ . 'src/view/login/login.php');
            }
        }
        break;
    case 'logout':
        sessaoLogout();
        break;
    case 'cadastrar':
        // 
        break;
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
