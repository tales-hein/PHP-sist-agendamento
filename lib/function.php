<?php

/**
 * Função para mostrar um array de forma legível 
 * @param mixed $arr
 * 
 * @return [type]
 */
function print_pre($arr)
{
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

/**
 * Função que adiciona datas para utilizar a tabela de agenda
 * @return [type]
 */
function preencherTabelaAgenda()
{
    $data = new DateTime();
    $data->setTimezone(new DateTimeZone('America/Sao_Paulo'));
    $data->modify('2022-11-23 08:00');
    $minutos = 30;

    global $conexao;
    $sql = "SELECT * FROM agenda";
    $result = $conexao->query($sql);
    $qtd = $result->num_rows;

    if ($qtd <= 0) {
        for($i = 0; $i<2000; $i++){
            $diaDaSemana = date("w", $data->getTimestamp());
            if(($diaDaSemana !== 0) && ($diaDaSemana !== 6)){
                $dataStr = $data->format('Y-m-d H:i');
                
                $sql = "INSERT INTO agenda (
                            data_reserva,
                            status_data
                        )
                        VALUES (
                            '{$dataStr}',
                            'a'
                        )
                        ";
                mysqli_query($conexao, $sql);

            };
            $data = $data->add(new DateInterval('PT' . $minutos . 'M'));
        }
    }
}
