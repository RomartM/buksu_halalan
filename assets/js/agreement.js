$(document).ready(function(){
    $('img.materialboxed').materialbox();
    $('.bh-agreement-checkbox').click(function() {
        $('.bh-vote-now').attr("disabled", !this.checked);
    });
    $('.bh-vote-now').attr("disabled", true);
});