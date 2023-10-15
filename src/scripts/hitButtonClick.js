$(document).ready(function(){
    $('#hitButton').click(function(){
        var ajaxurl = 'hitAction.php';
        $.post(ajaxurl, null, function (response) {
            $('#historyContainer').html(response);
        });
    });
});