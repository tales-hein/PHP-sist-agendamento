<?php

global $conexao;

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$sql = "SELECT * FROM agenda";
$result = $conexao->query($sql);
$qtd = $result->num_rows;

if ($qtd > 0) {
    while ($row = $result->fetch_object()) {

        $diaSql = strtotime(date('Y-m-d', strtotime($row->data_reserva)));
        $diaAtual = strtotime(date('Y-m-d'));

        $horaSql = strtotime(date('H:i', strtotime($row->data_reserva)));
        $inicioExpediente = strtotime(date('H:i', strtotime('08:00')));
        $fimExpediente = strtotime(date('H:i', strtotime('18:00')));

        if (($diaSql == $diaAtual) && ($horaSql >= $inicioExpediente) && ($horaSql < $fimExpediente)) {
            if ($row->status_data == 'a') {
                $data = date_create($row->data_reserva);
                print "
                                <div class='col'>
                                    <div class='card border-dark h-100' style='width: 12rem;'>
                                        <div class='card-header text-white bg-secondary'>" . date_format($data, "d/m/Y H:i") . "</div>
                                        <div class='card-body'>
                                            <p class='card-text'><i class='fas fa-user fa-1x'></i> Cliente: </p>
                                            <p class='card-text'><i class='fas fa-dog'></i> Pet: </p>
                                            <p class='card-text'><i class='fas fa-bath'></i> Tarefa: </p>
                                        </div>
                                        <div class='card-footer'>
                                            <div class='d-grid gap-2 col-8 mx-auto'>
                                                <button class='btn btn-primary btn-sm' style='text-align:center;' onclick=\"servicoJs.fModalAgendar(" . "'" . $row->data_id . "'" . ")\">Agendar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }

            if ($row->status_data == 'f') {
                $sqlServico = "SELECT * FROM servico WHERE
                                    data_id='{$row->data_id}'
                                    ";
                $resultServico = $conexao->query($sqlServico);
                $qtdServico = $resultServico->num_rows;

                $data = date_create($row->data_reserva);

                if ($qtdServico > 0) {
                    $rowServico = $resultServico->fetch_object();

                    print "
                                    <div class='col'>
                                        <div class='card border-dark h-100' style='width: 12rem;'>
                                            <div class='card-header text-white bg-success'>" . date_format($data, "d/m/Y H:i") . "</div>
                                            <div class='card-body'>
                                                <p class='card-text'><i class='fas fa-user'></i>CPF do cliente: " . $rowServico->cliente_cpf . "</p>
                                                <p class='card-text'><i class='fas fa-dog'></i> Pet: " . $rowServico->pet_nome . "</p>
                                                <p class='card-text'><i class='fas fa-bath'></i> Tarefa: Banho e tosa</p>
                                            </div>
                                            <div class='card-footer'>
                                                <div class='d-grid gap-2 col-8 mx-auto'>
                                                    <button class='btn btn-success btn-sm' onclick=\"servicoJs.fInformacoes(" . "'" . $rowServico->cliente_cpf . "', '" . $rowServico->pet_nome . "'" . ")\">Informações</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
            }
        }
    }
} else {
    print "<br><p class='alert alert-danger'>Não há cadastros para vizualizar.</p>";
}
