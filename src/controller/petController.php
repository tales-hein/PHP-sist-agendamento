<?php
require_once('../../lib/config.php');

$objPet = new Pet();

$objPet->setPet_id($_REQUEST['pet_id']);
$objPet->setEspecie($_REQUEST['especie']);
$objPet->setNome($_REQUEST['nome']);
$objPet->setRaca($_REQUEST['raca']);
$objPet->setCpfDono($_REQUEST['dono']);

$action = $_REQUEST['action'];

switch ($action) {
    case 'inserir':
        $arrMsgErro = $objPet->validar();
        if (count($arrMsgErro) == 0) {
            if ($objPet->inserir() === true) {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/modalSucessPet.php');
            } else {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/modalErroPet.php');
            }
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petRead.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petCreate.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        }
        break;
    case 'update':
        $arrMsgErro = $objPet->validar();
        if (count($arrMsgErro) == 0) {
            if ($objPet->atualizar() === true) {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/modalSucessPetUpdate.php');
            } else {
                echo "<script>alert('Erro no cadastro.')</script>";
            }
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petRead.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petCreate.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        }
        break;
    case 'atualizar':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petUpdate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        break;
    case 'excluir':
        if ($objPet->excluir() === true) {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/modalDeletePet.php');
        } else {
            echo "<script>alert('Erro ao tentar excluir.')</script>";
        }
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petRead.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        break;
    case 'modalerro':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/modalErroPet.php');
        break;
    case 'pesquisar':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petRead.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        break;
    case 'novo':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petCreate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        break;
    default:
        echo 'Erro: Action "' . $action . '" não existe';
        break;
}
