$(document).ready(function(){

    $('.pointer img').click(function(e) {
        var src = $(this).attr('src');
        $('#imgModal').modal('show');
        $('.modal-body img').attr('src', src);
        $('.modal-title').text($(this).attr('alt'));
    });

});