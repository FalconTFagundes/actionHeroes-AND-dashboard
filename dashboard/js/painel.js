$('.clickMenulateral').on('click', function (){
    var dataMenu = $(this).attr('data-menu');
    $('#conteudo').html(dataMenu);
}) 