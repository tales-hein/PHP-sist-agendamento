<?php
require_once('../../lib/config.php');

$objPet = new Pet();

$objPet->setPet_id($_REQUEST['pet_id']);
$objPet->setEspecie($_REQUEST['especie']);
$objPet->setNome($_REQUEST['nome']);
$objPet->setRaca($_REQUEST['raca']);
$objPet->setDono_id($_REQUEST['dono_id']);


$action = $_REQUEST['action'];

switch ($action) {
    case 'inserir':
        $arrMsgErro = $objPet->validar();
        if (count($arrMsgErro) == 0) {
            if ($objPet->inserir() === true) {
                echo 'Inserido com sucesso';
            } else {
                echo 'Erro ao inserir';
            }
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petRead.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petCreate.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/pet/petJs.php');
        }


        break;
    case 'atualizar':
        //obj > alterar()
        break;
    case 'apagar':
        //obj > excluir()
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
