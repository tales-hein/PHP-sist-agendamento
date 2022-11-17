<?php
/**
 * Função para mostrar um array de forma legível 
 * @param mixed $arr
 * 
 * @return [type]
 */
function print_pre($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
/**
 * Função que efetua o logout
 * @return [type]
 */
function sessaoLogout()
{
    session_destroy();
    header('Location: /src/view/login/login.php');
}
/**
 * Função que checa o logout
 * @return [type]
 */
function checarSessao()
{
    if (!isset($_SESSION['email'])) {
        sessaoLogout();
    }
}
