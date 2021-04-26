<html lang="pt-br" class="h-100">

<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/additens.js"></script>
    <script type="text/javascript" src="js/matnaoencontrado.js"></script>
    <script type="text/javascript" src="js/mostraprodutos.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/styler.css" rel="stylesheet">

</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>novo</title>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(60,60,60, 0.2);">
        <img src="http://www.curveloonline.com/wp-content/uploads/Logo-Mizu-300x94.png" alt="" width="120px" srcset="">
        </div>
    </nav>

    <main>
        <div id="main">

            <form action="" method="post" id="form_prepare">
                <fieldset>

                    <div id="inputs-user">

                        <div class="form-row">
                            <div class="col-md-2 mb-3">
                                <label>Matrícula</label>

                                <input id="mat" type="number" class="form-control" name="mat" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Nome</label>
                                <input id="nomeinter" type="text" class="form-control" name="nome" oninput="handleInput(event)" required>
                            </div>

                            <div class="col-md-2 mb-3">
                                <label>O.S/S.S</label>
                                <input id="osss" type="number" class="form-control" name="osss" required>
                            </div>

                            <div class="col-md-2 mb-3">
                                <label>TAG</label>
                                <input id="tagequip" type="text" class="form-control" name="tag" oninput="handleInput(event)" required>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label>Motivo:</label>
                                <input id="motivo" type="text" class="form-control" name="motivo" oninput="handleInput(event)" required>
                            </div>

                            <div class="col-md-2 mb-3">
                                <label>Setor:</label>
                                <select id="setor" type="text" class="form-control" name="setor" required>
                                    <option value=""></option>
                                    <option value="Frotas">Frotas</option>
                                    <option value="Mineração">Mineração</option>
                                    <option value="Mecânica">Mecânica</option>
                                    <option value="Elétrica">Elétrica</option>
                                    <option value="Instrumentação">Instrumentação</option>
                                    <option value="Produção">Produção</option>
                                    <option value="Expedição">Expedição</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <div class="card border-light mb-3" id="inputs-produtos">
                    <fieldset>
                        <label>Código: <input style="width: 180px;" id="codigoid" class="form-control" type="text" name="codigo" oninput="handleInput(event)" required /></label>
                        <label>Descrição: <input readonly="true" onclick="myFunction();" style="width: 500px;" id="descid" class="form-control" type="text" name="descricao" oninput="handleInput(event)" required /></label>
                        <label>Quantidade: <input style="width: 140px;" id="qdteid" class="form-control" type="number" name="qdte" required /></label>
                        <label>Und Med.:
                            <select id="undid" style="width: 140px;" class="form-control" type="text" name="und" required>
                                <option value=""></option>
                                <option value="PC">Peças</option>
                                <option value="LT">Litros</option>
                                <option value="M3">M³</option>
                                <option value="MT">Metros</option>
                                <option value="KG">Kilos</option>
                            </select>
                        </label>
                        <!-- bloqUser(); btnEventoAdicionar(); -->
                        <label></i>
                            <button id="btnok" onclick="someBotaoOk();  habilitaBotaoEnviarRa();" class="btn btn-primary" type="submit" name="ok" value="OK" style="margin-bottom: 5px;">
                                Adicionar
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                </svg>
                            </button>
                        </label>
                    </fieldset>
                </div>

            </form>

            <div class="card" id="tabela-produtos">
                <table id="grid" class="table table-striped">
                    <thead class="thead-dark">
                        <tr style="text-align: center;">
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Quntidade</th>
                            <th>Und Med</th>
                            <th>Ação</th>

                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table><!-- /grid -->

            </div>



            <form action="./backend/send.php" method="post" id="form_insert">
                <fieldset style="display: none;"></fieldset>

                <div style="text-align: right; margin: 5px 80px">
                    <label><input class="btn btn-outline-success" id="enviarEmail" style="margin-bottom: 5px;" type="submit" name="cadastrar" value="Enviar R.A" disabled /></label>
                </div>


            </form><!-- /form_insert -->

            <form id="formmatnok" action="./backend/send.php" method="POST">
                <div style="margin-left: 50px; display:none;">
                    <input id="idteste" name="matnok" type="text" required>

                </div>

                <div id="divbtnaoencontrado" style="text-align: right; margin: 5px 80px">
                    <button class="btn btn-info" id="matnao" style="margin-left: 50px;" onclick="concatena();">Material não Encontrado</button>
                </div>
            </form>


        </div>

    </main><!-- /main -->


    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted"><strong>Copyright &copy; 2021 <a href="">PCM – MZBA</a></strong> </span>
        </div>
        <div class="float-right text-muted d-none d-sm-inline">
            Developer: Jonathan Lemos
        </div>
    </footer>

   
</body>

</html>

<script>
    $(document).ready(function() {
        $("input").val("");
        $("select").val("");
        $("#btnok").val("Adicionar");
        $("#enviarEmail").val("Enviar R.A");

    });
</script>



<script>
    $(document).ready(function() {
        validate();
        $('#mat, #nomeinter, #osss, #tagequip, #motivo, #setor, #codigoid, #descid, #qdteid, #undid').change(validate);
    });

    function validate() {
        if ($('#mat').val().length > 0 &&
            $('#nomeinter').val().length > 0 &&
            $('#osss').val().length > '' &&
            $('#tagequip').val().length > 0 &&
            $('#motivo').val().length > 0 &&
            $('#setor').val().length > 0 &&

            $('#codigoid').val().length > 0 &&
            $('#descid').val().length > 0 &&
            $('#qdteid').val() >= 1 &&
            $('#undid').val().length > 0) {
            $("#btnok").prop("disabled", false);
        } else {
            $("#btnok").prop("disabled", true);
        }
    }
</script>