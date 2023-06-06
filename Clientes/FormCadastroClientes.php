<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="form.css" media="screen" />
</head>

<body>

<?php include "NavBar.php"; ?>
  
    <form action="ControleClientes.php" method="GET" name="FormCad" id="FormCad">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="card px-1 py-4">
                <div class="card-body">
                    <h4 class="card-title mb-3">Cadastro de Clientes</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="number" name="CodCli" id="CodCli" min=1 max=99999 step="0" placeholder="Código do Cliente" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="text" name="NomeCli" id="NomeCli" placeholder="Nome Cliente" maxlength="100"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="number" name="CelularCli" id="CelularCli" min=100000000 max=999999999 step="0" placeholder="Celular"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> <input class="form-control" type="number" placeholder="CPF" name="CPF" id="CPF" min=10000000000 max=99999999999 step="0"> </div><br>
                            </div>
                        </div>
                    </div>
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