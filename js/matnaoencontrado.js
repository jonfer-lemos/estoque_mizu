
function concatena() {
  var mat = document.getElementById('mat').value;
  var nomeinter = document.getElementById('nomeinter').value;
  var osss = document.getElementById('osss').value;
  var tagequip = document.getElementById('tagequip').value;
  var motivo = document.getElementById('motivo').value;
  var setor = document.getElementById('setor').value;

  if (mat >= 1 && nomeinter !='' && motivo != '') {
    document.getElementById('idteste').value = " Matrícula: [ " + mat + " ]" + "<br>" + "Nome: [ " + nomeinter + " ]" + "<br>" + "O.S/S.S: [ " + osss + " ]" + "<br>" + "TAG: [" + tagequip + "]" + "<br>" + " Motivo:" + motivo + "<br>"  + "Setor: " + setor + "" + "<br>"+"<strong>" + "MATERIAL NÃO ENCONTRADO!!!"+"</strong>";
  }else{
    alert('Preencha os campos Matrícula, Nome e Motivo');
  }

}