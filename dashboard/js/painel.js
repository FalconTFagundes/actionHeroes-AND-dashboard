/* 

By: Rafael Fagundes
30/09/2023


*/



/* INICIO FUNÇÃO DE UPLOAD - BANNER */

var redimensionar = $('#previewUploadBanner').croppie({
    enableExif: true,
    enableOrientation: true,

    viewport: {
        width: 200,
        height: 200,
        type: 'square'
    },

    boundary: {
        width: 300,
        height: 300
    }

});

$('#arquivoBanner').on('change', function () {
    var ler = new FileReader();

    ler.onload = function (e) {
        redimensionar.croppie('bind', {
            url: e.target.result
        });
    }

    ler.readAsDataURL(this.files[0]);
});

$('#bntUploadArquivoBanner').on('click', function (retorno) {
    redimensionar.croppie('result', {
        type: 'canvas', // Tipo de arquivos permitidos - base64, html, blob
        size: 'viewport' // O tamanho da imagem cortada
    }).then(function (img){
        // Enviar os dados para um arquivo PHP
        $.ajax({
            url: "uploadBanner.php", // Enviar os dados para o arquivo upload.php
            type: "POST", // Método utilizado para enviar os dados
            data: { // Dados que deve ser enviado
                "imagem": img
            },
            success: function(){
                $('#modalCadastrarBanner').modal('hide')
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







/* ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */









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