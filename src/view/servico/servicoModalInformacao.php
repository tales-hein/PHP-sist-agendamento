<?php

global $conexao;

$sqlUser = "SELECT * FROM usuarios WHERE cpf='{$cliente_cpf}'";
$resultUser = $conexao->query($sqlUser);
$qtdUser = $resultUser->num_rows;

if ($qtdUser > 0) {
    $rowUser = $resultUser->fetch_object();
}

$sqlPet = "SELECT * FROM pets WHERE nome='{$nome_pet}'";
$resultPet = $conexao->query($sqlPet);
$qtdPet = $resultPet->num_rows;

if ($qtdPet > 0) {
    $rowPet = $resultPet->fetch_object();
}

$especieDoPet;
switch ($rowPet->especie) {
    case 'c':
        $especieDoPet = 'Cachorro';
        break;
    case 'g':
        $especieDoPet = 'Gato';
        break;
    case 'a':
        $especieDoPet = 'Ave';
        break;
    case 'e':
        $especieDoPet = 'Exótico';
        break;
    default:
        # code...
        break;
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
                                        <h5>Informações do agendamento:</h5>
                                        <p>Nome do cliente: $rowUser->nome</p>
                                        <p>CPF do cliente: $cliente_cpf</p>
                                        <p>Nome do pet: $nome_pet</p>
                                        <p>Especie: $especieDoPet</p>
                                        <p>Raca: $rowPet->raca </p>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Ok</button>
                                        <button type='button' class='btn btn-danger' onclick=\"servicoJs.fModalInformacao($data_id)\">Excluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            ";
