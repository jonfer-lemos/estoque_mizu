
//variaveis contadoras
var inArray = 0,
    funcao = 0,
    nameCodigo = 0,
    nameDescricao = 0,
    nameQdte = 0,
    nameUnd = 0,
    contPost = 0,
    qdteproduto = 0;


//criar um novo elemento

$(document).ready(function () {
    $('#form_prepare').submit(function () {
        var $this = $(this);

        // dados do integrante
        var matriculaIntegrante = $this.find("input[name='mat']").val(),
            nomeIntegrante = $this.find("input[name='nome']").val(),
            osssIntegrante = $this.find("input[name='osss']").val(),
            tagIntegrante = $this.find("input[name='tag']").val(),
            motivoIntegrante = $this.find("input[name='motivo']").val(),
            setorIntegrante = $this.find("select[name='setor']").val();


        var codigo = $this.find("input[name='codigo']").val(),
            descricao = $this.find("input[name='descricao']").val(),
            qdte = $this.find("input[name='qdte']").val();
            und = $this.find("select[name='und']").val();

            //limpa os campos
            document.getElementById("codigoid").value='';
            document.getElementById("descid").value='';
            document.getElementById("qdteid").value=0;
            document.getElementById("undid").value='';

            
            


        var tr = '<tr style="text-align: center; margin-top; 10px">' +
            '<td>' + codigo + '</td>' +
            '<td>' + descricao + '</td>' +
            '<td>' + qdte + '</td>' +
            '<td>' + und + '</td>' +
            '<td><button class="btn btn-outline-danger btn-sm" onclick="removerProduto(this); removerInputs' + [funcao++] + '(); excluirAddOk(); btnEventoExcluir();" type="button" style=" text-align: right; margin-top: -5px; margin-left: 5px">Excluir</button></td>' +
            '</tr>'
        $('#grid').find('tbody').append(tr);

        var hiddens =
            '<div id="dados-itegrante">' +
            '<input type="hidden" name="matriculaintegrante' + [contPost++] + '" value="' + matriculaIntegrante + '" />' +
            '<input type="hidden" name="nomeintegrante' + [contPost++] + '" value="' + nomeIntegrante + '" />' +
            '<input type="hidden" name="osssintegrante' + [contPost++] + '" value="' + osssIntegrante + '" />' +
            '<input type="hidden" name="tagintegrante' + [contPost++] + '" value="' + tagIntegrante + '" />' +
            '<input type="hidden" name="motivointegrante' + [contPost++] + '" value="' + motivoIntegrante + '" />' +
            '<input type="hidden" name="setorintegrante' + [contPost++] + '" value="' + setorIntegrante + '" />' +
            '</div>' +


            '<div id="remover-inputs' + [inArray++] + '">' +
            '<input type="hidden" name="codigo' + [nameCodigo++] + '" value="' + codigo + '" />' +
            '<input type="hidden" name="descricao' + [nameDescricao++] + '" value="' + descricao + '" />' +
            '<input id="qdteproduto' + [qdteproduto++] + '" type="hidden" name="qdte' + [nameQdte++] + '" value="' + qdte + '" />' +
            '<input type="hidden" name="und' + [nameUnd++] + '" value="' + und + '" />';
        '</div>'

        $('#form_insert').find('fieldset').append(hiddens);
        //apos incluir item o bt adicionar é bloquado o desbloqui ocorre quando é preenchido a div de produtos
        document.getElementById('btnok').disabled = true;
        

        return false;
    });
    
    
});



// function bloqUser() {
//     alert("teste!"),

//         document.getElementById('mat').disabled = true;

// }



// Apagar btn Ok para que limite a quantidade de até 10 produtos por requisição
var contadorOk = 0;
function someBotaoOk() {
    
    
    contadorOk++;
    if (contadorOk == 11) {
        alert("Limite de R.A, 10 produtos por requisição!");
        document.getElementById('btnok').remove();
    }
}



//Letras Maiusculas
function handleInput(e) {
    var ss = e.target.selectionStart;
    var se = e.target.selectionEnd;
    e.target.value = e.target.value.toUpperCase();
    e.target.selectionStart = ss;
    e.target.selectionEnd = se;
}

//excluir produto da tabela tr adicionados
var removerProduto = (function (elemento) {
    $(elemento).closest('tr').remove();

});


