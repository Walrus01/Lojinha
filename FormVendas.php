<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" media="screen" />
    <link rel="shortcut icon" href="assets/images/bag.png">

</head>

<header>

    <?php include "assets/navbar/NavBar.php"; ?>

</header>

<body class="color-primary">

    <form action="ControleVendas.php" method="GET" name="FormVendas" id="FormVendas">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="color-secondary card px-4 py-4 border border-light p-2 rounded-3" data-bs-theme="dark">
                <div class="card-body">
                    <h4 class="color-tertiary card-title mb-3">Venda de Produtos</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="color-primary form-control border border-light p-2" type="number" name="CodProd" id="CodProd" min=1 max=99999 step="0" placeholder="Código do Produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="color-primary form-control border border-light p-2" type="number" name="Quantidade" id="Quantidade" min=1 max=9999 step="0" placeholder="Quantidade">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="color-primary form-control border border-light p-2" type="text" placeholder="Data" name="Data" id="Data" onfocus="(this.type='date')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="color-primary form-control border border-light p-2" type="number" name="CodCli" id="CodCli" placeholder="Código Cliente" min=1 max=999999 step="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="basic-url" class="color-tertiary form-label mt-3">Forma de pagamento:</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="FormPagamento" id="À vista" value="V">
                                    <label class="color-tertiary form-check-label" for="Avista">Vista</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="FormPagamento" id="A prazo" value="P">
                                    <label class="color-tertiary form-check-label" for="Aprazo">Prazo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mt-4">
                                <div class="input-group justify-content-center">
                                    <button class="btn btn-outline-light" type="submit" name="Incluir">Incluir</button>
                                    <button class="btn btn-outline-light" type="reset" name="Limpar">Limpar</button>
                                    <button class="btn btn-outline-light" type="submit" name="Excluir">Excluir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>