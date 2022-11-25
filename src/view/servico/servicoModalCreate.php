<?php

global $conexao;

$sql = "SELECT data_reserva FROM agenda WHERE data_id='{$data_id}'";
$result = $conexao->query($sql);
$qtd = $result->num_rows;
$dataDisponivel; 
$dataVisual;

if ($qtd > 0){
    $row = $result->fetch_object();
    $dataDisponivel = date_create($row->data_reserva);
    $dataVisual = date_format($dataDisponivel, "d/m/Y H:i");
}

echo "<script>$(document).ready(function(data){ $('#myModal').modal('show'); });</script>

                        <div class='modal fade' id='myModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h4 class='modal-title danger' id='exampleModalLabel' style='color:#0d6efd'><i class='fas fa-calendar-days'></i>&emsp;Agendamento</h4>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                    <form id='formServicoCreate' action=''>
                                    <div id='containermodalcreate'>
                                
                                    </div>
                                    <input type='hidden' name='action' value='inserir'>
                                    <input type='hidden' name='data' value='$data_id'>
                                    <ul class='list-group'>
                                        <li class='list-group-item'>
                                            <div class='mb-3'>
                                                <label for='disabledTextInput' class='form-label'>Data:</label>
                                                <input type='text' class='form-control' name='data-visual' id='disabledTextInput' placeholder='' value='$dataVisual' readonly>
                                                <div id='container-data-visual'>
                                
                                                </div>
                                            </div>
                                        </li>
                                        <li class='list-group-item'>
                                            <div class='row g-3'>
                                                <div class='mb-3'>
                                                    <label for='formGroupExampleInput2' class='form-label'>CPF do cliente:</label>
                                                    <input type='text' class='form-control' name='cpf' id='formGroupExampleInput2' placeholder='CPF do cliente' value=''>
                                                    <div id='container-cpf'>
                                
                                                    </div>
                                                </div>
                                        </li>
                                        <li class='list-group-item'>
                                            <div class='mb-3'>
                                                <label for='formGroupExampleInput3' class='form-label'>Nome do pet:</label>
                                                <input type='text' class='form-control' name='nome_pet' id='formGroupExampleInput3' placeholder='Nome do pet' value=''>
                                                <div id='container-nome-pet'>
                                
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
                                        <button type='button' class='btn btn-primary' onclick=\"servicoJs.fAgendar()\">Agendar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            ";
?>