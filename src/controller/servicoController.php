<?php
require_once('../../lib/config.php');

$objServico = new Servico();

$objServico->setId_servico($_REQUEST['id_servico']);
$objServico->setId_tipo($_REQUEST['id_tipo']);
$objServico->setNome($_REQUEST['nome']);
$objServico->setDono($_REQUEST['dono']);


$action = $_REQUEST['action'];

switch ($action) {
    case 'inserir':
        $arrMsgErro = $objServico->validar();
        if (count($arrMsgErro) == 0) {
            if ($objServico->inserir() === true) {
                echo 'Inserido com sucesso';
            } else {
                echo 'Erro ao inserir';
            }
            require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoRead.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoCreate.php');
            require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        }


        break;
    case 'atualizar':
        //obj > alterar()
        break;
    case 'apagar':
        //obj > excluir()
        break;
    case 'pesquisar':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoRead.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        break;
    case 'novo':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoCreate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        break;
    default:
        echo 'Erro: Action "' . $action . '" não existe';
        break;
}
