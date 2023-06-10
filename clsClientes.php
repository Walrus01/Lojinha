<?php

    class clsClientes 
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

        private $NomeCliente;

        public function setNomeCliente($NomeCli)
        {
            $this->NomeCliente = $NomeCli;
        }

        public function getNomeCliente()
        {
            return $this->NomeCliente;
        }

    /*-----------------------------------------------------------------------------*/

        private $CelCliente;

        public function setCelCliente($CelCli)
        {
            $this->CelCliente = $CelCli;
        }

        public function getCelCliente()
        {
            return $this->CelCliente;
        }

    /*-----------------------------------------------------------------------------*/

        private $CPFCliente;

        public function setCPFCliente($CPFCli)
        {
            $this->CPFCliente = $CPFCli;
        }
        
        public function getCPFCliente()
        {
            return $this->CPFCliente;
        }

    /*-----------------------------------------------------------------------------*/

    public function Incluir()
    {

        include_once "assets/Conexao.php";

        try {

            $Comando = $conexao->prepare("insert into CLIENTES (CodCliente,NomeCliente,CelCliente,CPFCliente) values (?,?,?,?)");
            $Comando->bindParam(1, $this->CodCliente);
            $Comando->bindParam(2, $this->NomeCliente);
            $Comando->bindParam(3, $this->CelCliente);
            $Comando->bindParam(4, $this->CPFCliente);

            if ($Comando->execute()) {
                $Retorno = "<body style='background-color:#1e293b;color: white;text-align: center;margin-top: 15%'>
                            <h1>Cliente cadastrado com sucesso!</h1>
                            <a href='index.php'><button>Voltar ao Menu</button></a>
                            <a href='FormProdutos.php'><button>Continuar Cadastrando</button></a>
                            </body>";
            }
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }
        return $Retorno;
    }

    /*-----------------------------------------------------------------------------*/

    public function Excluir()
    {
        include_once "assets/Conexao.php";

        try {
            $Comando = $conexao->prepare("delete from CLIENTES where CodCliente = ?");
            $Comando->bindParam(1, $this->CodCliente);

            if ($Comando->execute()) {
                $Retorno = "<body style='background-color:#1e293b;color: white;text-align: center;margin-top: 15%'>
                            <h1>Cliente deletado com sucesso!</h1>
                            <a href='index.php'><button>Voltar ao Menu</button></a>
                            <a href='FormProdutos.php'><button>Continuar Deletando</button></a>
                            </body>";
            }
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }
        return $Retorno;
    }

    /*-----------------------------------------------------------------------------*/

    public function ListaGeralClientes()
    {
        include_once "assets/Conexao.php";

        try {

            $Comando = $conexao->prepare("select * from CLIENTES order by CodCliente");
            $Comando->execute();
            $Retorno = $Comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $Erro) {
            $Retorno = "Erro " . $Erro->getMessage();
        }

        return $Retorno;
    }
    }