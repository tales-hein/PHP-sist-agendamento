<?php
require_once('../../lib/config.php');

$data_id = $_REQUEST['data_id'];
$cliente_cpf = $_REQUEST['cliente_cpf'];
$nome_pet = $_REQUEST['nome_pet'];
$action = $_REQUEST['action'];

$objServico = new Servico();

$objServico->setServico_id($_REQUEST['servico_id']);
$objServico->setData_id($_REQUEST['data']);
$objServico->setCliente_cpf($_REQUEST['cpf']);
$objServico->setNome_pet($_REQUEST['nome_pet']);

switch ($action) {
    case 'inserir':
        $arrMsgErro = $objServico->validar();
        if (count($arrMsgErro) == 0) {
            if ($objServico->inserir() === true) {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoCreate.php');
                require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
                require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/modalSuccessServico.php');
            } else {
                require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/modalErroServico.php');
            }
        } else {
            require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/modalErroServico.php');
        }
        break;
    case 'excluir':
        $objServico->excluir($data_id);
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/modalSuccessServico.php');
        break;
    case 'atualizaragenda':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoCreate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        break;
    case 'pesquisar':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoCreate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        break;
    case 'novo':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoCreate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        break;
    case 'modalagendar':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoModalCreate.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        break;
    case 'modalinformacao':
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoModalInformacao.php');
        require_once(__AGENDAMENTO_DIR__ . 'src/view/servico/servicoJs.php');
        break;
    default:
        echo 'Erro: Action "' . $action . '" não existe';
        break;
}
