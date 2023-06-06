CREATE DATABASE Lojinha;

USE Lojinha;

-- ------------------------------------------------------------------------------------------------

CREATE TABLE PRODUTOS
(

CodProduto			INT(5) PRIMARY KEY,
DescProduto			VARCHAR(40),
ValProduto			DECIMAL(7,2),
VenctoProduto		DATE

);

INSERT INTO PRODUTOS VALUES

    (1, 'Hélio de Almeida', '300.59', STR_TO_DATE('05/10/2005','%d/%m/%Y')),
    (2,'Nícolas Fernandes', '220', STR_TO_DATE('05/06/2001','%d/%m/%Y')),
    (3,'Natália Fernandes', '59.90', STR_TO_DATE('12/8/2005','%d/%m/%Y')),
    (4,'Rosangela Raquel', '101', STR_TO_DATE('30/05/2006','%d/%m/%Y')),
    (5,'Simone Fernandes', '1', STR_TO_DATE('15/4/2007','%d/%m/%Y'));

SELECT * FROM PRODUTOS;
DROP TABLE PRODUTOS;

SELECT CodProduto, DescProduto FROM PRODUTOS
ORDER BY CodProduto;

SELECT CodProduto, DescProduto FROM PRODUTOS
ORDER BY DescProduto;

SELECT * FROM PRODUTOS
WHERE VenctoProduto BETWEEN '2005-10-01' AND '2005-10-10';

-- ------------------------------------------------------------------------------------------------

CREATE TABLE VENDAS
(

CodVendas			INT(6) auto_increment PRIMARY KEY,
CodProd				INT(5),
Quantidade			INT(4),
DataVenda			date,
CodCli				INT(6),
FormPagamento		CHAR(1)

);

INSERT INTO VENDAS VALUES

    (DEFAULT,1, 10, STR_TO_DATE('05/10/2005','%d/%m/%Y'), 5, 'P'),
    (DEFAULT,2, 20, STR_TO_DATE('05/06/2001','%d/%m/%Y'), 4, 'V'),
    (DEFAULT,3, 45,STR_TO_DATE('12/8/2005','%d/%m/%Y'), 3, 'P'),
    (DEFAULT,4, 70,STR_TO_DATE('30/05/2006','%d/%m/%Y'), 2, 'V'),
    (DEFAULT,5, 5, STR_TO_DATE('15/4/2007','%d/%m/%Y'), 1, 'V');

SELECT * FROM VENDAS;

SELECT * FROM VENDAS
WHERE FormPagamento = 'P';

SELECT * FROM VENDAS
WHERE FormPagamento = 'V';

-- ------------------------------------------------------------------------------------------------

CREATE TABLE CLIENTES
(

CodCli				INT(5) PRIMARY KEY,
NomeCli				VARCHAR(100),
CelularCli			INT(11),
CPF					INT(11)

);

INSERT INTO CLIENTES VALUES

	(1,'Geraldo Mendes', 11999989999, 67543286711),
    (2,'Jailson Mengueira', 11999889999, 89736249654),
    (3, 'Pedro Henrique', 11985675628, 57689034565),
    (4, 'Caio da Silva', 11985675628, 89736249654),
    (5, 'Henrique Junior', 11999989999, 57689034565);

SELECT * FROM CLIENTES;

SELECT VENDAS.CodProd, CLIENTES.CodCli, PRODUTOS.Descricao, VENDAS.Quantidade, VENDAS.DataVenda, VENDAS.FormPagamento
	from VENDAS
    INNER JOIN PRODUTOS on VENDAS.CodProd = PRODUTOS.CodProd
    INNER JOIN CLIENTES on VENDAS.CodCli = CLIENTES.CodCli
    where FormPagamento = "V";

