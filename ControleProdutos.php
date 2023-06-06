<?php

include_once "clsProdutos.php";

$Cad = new clsCadastro();

$CodProduto     = filter_input(INPUT_GET, "CodProduto", FILTER_VALIDATE_INT);
$DescProduto    = filter_input(INPUT_GET, "DescProduto", FILTER_SANITIZE_SPECIAL_CHARS);
$ValProduto     = filter_input(INPUT_GET, "ValProduto");
$VenctoProduto  = filter_input(INPUT_GET, "VenctoProduto");
$FormListagem   = filter_input(INPUT_GET, "FormListagem");
$DtInicio        = filter_input(INPUT_GET, "DtInicio");
$DtFim           = filter_input(INPUT_GET, "DtFim");

$DtInicio = date('Y-m-d', strtotime(str_replace('/', '-', $DtInicio)));
$DtFim = date('Y-m-d', strtotime(str_replace('/', '-', $DtFim)));

$Cad->setCodProduto($CodProduto);
$Cad->setDescProduto($DescProduto);
$Cad->setValProduto($ValProduto);
$Cad->setVenctoProduto($VenctoProduto);
$Cad->setFormListagem($FormListagem);
$Cad->setDtInicio($DtInicio);
$Cad->setDtFim($DtFim);

if (isset($_GET["Incluir"])) {

    echo $Cad->Incluir();
} elseif (isset($_GET["Excluir"])) {

    echo $Cad->Excluir();
} elseif (isset($_GET["ListaOrdem"])) {

    $Dados = $Cad->ListagemOrdem();

    if (empty($Dados)) {

        echo "<script> alert ('Dados não localizados')</script>";
        echo "<script>document.location='FormListaOrdem.php'</script>";
    } else {

        include "assets/navbar/NavBar.php";

        echo "<div class='container mt-5'>";
        echo "<div class='row justify-content-center'>";
        echo "<div class='col-md-5'>";
        echo "<table class='table table-primary table-striped'>";
        echo "<thead class='thead-dark'><tr><th>Código</th><th>Descrição</th></tr></thead>";
        echo "<tbody>";

        foreach ($Dados as $Dd) {
            echo "<tr>";
            echo "<td>{$Dd['CodProduto']}</td>";
            echo "<td>{$Dd['DescProduto']}</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>";
        echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous'></script>";
    }
} elseif (isset($_GET["ListaVencto"])) {

    $Dados = $Cad->ListagemVencto();

    if (empty($Dados)) {
        echo "<script> alert ('Dados não localizados')</script>";
        echo "<script>document.location='FormListaVencto.php'</script>";
    } else {

        include "assets/navbar/NavBar.php";

        echo "<div class='container mt-5'>";
        echo "<div class='row justify-content-center'>";
        echo "<div class='col-md-5'>";
        echo "<table class='table table-primary table-striped'>";
        echo "<thead class='thead-dark'><tr><th>Código</th><th>Descrição</th><th>Valor</th><th>Vencimento</th></tr></thead>";
        echo "<tbody>";

        foreach ($Dados as $Dd) {
            echo "<tr>";
            echo "<td>{$Dd['CodProduto']}</td>";
            echo "<td>{$Dd['DescProduto']}</td>";
            echo "<td>{$Dd['ValProduto']}</td>";
            echo "<td>{$Dd['VenctoProduto']}</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>";
        echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous'></script>";
    }
}
