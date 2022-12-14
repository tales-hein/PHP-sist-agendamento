<script>
    var loginJs = ({
        fEntrar: function() {
            $.ajax({
                'url': '/src/controller/loginController.php',
                'method': 'post',
                'data': $('').serialize()
            }).done(function(dados) {
                $('#containermodal').html(dados);
            })
        },
        fVoltar: function() {
            $.ajax({
                'url': '/src/controller/loginController.php?action=loadPagLogin'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fPagCadastro: function() {
            $.ajax({
                'url': '/src/controller/loginController.php?action=loadPagCadastro'
            }).done(function(dados){
                $('#layoutSidenav_content').html(dados);
            })
        },
        fCadastrar: function() {
            let inputFormNome = $("[name='nome']").val();
            let inputFormSenha = $("[name='senha']").val();
            let inputFormConfirmaSenha = $("[name='senha_confirma']").val();
            let inputFormEmail = $("[name='email']").val();
            let inputFormTelefone = $("[name='telefone']").val();
            let inputFormCpf = $("[name='cpf']").val();

            if (validaCadastro(inputFormNome, inputFormSenha, inputFormConfirmaSenha, inputFormEmail, inputFormTelefone, inputFormCpf)) {
                console.log("Verdadeiro");
                $.ajax({
                    'url': '/src/controller/loginController.php',
                    'method': 'post',
                    'data': $('#formUserCreate').serialize()
                }).done(function(dados) {
                    $('#layoutSidenav_content').html(dados);
                })
            }else {
                console.log("Falso");
                $.ajax({
                    'url': '/src/controller/loginController.php?action=modalerro'
                }).done(function(dados) {
                    $('#containermodal').html(dados);
                })
            }
        }
    });

    // Valida????o na p??gina de login no onblur

    function validarEmail(){
        let valido = false;
        let email = $("[name='email']").val();
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        $("#container-email").empty();
        $("[name='email']").attr('class', 'form-control');
        if(email.match(pattern) && email !== ""){
            valido = true;
        }
        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-email").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;Digite um e-mail v??lido</p>");
            $("[name='email']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='email']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validarSenha(){
        let valido = false;
        let senha = $("[name='senha']").val();
        $("[name='senha']").attr('class', 'form-control');
        $("#container-senha").empty();
        if (senha !== "") {
            valido = true;
        };

        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-senha").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;Digite uma senha v??lida</p>");
            $("[name='senha']").attr('class', 'form-control is-invalid');
        }

        if(valido){
            $("[name='senha']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    // Valida????o do formul??rio em submit

    function validaCadastro(nome, senha, senhaConfirma, email, telefone, cpf) {
        let valido = false;

        if (validaCadastroNome(nome) && validaCadastroSenha(senha) && validaCadastroConfirmaSenha(senhaConfirma) && validaCadastroComparaSenha(senha, senhaConfirma) &&
            validaCadastroEmail(email) && validaCadastroTelefone(telefone) && validaCadastroCpf(cpf)) {
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

        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-nome").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;Digite um nome v??lido</p>");
            $("[name='nome']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='nome']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validaCadastroSenha(senha) {
        let valido = false;
        $("[name='senha']").attr('class', 'form-control');
        $("#container-senha").empty();
        if (senha !== "" && senha.length>7) {
            valido = true;
        };

        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-senha").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;  Digite uma senha v??lida</p>");
            $("[name='senha']").attr('class', 'form-control is-invalid');
        }

        if(valido){
            $("[name='senha']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validaCadastroConfirmaSenha(senha) {
        let valido = false;
        $("#container-confirma-senha").empty();
        $("[name='senha_confirma']").attr('class', 'form-control');
        if (senha !== "") {
            valido = true;
        };

        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-confirma-senha").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;  Confirme a senha digitada</p>");
            $("[name='senha_confirma']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='senha_confirma']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validaCadastroComparaSenha(senha, senhaConfirma) {
        let valido = false;
        $("#container-senha").empty();
        $("#container-confirma-senha").empty();
        if (senha == senhaConfirma) {
            valido = true;
        };

        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-senha").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;  As senhas n??o s??o iguais</p>");
            $("#container-confirma-senha").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;  As senhas n??o s??o iguais</p>");
            $("[name='senha_confirma']").attr('class', 'form-control is-invalid');
            $("[name='senha']").attr('class', 'form-control is-invalid');
        };

        return valido
    }

    function validaCadastroEmail(email) {
        let valido = false;
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        $("#container-email").empty();
        $("[name='email']").attr('class', 'form-control');
        if(email.match(pattern) && email !== ""){
            valido = true;
        }
        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-email").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;  Digite um e-mail v??lido</p>");
            $("[name='email']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='email']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validaCadastroTelefone(telefone) {
        let valido = false;
        $("#container-telefone").empty();
        $("[name='telefone']").attr('class', 'form-control');
        if (telefone !== "") {
            valido = true;
        };

        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-telefone").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;  Digite um telefone v??lido</p>");
            $("[name='telefone']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='telefone']").attr('class', 'form-control is-valid');
        };

        return valido
    }

    function validaCadastroCpf(cpf) {
        let valido = true;
        cpf = cpf.replace(/\D/g, '');
        $("#container-cpf").empty();
        $("[name='cpf']").attr('class', 'form-control');

        if (cpf.toString().length != 11 || /^(\d)\1{10}$/.test(cpf)){
            valido = false;
        };
        
        [9, 10].forEach(function(j) {
            var soma = 0,
                r;
            cpf.split(/(?=)/).splice(0, j).forEach(function(e, i) {
                soma += parseInt(e) * ((j + 2) - (i + 1));
            });
            r = soma % 11;
            r = (r < 2) ? 0 : 11 - r;
            if (r != cpf.substring(j, j + 1)) valido = false;
        });

        //Mostrar erro ao usu??rio 
        if (valido == false) {
            $("#container-cpf").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;  Digite um CPF v??lido</p>");
            $("[name='cpf']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='cpf']").attr('class', 'form-control is-valid');
        };

        return valido;
    }
</script>