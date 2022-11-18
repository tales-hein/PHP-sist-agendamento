<?php
echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

                        <div class='modal fade' id='myModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h4 class='modal-title danger' id='exampleModalLabel' style='color:#198754'><i class='fas fa-dog'></i>&emsp;Cadastro efetuado</h4>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body' style='text-align:center'>
                                        <i class='fa fa-circle-check fa-4x' style='color:#198754;margin:1rem'></i>
                                        <p>Cadastro do pet realizado com sucesso</p>
                                    </div>
                                    <div class='modal-footer'>
                                        <div class='d-grid gap-2 col-6 mx-auto'>
                                            <button type='button' class='btn btn-success' data-bs-dismiss='modal'>Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            ";
