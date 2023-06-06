<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="form.css" media="screen" />
</head>

<body>
<?php include "NavBar.php"; ?>
    <form action="ControleVendas.php" method="GET" name="FormVen" id="FormVen">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="card px-1 py-4">
                <div class="card-body">
                    <h4 class="card-title mb-3">Venda de Produtos</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="number" name="CodProd" id="CodProd" min=1 max=99999 step="0" placeholder="Código do Produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="number" name="Quantidade" id="Quantidade" min=1 max=9999 step="0" placeholder="Quantidade"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="text" placeholder="Data" name="Data" id="Data" onfocus="(this.type='date')"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="number" name="CodCli" id="CodCli" placeholder="Código Cliente" min=1 max=999999 step="0"> </div><br>
                            </div>
                        </div>
                    </div>
                    <label for="basic-url" class="form-label">Forma de pagamento:</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="FormPagamento" id="À vista" value="V">
                                    <label class="form-check-label" for="Avista">Vista</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="FormPagamento" id="A prazo" value="P">
                                    <label class="form-check-label" for="Aprazo">Prazo</label>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <button class="btn btn-success" type="submit" name="Cadastrar">Cadastrar</button>
                    <button class="btn btn-warning" type="reset" name="Limpar">Limpar</button>
                    <button class="btn btn-danger" type="submit" name="Deletar">Deletar</button>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>