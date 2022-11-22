<?php
echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

                        <div class='modal fade' id='myModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h4 class='modal-title danger' id='exampleModalLabel' style='color:#dc3545'><i class='fas fa-envelope'></i>&emsp;Não foi possível enviar o email!</h4>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body' style='text-align:center'>
                                        <i class='fa fa-circle-xmark fa-4x' style='color:#dc3545;margin:1rem'></i>
                                        <p>Certifique-se de que os campos de envio foram preenchidos corretamente</p>
                                    </div>
                                    <div class='modal-footer'>
                                        <div class='d-grid gap-2 col-6 mx-auto'>
                                            <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Tentar novamente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            ";
            