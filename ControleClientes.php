<?php

    include_once "clsClientes";

    $Cli = new clsClientes();

$CodCliente     = filter_input(INPUT_GET, "CodCliente", FILTER_VALIDATE_INT);
$NomeCliente    = filter_input(INPUT_GET, "NomeCliente", FILTER_SANITIZE_SPECIAL_CHARS);
$CelCliente     = filter_input(INPUT_GET, "CelCliente");
$VenctoProduto  = filter_input(INPUT_GET, "VenctoProduto");