<?php

include_once "clsVendas.php";

$Venda = new clsVendas();

$CodCliente     = filter_input(INPUT_GET, "CodCliente", FILTER_VALIDATE_INT);
$CodProduto     = filter_input(INPUT_GET, "CodProduto", FILTER_VALIDATE_INT);
$QuantVenda     = filter_input(INPUT_GET, "QuantVenda", FILTER_VALIDATE_INT);
$DataVenda      = filter_input(INPUT_GET, "DataVenda");
$FormaPagto     = filter_input(INPUT_GET, "FormaPagto");
$FormListagemPV = filter_input(INPUT_GET, "FormListagemPV");

$Venda->setCodCliente($CodCliente);
$Venda->setCodProduto($CodProduto);
$Venda->setQuantVenda($QuantVenda);
$Venda->setDataVenda($DataVenda);
$Venda->setFormaPagto($FormaPagto);
$Venda->setFormListagemPV($FormListagemPV);

if (isset($_GET["Incluir"])) {

  echo $Venda->Incluir();
} elseif (isset($_GET["Excluir"])) {

  echo $Venda->Excluir();
} elseif (isset($_GET["ListaPV"])) {

  $Dados = $Venda->ListaPV();

  if (empty($Dados)) {

    echo "<script> alert ('Dados não localizados')</script>";
    echo "<script>document.location='FormListaVendaPV.php'</script>";
  } else {

    include "assets/navbar/NavBar.php";

    echo "<div class='container mt-5'>";
    echo "<div class='row justify-content-center'>";
    echo "<div class='col-md-9'>";
    echo "<table class='table table-primary table-striped' style='width: 800px;'>";
    echo "<thead class='thead-dark'><tr><th>Código venda</th><th>Código Cliente</th><th>Código Produto</th><th>Quantidade</th><th>Data</th><th>Forma de Pagamento</th></tr></thead>";
    echo "<tbody>";

    foreach ($Dados as $Dd) {
      echo "<tr>";
      echo "<td>{$Dd['CodVenda']}</td>";
      echo "<td>{$Dd['CodCliente']}</td>";
      echo "<td>{$Dd['CodProduto']}</td>";
      echo "<td>{$Dd['QuantVenda']}</td>";
      echo "<td>{$Dd['DataVenda']}</td>";
      echo "<td>{$Dd['FormaPagto']}</td>";
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
} else {

  $Dados = $Venda->ListaVendaGeral();

  if (empty($Dados)) {

    echo "<script> alert ('Dados não localizados')</script>";
    echo "<script>document.location='FormListaVendaPV.php'</script>";
  } else {

    include "assets/navbar/NavBar.php";

    echo "<div class='container mt-5'>";
    echo "<div class='row justify-content-center'>";
    echo "<div class='col-md-12'>";
    echo "<table class='table table-primary table-striped' style='width: 1150px;'>";
    echo "<thead class='thead-dark'><tr><th>Código Venda</th><th>Código Cliente</th><th>Código Produto</th><th>Descrição Produto</th><th>Quantidade</th><th>Data</th><th>Forma de Pagamento</th></tr></thead>";
    echo "<tbody>";

    foreach ($Dados as $Dd) {
      echo "<tr>";
      echo "<td>{$Dd['CodVenda']}</td>";
      echo "<td>{$Dd['CodCliente']}</td>";
      echo "<td>{$Dd['CodProduto']}</td>";
      echo "<td>{$Dd['DescProduto']}</td>";
      echo "<td>{$Dd['QuantVenda']}</td>";
      echo "<td>{$Dd['DataVenda']}</td>";
      echo "<td>{$Dd['FormaPagto']}</td>";
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