//funções para excluir inputs junto com tr's ao mesmo tempo
function removerInputs0() { document.getElementById('remover-inputs0').remove(); };
function removerInputs1() { document.getElementById('remover-inputs1').remove(); };
function removerInputs2() { document.getElementById('remover-inputs2').remove(); };
function removerInputs3() { document.getElementById('remover-inputs3').remove(); };
function removerInputs4() { document.getElementById('remover-inputs4').remove(); };
function removerInputs5() { document.getElementById('remover-inputs5').remove(); };
function removerInputs6() { document.getElementById('remover-inputs6').remove(); };
function removerInputs7() { document.getElementById('remover-inputs7').remove(); };
function removerInputs8() { document.getElementById('remover-inputs8').remove(); };
function removerInputs9() { document.getElementById('remover-inputs9').remove(); };
function removerInputs10() { document.getElementById('remover-inputs10').remove(); };
function removerInputs11() { document.getElementById('remover-inputs11').remove(); };
function removerInputs12() { document.getElementById('remover-inputs12').remove(); };
function removerInputs13() { document.getElementById('remover-inputs13').remove(); };
function removerInputs14() { document.getElementById('remover-inputs14').remove(); };
function removerInputs15() { document.getElementById('remover-inputs15').remove(); };
function removerInputs16() { document.getElementById('remover-inputs16').remove(); };
function removerInputs17() { document.getElementById('remover-inputs17').remove(); };
function removerInputs18() { document.getElementById('remover-inputs18').remove(); };
function removerInputs19() { document.getElementById('remover-inputs19').remove(); };
function removerInputs20() { document.getElementById('remover-inputs20').remove(); };
function removerInputs21() { document.getElementById('remover-inputs21').remove(); };
function removerInputs22() { document.getElementById('remover-inputs22').remove(); };
function removerInputs23() { document.getElementById('remover-inputs23').remove(); };
function removerInputs24() { document.getElementById('remover-inputs24').remove(); };
function removerInputs25() { document.getElementById('remover-inputs25').remove(); };
function removerInputs26() { document.getElementById('remover-inputs26').remove(); };
function removerInputs27() { document.getElementById('remover-inputs27').remove(); };
function removerInputs28() { document.getElementById('remover-inputs28').remove(); };
function removerInputs29() { document.getElementById('remover-inputs29').remove(); };
function removerInputs30() { document.getElementById('remover-inputs30').remove(); };
function removerInputs31() { document.getElementById('remover-inputs31').remove(); };
function removerInputs32() { document.getElementById('remover-inputs32').remove(); };
function removerInputs33() { document.getElementById('remover-inputs33').remove(); };
function removerInputs34() { document.getElementById('remover-inputs34').remove(); };
function removerInputs35() { document.getElementById('remover-inputs35').remove(); };
function removerInputs36() { document.getElementById('remover-inputs36').remove(); };


//habilita btn enviar RA para que não seja enviado input null
qdteteste = 0;
function btnEventoExcluir() {
    qdteteste--;
    
    if (qdteteste == 0){
        document.getElementById("enviarEmail").disabled = true // DESABILITA BOTÃO
        document.getElementById("matnao").disabled = false; // HABILITA BOTÃO
        
    }
}

function habilitaBotaoEnviarRa(){
    qdteteste ++;
    if (qdteteste > 0){
        document.getElementById("enviarEmail").disabled = false; // HABILITA BOTÃO
        document.getElementById("matnao").disabled = true; // DESABILITA BOTÃO
        
    }
}





// Atualizar pagina quando excluir os 10 produtos
var contadorExcluir = 0;
function excluirAddOk() {
    contadorExcluir++;
    if (contadorExcluir == 10) {
        
        document.location.reload(true);

    }
}

function myFunction(){
   var x = document.getElementById("descid").value;
    console.log(x);
    if(x == 'PRODUTO NÃO CADASTRADO '){
            $('#descid').prop('readonly', false);
        }else{
            $('#descid').prop('readonly', true);
        }
    
    
  }



//pegar quantas vezes os botões excluir e adcionar foram clicados, casso btn exclui = zero btn Enviar(bloqueado)
// btnAdcionar = 0;
// btnExcluir = btnAdcionar;

// function btnEventoAdicionar(){
//     btnAdcionar++;
//     console.log(btnAdcionar);

// }
// function btnEventoExcluir(){
//     btnExcluir = btnAdcionar;
//     console.log(btnExcluir);

// }

// if (btnExcluir = btnAdcionar){
//     document.getElementById("enviarEmail").disabled = true;
// }
// else{
//     document.getElementById("enviarEmail").disabled = false;
// }






// var x = 0,
//     y = 10;

// function excluirAddOk(){
//     x++;
//     y--;

// }

