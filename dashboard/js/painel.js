/* 

By: Rafael Fagundes
30/09/2023


*/


/* FUNCTION ATUALIZAR PÁGINA */
function atualizarPagina(dataMenu) {
    var dados = {
        acao: dataMenu
    }
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {

        }, success: function (e) {

            $('div#conteudo').html(e);
        }
    })
}


/* FUNCTION CLICK MENU DASHBOARD */
$('.clickMenulateral').on('click', function () {

    $('.clickMenulateral').removeClass("show active");
    var dataMenu = $(this).attr('data-menu');
    var dados = {
        acao: dataMenu
    }

    $(this).addClass("show active");

    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {
            msgGeral('processando', 700);
        }, success: function (retorno) {
            $('#conteudo').html(retorno);

        }
    });
})
/* FIM FUNCTION CLICK MENU LATERAL */


/* FUNCTION CADASTRAR GERAL */
function cadGeral(formId, modalId, pageAcao, pageRetorno) {
    $('#' + formId).on('submit', function (k) {
        k.preventDefault();

        var formdata = $(this).serializeArray();
        formdata.push(
            { name: "acao", value: pageAcao },
        );

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: formdata,
            beforeSend: function (retorno) {

            }, success: function (retorno) {
                console.log(retorno);
                $('#' + modalId).modal('hide');
                setTimeout(function () {
                    atualizarPagina(pageRetorno);
                }, 1000);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Salvo com Sucesso',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        });
    })
}
/* FIM FUNCTION CADASTRAR GERAL */



/* FUNCTION EXCLUIR */
function excGeral(idvar, acaopage, pageretorno, m1, m2) {

    Swal.fire({
        title: m1,
        text: m2,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
    }).then((result) => {
        if (result.isConfirmed) {

            var dados = {
                acao: acaopage,
                id: idvar
            }

        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'Operação Cancelada',
                'error'
            )
        }

        $.ajax({
            type: 'POST',
            dataType: 'HTML',
            url: 'controle.php',
            data: dados,
            beforeSend: function (retorno) {
            }, success: function (retorno) {

                Swal.fire(
                    'Arquivo Deletado!',
                    'O arquivo foi deletado com sucesso',
                    'success'
                )
                setTimeout(function () {
                    atualizarPagina(pageretorno);
                }, 1000)
            }


        });
    })
}
/* FINAL FUNÇÃO DE EXCLUIR */


/* INICIO FUNÇÃO DE ATIVAR */
function ativarGeral(e, f, acaopage, pageretorno) {
    if (f == 'ativar') {
        var ativo = 'A';
    } else {

        var ativo = 'D';
    }
    var dados = {
        acao: acaopage,
        id: e,
        a: ativo
    }
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: 'controle.php', /* envio de 'acao' para a página controle */
        data: dados,
        beforeSend: function (retorno) {
        }, success: function (retorno) {
            if (retorno == 'Atualizado') {
                if (ativo == 'D') {
                    msgGeral('Desativado!', 1000);
                } else {
                    msgGeral('Ativado!', 1000);
                }
                atualizarPagina(pageretorno);
                setTimeout(function () {
                }, 1000)
            }
            console.log(retorno);
        }
    });
}
/* FIM DA FUNÇÃO DE ATIVAR */



/* FUNÇÃO DE ALERTA DE MENSAGEM */
function msgGeral(mensagem, timer) {
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: mensagem,
        showConfirmButton: false,
        timer: timer
    })
}
/* FINAL FUNÇÃO DE ALERTA DE MENSAGEM */