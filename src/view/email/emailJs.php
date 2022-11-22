<script>
    var emailJs = ({
        fConfig : function () {
            $('#corpo').ckeditor()
        },
        fEnviar: function() {
            $.ajax({
                'url': '/src/controller/emailController.php',
                'method': 'post',
                'data': $('#formEmailCreate').serialize()
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })
        }
    });

    $(document).ready(function() {
        emailJs.fConfig();
    });

    function validaDestinatario(){
        let valido = false;
        let para = $("[name='para']").val();
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        $("#container-para").empty();
        $("[name='para']").attr('class', 'form-control');
        if(para.match(pattern) && para !== ""){
            valido = true;
        }
        //Mostrar erro ao usuário 
        if (valido == false) {
            $("#container-para").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;Digite um e-mail válido</p>");
            $("[name='para']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='para']").attr('class', 'form-control is-valid');
        };
    }

    function validaAssunto(){
        let valido = false;
        let assunto = $("[name='assunto']").val();
        $("#container-assunto").empty();
        $("[name='assunto']").attr('class', 'form-control');
        if (assunto !== "") {
            valido = true;
        };

        //Mostrar erro ao usuário 
        if (valido == false) {
            $("#container-assunto").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;Digite um assunto</p>");
            $("[name='assunto']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='assunto']").attr('class', 'form-control is-valid');
        };
    }

    function validaCorpo(){
        let valido = false;
        let corpo = $("[name='corpo']").val();
        $("#container-corpo").empty();
        $("[name='corpo']").attr('class', 'form-control');
        if (corpo !== "") {
            valido = true;
        };

        //Mostrar erro ao usuário 
        if (valido == false) {
            $("#container-corpo").append("<p style='color:#dc3545;font-size:14px'> <i class='fa fa-circle-xmark'></i>&ensp;Digite um corpo</p>");
            $("[name='corpo']").attr('class', 'form-control is-invalid');
        };

        if(valido){
            $("[name='corpo']").attr('class', 'form-control is-valid');
        };
    }

</script>