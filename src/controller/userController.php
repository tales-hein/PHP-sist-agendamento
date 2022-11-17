<?php
require_once('../../lib/config.php');

$objUser = new User();

$objUser->setId_user($_REQUEST['id_user']);
$objUser->setNome($_REQUEST['nome']);
$objUser->setSenha($_REQUEST['senha']);
$objUser->setSenha_confirma($_REQUEST['senha_confirma']);
$objUser->setEmail($_REQUEST['email']);
$objUser->setTelefone($_REQUEST['telefone']);
$objUser->setCpf($_REQUEST['cpf']);

$action = $_REQUEST['action'];

switch ($action) {
    case 'inserir':
        $arrMsgErro = $objUser->validar();
        if (count($arrMsgErro) == 0) {
            if ($objUser->inserir() === true) {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/user/modalSucessUser.php');
            } else {
                echo "<script>alert('Erro no cadastro.')</script>";
            }
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userRead.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userCreate.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        }
        break;
    case 'update':
        $arrMsgErro = $objUser->validar();
        if (count($arrMsgErro) == 0) {
            if ($objUser->atualizar() === true) {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/user/modalSucessUserUpdate.php');
            } else {
                echo "<script>alert('Erro no cadastro.')</script>";
            }
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userRead.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userCreate.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        }
        break;
    case 'atualizar':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userUpdate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        break;
    case 'excluir':
        if ($objUser->excluir() === true) {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/user/modalDeleteUser.php');
        } else {
            echo "<script>alert('Erro ao tentar excluir.')</script>";
        }
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userRead.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        break;
    case 'pesquisar':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userRead.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        break;
    case 'novo':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userCreate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/userJs.php');
        break;
    case 'modalerro':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/user/modalErroUser.php');
        break;
    default:
        echo 'Erro: Action "' . $action . '" não existe';
        break;
}
