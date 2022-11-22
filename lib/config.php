<?php
session_start();

error_reporting(E_ALL & ~E_WARNING);

include_once('function.php');

if($ignoraSessao == false){
    checarSessao();
}

include_once('database.php');

define('__AGENDAMENTO_TITULO__', 'Petshop');
define('__AGENDAMENTO_DIR__', $_SERVER['DOCUMENT_ROOT'] . '/');
define('__AGENDAMENTO_HTTP__', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('__EMAIL__', 'petcare.petshop@outlook.com');

require __AGENDAMENTO_DIR__ . '/vendor/autoload.php';

require_once(__AGENDAMENTO_DIR__ . 'src/model/userModel.php');
require_once(__AGENDAMENTO_DIR__ . 'src/model/petModel.php');
require_once(__AGENDAMENTO_DIR__ . 'src/model/servicoModel.php');
require_once(__AGENDAMENTO_DIR__ . 'src/model/loginModel.php');
