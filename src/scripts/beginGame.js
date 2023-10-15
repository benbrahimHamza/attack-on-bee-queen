$(document).ready(function(){
    var ajaxurl = 'hitAction.php';
    $.post(ajaxurl, null, function (response) {
        // Response div goes here.
        $('#historyContainer').html(response);
    });
});
