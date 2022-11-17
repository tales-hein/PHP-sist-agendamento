<script>
    var petJs = ({
        fNovo: function() {
            $.ajax({
                'url': '../../controller/petController.php?action=novo'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fVoltar: function() {
            $.ajax({
                'url': '../../controller/petController.php?action=pesquisar'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fSalvar: function() {
            $.ajax({
                'url': '../../controller/petController.php',
                'method' : 'post',
                'data' : $('#formPetCreate').serialize()
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