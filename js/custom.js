$(document).ready(function(){

    $('.pointer img').click(function(e) {
        var src = $(this).attr('src');
        $('#imgModal').modal('show');
        $('.modal-body img').attr('src', src);
        $('.modal-title').text($(this).attr('alt'));
    });

    $('.pointer video').click(function() {
        var src = $(this).find('source').attr('src');

        var markup = `<video class="w-100" autoplay controls>
                        <source src="${src}" type="video/mp4">
                    </video>`;
        $('#player').html('').html(markup);
    });

    $('.pointer .audio-name').click(function() {
        var src = $(this).text();

        var markup = `<audio controls autoplay loop>
                        <source src="audio/${src}" 
                            type="audio/mpeg">
                    </audio>`;
        $('#audio-player').html('').html(markup);
    });

});