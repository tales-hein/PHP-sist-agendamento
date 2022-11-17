<script>
    const toggleInput = document.querySelector("#flexSwitchCheckDefault");
    const body = document.querySelector("body");
    const form = document.querySelector(".form-wrap");
    const campoLogin = document.querySelector("#user");
    const lblLogin = document.querySelector("#lbllogin");
    const campoSenha = document.querySelector("#senha");
    const lblSenha = document.querySelector("#lblsenha");
    const campoConfirmacao = document.querySelector("#confirmacao");
    const lblConfirmacao = document.querySelector("#lblconfirmacao");
    let validacao = false;


    var loginJs = ({
        fEntrar: function() {
            $.ajax({
                'url': '/src/controller/userController.php?action=novo'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fVoltar: function() {
            $.ajax({
                'url': '/src/controller/userController.php?action=pesquisar'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        }
    });

    function toggle() {
        if (toggleInput.checked == true) {
            body.style.background = '#242526';
            form.style.background = '#1E1E1E';
        }

        if (toggleInput.checked == false) {
            body.style.background = '#d1d1d1';
            form.style.background = '#fff';
        }
    }

    function validarLogin() {
        let login = campoLogin.value;
        if (login.length != 0) {
            campoLogin.setAttribute('class', 'form-control is-valid')
            lblLogin.style.color = "green";
            lblLogin.innerHTML = "Login";
        } else {
            campoLogin.setAttribute('class', 'form-control is-invalid')
            lblLogin.style.color = "red";
            lblLogin.innerHTML = "Você deve escolher um nome para login!";
        }
    }

    function validarSenha() {
        let senha = campoSenha.value;
        if ((senha.length >= 6) && (senha.length <= 8)) {
            campoSenha.setAttribute('class', 'form-control is-valid')
            lblSenha.style.color = "green";
            lblSenha.innerHTML = "Senha";
            validacao = true;
        } else {
            campoSenha.setAttribute('class', 'form-control is-invalid')
            lblSenha.style.color = "red";
            lblSenha.innerHTML = "Formato inadequado! A senha deve ter entre 6 e 8 caracteres";
        }

        if (senha.length == 0) {
            campoSenha.setAttribute('class', 'form-control is-invalid')
            lblSenha.style.color = "red";
            lblSenha.innerHTML = "Você deve escolher uma senha!";
        }
    }

    function validarConfirmacao() {
        let senha = campoSenha.value;
        let confirmacao = campoConfirmacao.value;
        if ((senha.length != 0) && (senha == confirmacao) && validacao) {
            campoSenha.setAttribute('class', 'form-control is-valid')
            campoConfirmacao.setAttribute('class', 'form-control is-valid')
            lblConfirmacao.style.color = "green";
            lblConfirmacao.innerHTML = "Confirme a senha";
            lblSenha.style.color = "green";
            lblSenha.innerHTML = "Senha";
        } else if ((senha.length != 0) && (confirmacao != 0) && (senha != confirmacao)) {
            campoSenha.setAttribute('class', 'form-control is-invalid')
            campoConfirmacao.setAttribute('class', 'form-control is-invalid')
            lblSenha.style.color = "red";
            lblSenha.innerHTML = "As senhas são incompatíveis";
            lblConfirmacao.style.color = "red";
            lblConfirmacao.innerHTML = "As senhas são incompatíveis";
        } else {
            campoConfirmacao.setAttribute('class', 'form-control')
            lblConfirmacao.style.color = "#818181";
            lblConfirmacao.innerHTML = "Confirme a senha";
        }

        if (confirmacao.length == 0) {
            campoConfirmacao.setAttribute('class', 'form-control is-invalid')
            lblConfirmacao.style.color = "red";
            lblConfirmacao.innerHTML = "Você deve confirmar a sua senha!";
        }
    }

    function ultimaValidacao() {
        let senha = campoSenha.value;
        let confirmacao = campoConfirmacao.value;
        let login = campoLogin.value;
        if ((login.length != 0) && (senha.length >= 6) && (senha.length <= 8) && senha == confirmacao) {
            alert("Conta criada com sucesso!")
            campoConfirmacao.setAttribute('class', 'form-control')
            lblConfirmacao.style.color = "#818181";
            lblConfirmacao.innerHTML = "Confirme a senha";
            campoSenha.setAttribute('class', 'form-control')
            lblSenha.style.color = "#818181";
            lblSenha.innerHTML = "Senha";
            campoLogin.setAttribute('class', 'form-control')
            lblLogin.style.color = "#818181";
            lblLogin.innerHTML = "Login";
            campoLogin.value = "";
            campoSenha.value = "";
            campoConfirmacao.value = "";
        } else {
            alert("Não foi possível criar a conta! Verifique se preencheu os campos corretamente")
        }
    }
</script>