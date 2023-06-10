<?php

    include_once "clsClientes.php";

    $Cli = new clsClientes();

$CodCliente     = filter_input(INPUT_GET, "CodCliente", FILTER_VALIDATE_INT);
$NomeCliente    = filter_input(INPUT_GET, "NomeCliente", FILTER_SANITIZE_SPECIAL_CHARS);
$CelCliente     = filter_input(INPUT_GET, "CelCliente");
$CPFCliente     = filter_input(INPUT_GET, "CPFCliente");

$Cli->setCodCliente($CodCliente);
$Cli->setNomeCliente($NomeCliente);
$Cli->setCelCliente($CelCliente);
$Cli->setCPFCliente($CPFCliente);

if (isset($_GET["Incluir"])) {

    echo $Cli->Incluir();

} elseif (isset($_GET["Excluir"])) {

    echo $Cli->Excluir();

} else {

    $Dados = $Cli->ListaGeralClientes();

    if (empty($Dados)) {
        echo "<script> alert ('Dados não localizados')</script>";
        echo "<script>document.location='FormListaVencto.php'</script>";
    } else {

        include "assets/navbar/NavBar.php";

        echo "<div class='container mt-5'>";
        echo "<div class='row justify-content-center'>";
        echo "<div class='col-md-5'>";
        echo "<table class='table table-primary table-striped'>";
        echo "<thead class='thead-dark'><tr><th>Código</th><th>Nome</th><th>Celular</th><th>CPF</th></tr></thead>";
        echo "<tbody>";

        foreach ($Dados as $Dd) {
            echo "<tr>";
            echo "<td>{$Dd['CodCliente']}</td>";
            echo "<td>{$Dd['NomeCliente']}</td>";
            echo "<td>{$Dd['CelCliente']}</td>";
            echo "<td>{$Dd['CPFCliente']}</td>";
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

