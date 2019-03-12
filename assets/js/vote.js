$(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.collapsible').collapsible();
    $('.modal').modal();
    var elem = document.querySelector('.collapsible.expandable');
    M.Collapsible.init(elem, {
        accordion: false
    });
  });
