<?php

class clsVendas
{
    private $CodProd;
    private $Quantidade;
    private $Data;
    private $CodCli;
    private $FormPagamento;

    public function setCodProd($Cod)
    {
        $this->CodProd = $Cod;
    }

    public function getCodProd()
    {
        return $this->CodProd;
    }

    public function setQuantidade($Qntd)
    {
        $this->Quantidade = $Qntd;
    }

    public function getQuantidade()
    {
        return $this->Quantidade;
    }

    public function setData($Dt)
    {
        $this->Data = $Dt;
    }

    public function getData()
    {
        return $this->Data;
    }

    public function setCodCli($Cli)
    {
        $this->CodCli = $Cli;
    }

    public function getCodCli()
    {
        return $this->CodCli;
    }

    public function setFormPagamento($Pgmto)
    {
        $this->FormPagamento = $Pgmto;
    }

    public function getFormPagamento()
    {
        return $this->FormPagamento;
    }

    public function Adicionar()
    {

        include_once "Conexao.php";

        try {
            $Comando = $conexao->prepare("insert into VENDAS (CodProd,Quantidade,DataVenda,CodCli,FormPagamento) values (?,?,?,?,?)");
            $Comando->bindParam(1, $this->CodProd);
            $Comando->bindParam(2, $this->Quantidade);
            $Comando->bindParam(3, $this->Data);
            $Comando->bindParam(4, $this->CodCli);
            $Comando->bindParam(5, $this->FormPagamento);

            if ($Comando->execute()) {
                switch ($this->FormPagamento) {
                    case 'V':
                        $this->FormPagamento = "À Vista";
                        break;
                    case 'P':
                        $this->FormPagamento = "À Prazo";
                        break;
                }

                $Retorno = "Gravação com sucesso <br><br>

                Código da Venda:  <br>
                Código do Produto: "  . $this->getCodProd() . "<br>
                Quantidade: "         . $this->getQuantidade() . "<br>
                Data: "               . $this->getData() . "<br>
                Código Cliente: "     . $this->getCodCli() . "<br>
                Forma de Pagamento: " . $this->getFormPagamento();
            }
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }
        return $Retorno;
    }

    public function Deletar()
    {
        include_once "Conexao.php";

        try {
            $Comando = $conexao->prepare("delete * from VENDAS where CodProd = ?");
            $Comando->bindParam(1, $this->CodProd);

            if ($Comando->execute()) {
                $Retorno = "Deletado com sucesso";
            }
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }
        return $Retorno;
    }

    public function ListaPV()
    {
        include_once "Conexao.php";

        if ($this->FormPagamento == 'V') {

            try {

                $Comando = $conexao->prepare("select * from VENDAS order by CodVendas where FormPagamento = ?");
                $Comando->bindParam(1, $this->FormPagamento);
                $Comando->execute();
                $Retorno = $Comando->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $Erro) {
                $Retorno = "Erro " . $Erro->getMessage();
            }
        } elseif ($this->FormPagamento == 'P') {
            try {

                $Comando = $conexao->prepare("select * from VENDAS order by CodVendas where FormPagamento = ?");
                $Comando->bindParam(1, $this->FormPagamento);
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
}
