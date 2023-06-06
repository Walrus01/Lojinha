<?php

include_once "clsVendas.php";

$Venda = new clsVendas();

$CodProd    = filter_input(INPUT_GET, "CodProd", FILTER_VALIDATE_INT);
$Quantidade  = filter_input(INPUT_GET, "Quantidade", FILTER_SANITIZE_SPECIAL_CHARS);
$Data      = filter_input(INPUT_GET, "Data");
$CodCli     = filter_input(INPUT_GET, "CodCli", FILTER_VALIDATE_INT);
$FormPagamento    = filter_input(INPUT_GET, "FormPagamento");

$Venda->setCodProd($CodProd);
$Venda->setQuantidade($Quantidade);
$Venda->setData($Data);
$Venda->setCodCli($CodCli);
$Venda->setFormPagamento($FormPagamento);

if (isset($_GET["Cadastrar"])) {

  echo $Venda->Adicionar();
  
} elseif (isset($_GET["Deletar"])) {
  echo $Venda->Deletar();
} elseif (isset($_GET["ListaPV"])) {

  $Dados = $Venda->ListaPV();

  if (empty($Dados)) {
    echo "<script> alert ('Dados não localizados')</script>";
    echo "<script>document.location='FormListaVendaPV.php'</script>";
  } else {

    foreach ($Dados as $Dd) {
      echo "Código Cliente {$Dd['Quantidade']} <br>";
    }
  }
}
