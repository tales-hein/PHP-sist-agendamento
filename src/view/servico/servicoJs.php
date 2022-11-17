<script>
    var servicoJs = ({
        fNovo: function() {
            $.ajax({
                'url': '../../controller/servicoController.php?action=novo'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fVoltar: function() {
            $.ajax({
                'url': '../../controller/servicoController.php?action=pesquisar'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fSalvar: function() {
            $.ajax({
                'url': '../../controller/servicoController.php',
                'method' : 'post',
                'data' : $('#formServicoCreate').serialize()
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })
        },
        fEditar: function() {

        },
        fExcluir: function() {

        },
    })
</script>