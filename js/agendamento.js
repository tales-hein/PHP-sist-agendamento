var agendamentoJs = ({
    fCarregarMenu: function (arquivo) {
        $.ajax({
            'url': '../../controller/' + arquivo + 'Controller.php?action=pesquisar'
        }).done(function (dados) {
            $('#layoutSidenav_content').html(dados);
        })
    }
})
