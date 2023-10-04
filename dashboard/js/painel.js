/* 

By: Rafael Fagundes
30/09/2023


*/



/* INICIO FUNÇÃO DE UPLOAD - BANNER */

var redimensionarBanner = $('#previewUploadBanner').croppie({
    enableExif: true,
    enableOrientation: true,

    viewport: { width: 300, height: 300 },
    boundary: { width: 500, height: 400 },

});

$('#arquivoBanner').on('change', function () {
    var ler = new FileReader();

    ler.onload = function (e) {
        redimensionarBanner.croppie('bind', {
            url: e.target.result
        });
    }

    ler.readAsDataURL(this.files[0]);
});

$('#btnUploadArquivoBanner').on('click', function (retorno) {
    redimensionarBanner.croppie('result', {
        type: 'canvas', // Tipo de arquivos permitidos - base64, html, blob
        size: 'viewport' // O tamanho da imagem cortada
    }).then(function (img){
        // Enviar os dados para um arquivo PHP
        $.ajax({
            url: "uploadbanner.php", // Enviar os dados para o arquivo upload.php
            type: "POST", // Método utilizado para enviar os dados
            data: { // Dados que deve ser enviado
                "imagem": img
            },
            success: function(){
                $('#modalCadastrarBanner').modal('hide')
                setTimeout(function (){
                    atualizarPagina('bannerDashboard');
                }, 1000);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Salvo com Sucesso',
                    showConfirmButton: false,
                    timer: 1500
                    
                  })
                
            }
        });
    });
});


/* FIM FUNÇÃO UPLOAD DE IMAGE - BANNER */


/* FUNCTION ATUALIZAR PÁGINA */

function atualizarPagina(dataMenu){
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
    var dataMenu = $(this).attr('data-menu');
    $('#conteudo').html(dataMenu);

    var dados = {
        acao: dataMenu
    }

    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {

        }, success: function (retorno) {
            $('#conteudo').html(retorno);
        }
    });

}) 


/* FUNCTION CADASTRAR */
function cadGeral(formId, modalId, pageAcao, pageRetorno){
    $('#'+formId).on('submit', function (k){
        k.preventDefault();
       
        var formdata = $(this).serializeArray();
        formdata.push(
            {name: "acao", value: pageAcao },
        );

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: formdata,
            beforeSend: function (retorno) {

            }, success: function (retorno) {
                console.log(retorno);
                $('#'+modalId).modal('hide');
                setTimeout(function(){
                    atualizarPagina(pageRetorno);
               },1000);
               Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Salvo com Sucesso',
                showConfirmButton: false,
                timer: 1500
                
              })
            }
        });
    })
}








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



function ativarGeral(e, f,  acaopage, pageretorno) {
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
                      msgGeral('Desativado!');
                    } else {
                        msgGeral('Ativado!');
                    }
                    atualizarPagina(pageretorno);
                    setTimeout(function () {
                    }, 1000)
                }
                console.log(retorno);
            }
        });


}


function msgGeral(mensagem) {
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: mensagem,
        showConfirmButton: false,
        timer: 1500
    })
}
