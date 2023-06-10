<?php

class clsVendas
{
    private $CodCliente;

    public function setCodCliente($Cli)
    {
        $this->CodCliente = $Cli;
    }

    public function getCodCliente()
    {
        return $this->CodCliente;
    }

    /*-----------------------------------------------------------------------------*/

    private $CodProduto;

    public function setCodProduto($Pro)
    {
        $this->CodProduto = $Pro;
    }

    public function getCodProduto()
    {
        return $this->CodProduto;
    }

    /*-----------------------------------------------------------------------------*/

    private $QuantVenda;

    public function setQuantVenda($Qntd)
    {
        $this->QuantVenda = $Qntd;
    }

    public function getQuantVenda()
    {
        return $this->QuantVenda;
    }

    /*-----------------------------------------------------------------------------*/

    private $DataVenda;

    public function setDataVenda($Dt)
    {
        $this->DataVenda = $Dt;
    }

    public function getDataVenda()
    {
        return $this->DataVenda;
    }

    /*-----------------------------------------------------------------------------*/

    private $FormaPagto;

    public function setFormaPagto($Pgto)
    {
        $this->FormaPagto = $Pgto;
    }

    public function getFormaPagto()
    {
        return $this->FormaPagto;
    }

    /*-----------------------------------------------------------------------------*/

    private $FormListagemPV;

    public function setFormListagemPV($FPgto)
    {
        $this->FormListagemPV = $FPgto;
    }

    public function getFormListagemPV()
    {
        return $this->FormListagemPV;
    }

    /*-----------------------------------------------------------------------------*/

    public function Incluir()
    {

        include_once "assets/Conexao.php";

        try {
            $Comando = $conexao->prepare("insert into VENDAS (CodCliente,CodProduto,QuantVenda,DataVenda,FormaPagto) values (?,?,?,?,?)");
            $Comando->bindParam(1, $this->CodCliente);
            $Comando->bindParam(2, $this->CodProduto);
            $Comando->bindParam(3, $this->QuantVenda);
            $Comando->bindParam(4, $this->DataVenda);
            $Comando->bindParam(5, $this->FormaPagto);

            if ($Comando->execute()) {
                switch ($this->FormaPagto) {
                    case 'V':
                        $this->FormaPagto = "À Vista";
                        break;
                    case 'P':
                        $this->FormaPagto = "À Prazo";
                        break;
                }

                $Retorno =  "<body style='background-color:#1e293b;color: white;text-align: center;margin-top: 15%'>
                <h1>Venda cadastrada com sucesso!</h1>
                <a href='index.php'><button>Voltar ao Menu</button></a>
                <a href='FormProdutos.php'><button>Continuar Vendendo</button></a>
                </body>";
            }
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }
        return $Retorno;
    }

    public function Excluir()
    {
        include_once "assets/Conexao.php";

        try {
            $Comando = $conexao->prepare("delete from VENDAS where CodProduto = ? and CodCliente = ?");
            $Comando->bindParam(1, $this->CodProduto);
            $Comando->bindParam(2, $this->CodCliente);

            if ($Comando->execute()) {
                $Retorno = "<body style='background-color:#1e293b;color: white;text-align: center;margin-top: 15%'>
                            <h1>Venda deletada com sucesso!</h1>
                            <a href='index.php'><button>Voltar ao Menu</button></a>
                            <a href='FormProdutos.php'><button>Continuar Deletando</button></a>
                            </body>";
            }
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }
        return $Retorno;
    }

    public function ListaVendaPV()
    {
        include_once "assets/Conexao.php";

        try {

            $Comando = $conexao->prepare("select VENDAS.CodVenda, VENDAS.CodCliente, CLIENTES.NomeCliente, VENDAS.CodProduto, PRODUTOS.DescProduto, VENDAS.QuantVenda, VENDAS.DataVenda, VENDAS.FormaPagto
                                        from VENDAS
                                        INNER JOIN PRODUTOS on VENDAS.CodProduto = PRODUTOS.CodProduto
                                        INNER JOIN CLIENTES on VENDAS.CodCliente = CLIENTES.CodCliente
                                        WHERE FormaPagto = ?
                                        order by CodVenda;");
            $Comando->bindParam(1, $this->FormListagemPV);
            $Comando->execute();
            $Retorno = $Comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }

        return $Retorno;
    }

    public function ListaVendaGeral()
    {
        include_once "assets/Conexao.php";

        try {

            $Comando = $conexao->prepare("select VENDAS.CodVenda, VENDAS.CodCliente, CLIENTES.NomeCliente, VENDAS.CodProduto, PRODUTOS.DescProduto, VENDAS.QuantVenda, VENDAS.DataVenda, VENDAS.FormaPagto
                                        from VENDAS
                                        INNER JOIN PRODUTOS on VENDAS.CodProduto = PRODUTOS.CodProduto
                                        INNER JOIN CLIENTES on VENDAS.CodCliente = CLIENTES.CodCliente
                                        order by CodVenda;");
            $Comando->execute();
            $Retorno = $Comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }

        return $Retorno;
    }
}
