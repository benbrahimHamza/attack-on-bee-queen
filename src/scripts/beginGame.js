$(document).ready(function(){
    var ajaxurl = 'beginGame.php';
    $.post(ajaxurl, null, function (response) {
        // Response div goes here.
        $('#historyContainer').html(response);
    });
});
