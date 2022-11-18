<script>
    var petJs = ({
        fNovo: function() {
            $.ajax({
                'url': '/src/controller/petController.php?action=novo'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fVoltar: function() {
            $.ajax({
                'url': '/src/controller/petController.php?action=pesquisar'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fSalvar: function() {
            let inputFormNome = $("[name='nome']").val();
            let inputFormDono = $("[name='dono']").val();
            let inputFormRaca = $("[name='raca']").val();
            let inputFormEspecie = $('input[name=especie]:checked', '#formPetCreate').val();
            
            if (validaCadastro(inputFormNome, inputFormDono, inputFormRaca, inputFormEspecie)) {
                console.log("Deu boa");
                $.ajax({
                    'url': '/src/controller/petController.php',
                    'method': 'post',
                    'data': $('#formPetCreate').serialize()
                }).done(function(dados) {
                    $('#layoutSidenav_content').html(dados);
                })
            }else {
                console.log("Deu ruim");
                $.ajax({
                    'url': '/src/controller/petController.php?action=modalerro'
                }).done(function(dados) {
                    $('#containermodal').html(dados);
                })
            }
        },
        fEditar: function(pet_id, nome, dono, especie, raca) {
            $.ajax({
                'url': '/src/controller/petController.php?action=atualizar',
                'data': {
                    'pet_id': pet_id,
                    'nome':nome,
                    'dono':dono,
                    'especie':especie,
                    'raca':raca
                }
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })
        },
        fExcluir: function(id) {
            $.ajax({
                'url': '/src/controller/petController.php?action=excluir',
                'data': {
                    'pet_id': id
                }
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })
        },
    })

    function validaCadastro(nome, dono, raca, especie) {
        let valido = false;

        if (validaCadastroNome(nome) && validaCadastroDono(dono) && validaCadastroEspecie(especie) && validaCadastroRaca(raca)) {
            valido = true;
        };

        return valido;
    }

    function validaCadastroNome(nome) {
        let valido = false;
        $("#container-nome").empty();
        $("[name='nome']").attr('class', 'form-control');
        if (nome !== "") {
            valido = true;
        };

        //Mostrar erro ao usuário 
        if (valido == false) {
            $("#container-nome").append("<p style='color:#dc3545;font-size:14px;font-weight:bold'> <i class='fa fa-circle-xmark'></i>  Digite um nome válido</p>");
            $("[name='nome']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='nome']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validaCadastroDono(dono) {
        let valido = false;
        $("[name='dono']").attr('class', 'form-control');
        $("#container-dono").empty();
        if (dono !== "") {
            valido = true;
        };

        //Mostrar erro ao usuário 
        if (valido == false) {
            $("#container-dono").append("<p style='color:#dc3545;font-size:14px;font-weight:bold'> <i class='fa fa-circle-xmark'></i>  Digite um CPF válido</p>");
            $("[name='dono']").attr('class', 'form-control is-invalid');
        }

        if(valido){
            $("[name='dono']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validaCadastroEspecie(especie) {
        let valido = false;
        $("#container-especie").empty();
        if (especie !== undefined) {
            valido = true;
        };

        //Mostrar erro ao usuário 
        if (valido == false) {
            $("#container-especie").append("<p style='color:#dc3545;font-size:14px;font-weight:bold'> <i class='fa fa-circle-xmark'></i>Selecione uma das opções de espécie</p>");
        };

        return valido
    }

    function validaCadastroRaca(raca) {
        let valido = false;
        $("#container-raca").empty();
        $("[name='raca']").attr('class', 'form-control');
        if (raca !== "") {
            valido = true;
        };

        //Mostrar erro ao usuário 
        if (valido == false) {
            $("#container-raca").append("<p style='color:#dc3545;font-size:14px;font-weight:bold'> <i class='fa fa-circle-xmark'></i>Digite o nome da raça do seu pet</p>");
            $("[name='raca']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='raca']").attr('class', 'form-control is-valid');
        }

        return valido
    }
</script>