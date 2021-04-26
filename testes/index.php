<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!doctype html>
<html lang="pt-br">

<head>
  <title></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="mt-5">Requisição Digital</h1><br>
    <form id="formulario">
      <div >
        <div class="row">
          <div class="form-group col-md-2">
            <label for="inputCodigoVendedor">Matrícula</label>
            <input type="text" class="form-control" id="inputCodigoVendedor" name="codigoVendedor">
          </div>
          <div class="form-group col-md-6">
            <label for="inputVendedor">Nome</label>
            <input type="text" class="form-control text-uppercase" id="inputvendedor" name="vendedor">
            <div id="divVendedor"></div>
          </div>
          <div class="form-group col-md-2">
            <label for="inputCodigoCliente">O.S/S.S</label>
            <input type="text" class="form-control" id="inputCodigoCliente" name="codigoCliente">
          </div>
          <div class="form-group col-md-2">
            <label for="inputCliente">TAG</label>
            <input type="text" class="form-control text-uppercase" id="inputCliente" name="cliente">
            <div id="divCliente"></div>
          </div>

          <div class="form-group col-md-9">
            <label for="inputCliente">Motivo</label>
            <input type="text" class="form-control text-uppercase" id="inputCliente" name="cliente">
            <div id="divCliente"></div>
          </div>

          <div class="form-group col-md-3">
            <label for="inputCliente">Setor</label>
            <input type="text" class="form-control text-uppercase" id="inputCliente" name="cliente">
            <div id="divCliente"></div>
          </div>

        </div>
      </div><br>


      <div class="row">
        <div class="form-group col-md-2">
          <label for="inputCodigo">Código</label>
          <input type="text" class="form-control" id="inputCodigo" name="codigo">
        </div>
        <div class="form-group col-md-7">
          <label for="inputDescricao">Descrição</label>
          <input type="text" class="form-control text-uppercase" id="inputDescricao" name="descricao">
          <div id="response"></div>
        </div>
        <div class="form-group col-md-2">
          <label for="inputEstoque">Quntidade</label>
          <input type="text" class="form-control" id="inputEstoque" name="estoque">
        </div>
        <div class="form-group col-md-1">
          <label for="inputQuantidade">Und</label>
          <input type="text" class="form-control" id="inputQuantidade" name="quantidade">
        </div>
        
      </div>
    </form>
    <button class="btn btn-success mt-3" type="submit" id="botao">ADICIONAR PRODUTO</button>
    <div class="mt-3">
      <table class="table table-striped" id="tabela">
        <thead class="thead-dark">
          <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">QUANTIDADE</th>
            <th scope="col">PREÇO UN</th>
            <th scope="col">PREÇO TOTAL</th>
            <th scope="col">AÇÃO</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <span id="totalPedido"></span>
    </div>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="js/main1.js"></script>
  <script type="text/javascript" src="js/mostraprodutos.js"></script>
</body>

</html>