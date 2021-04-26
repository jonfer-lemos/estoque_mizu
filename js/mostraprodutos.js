
$(document).ready(function () {
  $("input[name='codigo']").blur(function () {
    var $descricao = $("input[name='descricao']");
    $.getJSON('./backend/buscarprodutos.php', {
      codigo: $(this).val()
    }, function (json) {
      $descricao.val(json.descricao);
    });
  });
});






$(function () {
  var keyStop = {
    8: ":not(input:text, textarea, input:file, input:password)", // stop backspace = back
    13: "input:text, input:password", // stop enter = submit 
    9: "input:text, input:password", // stop tab = submit 

    end: null
  };
  $(document).bind("keydown", function (event) {
    var selector = keyStop[event.which];

    if (selector !== undefined && $(event.target).is(selector)) {
      event.preventDefault(); //stop event
    }
    return true;
  });
});
