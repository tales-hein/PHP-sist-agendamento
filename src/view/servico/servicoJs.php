<script>
    var servicoJs = ({
        fNovo: function() {
            $.ajax({
                'url': '/src/controller/servicoController.php?action=novo'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fVoltar: function() {
            $.ajax({
                'url': '/src/controller/servicoController.php?action=pesquisar'
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })

        },
        fAgendar: function() {
            $.ajax({
                'url': '/src/controller/servicoController.php?action=inserir',
                'method': 'post',
                'data': $('#formServicoCreate').serialize()
            }).done(function(dados) {
                $('#layoutSidenav_content').html(dados);
            })
        },
        fModalAgendar: function(data_id) {
            $.ajax({
                'url': '/src/controller/servicoController.php?action=modalagendar',
                'data': {
                    'data_id': data_id
                }
            }).done(function(dados) {
                $('#containermodal').html(dados);
            })
        },
        fModalInformacao: function(cliente_cpf, nome_pet, data_id) {
            $.ajax({
                'url': '/src/controller/servicoController.php?action=modalinformacao',
                'data': {
                    'cliente_cpf': cliente_cpf,
                    'nome_pet': nome_pet,
                    'data_id': data_id
                }
            }).done(function(dados) {
                $('#containermodal').html(dados);
            })
        },
        fDesagendar: function(data_id) {
            $.ajax({
                'url': '/src/controller/servicoController.php?action=excluir',
                'data': {
                    'data_id': data_id
                }
            }).done(function(dados) {
                $('#containermodalinformacao').html(dados);
                $.ajax({
                    'url': '/src/controller/servicoController.php?action=atualizaragenda',
                }).done(function(dados) {
                    $('#layoutSidenav_content').html(dados);
                })
            });
        }
    })
</script>