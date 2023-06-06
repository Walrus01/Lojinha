<?php

class clsCadastro
{
    private $CodProduto;

    public function setCodProduto($Cod)
    {
        $this->CodProduto = $Cod;
    }

    public function getCodProduto()
    {
        return $this->CodProduto;
    }

    /*-----------------------------------------------------------------------------*/

    private $DescProduto;

    public function setDescProduto($Desc)
    {
        $this->DescProduto = $Desc;
    }

    public function getDescProduto()
    {
        return $this->DescProduto;
    }

    /*-----------------------------------------------------------------------------*/

    private $ValProduto;

    public function setValProduto($Val)
    {
        $this->ValProduto = $Val;
    }

    public function getValProduto()
    {
        return $this->ValProduto;
    }

    /*-----------------------------------------------------------------------------*/

    private $VenctoProduto;

    public function setVenctoProduto($Vec)
    {
        $this->VenctoProduto = $Vec;
    }

    public function getVenctoProduto()
    {
        return $this->VenctoProduto;
    }

    /*-----------------------------------------------------------------------------*/

    private $FormListagem;

    public function setFormListagem($List)
    {
        $this->FormListagem = $List;
    }

    public function getFormListagem()
    {
        return $this->FormListagem;
    }

    /*-----------------------------------------------------------------------------*/

    private $DtInicio;
    private $DtFim;



    
    public function setDtInicio($DtI)
    {
        $this->DtInicio = $DtI;
    }

    public function getDtInicio()
    {
        return $this->DtInicio;
    }

    public function setDtFim($DtF)
    {
        $this->DtFim = $DtF;
    }

    public function getDtFim()
    {
        return $this->DtFim;
    }

    public function Incluir()
    {

        include_once "assets/Conexao.php";

        try {

            $Comando = $conexao->prepare("insert into PRODUTOS (CodProduto,DescProduto,ValProduto,VenctoProduto) values (?,?,?,?)");
            $Comando->bindParam(1, $this->CodProduto);
            $Comando->bindParam(2, $this->DescProduto);
            $Comando->bindParam(3, $this->ValProduto);
            $Comando->bindParam(4, $this->VenctoProduto);

            if ($Comando->execute()) {
                $Retorno = "<body style='background-color:#1e293b;color: white;text-align: center;margin-top: 15%'>
                            <h1>Produto cadastrado com sucesso!</h1>
                            <a href='index.php'><button>Voltar ao Menu</button></a>
                            <a href='FormProdutos.php'><button>Continuar Cadastrando</button></a>
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
            $Comando = $conexao->prepare("delete from PRODUTOS where CodProduto = ?");
            $Comando->bindParam(1, $this->CodProduto);

            if ($Comando->execute()) {
                $Retorno = "<body style='background-color:#1e293b;color: white;text-align: center;margin-top: 15%'>
                            <h1>Produto deletado com sucesso!</h1>
                            <a href='index.php'><button>Voltar ao Menu</button></a>
                            <a href='FormProdutos.php'><button>Continuar Deletando</button></a>
                            </body>";
            }
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }
        return $Retorno;
    }

    public function ListagemOrdem()
    {
        include_once "assets/Conexao.php";

        if ($this->FormListagem == 'C') {

            try {

                $Comando = $conexao->prepare("select CodProduto, DescProduto from PRODUTOS order by CodProduto");
                $Comando->execute();
                $Retorno = $Comando->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $Erro) {
                $Retorno = "Erro " . $Erro->getMessage();
            }
        } elseif ($this->FormListagem == 'D') {
            try {

                $Comando = $conexao->prepare("select CodProduto, DescProduto from PRODUTOS order by DescProduto");
                $Comando->execute();
                $Retorno = $Comando->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $Erro) {
                $Retorno = "Erro " . $Erro->getMessage();
            }
        } else {
            $Retorno = "Selecione uma das opções para que seja feita uma lista ";
        }

        return $Retorno;
    }

    public function ListagemVencto()
    {
        include_once "assets/Conexao.php";

        try {

            $Comando = $conexao->prepare("select * from PRODUTOS where VenctoProduto between ? AND ?");
            $Comando->bindParam(1, $this->DtInicio);
            $Comando->bindParam(2, $this->DtFim);
            $Comando->execute();
            $Retorno = $Comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }

        return $Retorno;
    }
}
