CREATE DATABASE Lojinha;

USE Lojinha;

-- ------------------------------------------------------------------------------------------------

CREATE TABLE PRODUTOS
(

CodProduto			INT(5) PRIMARY KEY,
DescProduto			VARCHAR(50),
ValProduto			VARCHAR(50),
VenctoProduto		DATE

);

INSERT INTO PRODUTOS VALUES

    (1, 'Wine - Rioja Campo Viejo', '$7.01', '2023/08/09'),
    (2, 'Compound - Raspberry', '$16.27', '2023/07/16'),
    (3, 'Pineapple - Regular', '$25.62', '2023/08/12'),
    (4, 'Sprouts - Brussel', '$20.97', '2023/06/18'),
    (5, 'Energy - Boo - Koo', '$19.50', '2023/07/10'),
    (6, 'Mushroom - White Button', '$25.43', '2023/08/14'),
    (7, 'Puree - Raspberry', '$28.72', '2023/07/27'),
    (8, 'Miso - Soy Bean Paste', '$29.16', '2023/06/01'),
    (9, 'Yukon Jack', '$16.12', '2023/08/04'),
    (10, 'Yogurt - Strawberry, 175 Gr', '$15.81', '2023/06/05'),
    (11, 'Icecream - Dstk Strw Chseck', '$18.65', '2023/07/18'),
    (12, 'Potatoes - Peeled', '$13.98', '2023/06/24'),
    (13, 'Sprite, Diet - 355ml', '$19.43', '2023/05/20'),
    (14, 'Wine - Mondavi Coastal Private', '$17.67', '2023/06/16'),
    (15, 'Bouq All Italian - Primerba', '$1.14', '2023/08/15'),
    (16, 'Pepper - Black, Whole', '$28.90', '2023/07/15'),
    (17, 'Cheese - Pont Couvert', '$3.92', '2023/08/04'),
    (18, 'Shrimp - 150 - 250', '$4.94', '2023/07/09'),
    (19, 'Pheasants - Whole', '$21.31', '2023/07/06'),
    (20, 'Coconut Milk - Unsweetened', '$23.61', '2023/07/06'),
    (21, 'Flour - Corn, Fine', '$15.27', '2023/06/01'),
    (22, 'Beef - Ground Medium', '$9.30', '2023/06/26'),
    (23, 'Seedlings - Clamshell', '$21.41', '2023/05/29'),
    (24, 'Bay Leaf Fresh', '$8.65', '2023/08/03'),
    (25, 'Clams - Canned', '$1.60', '2023/06/12'),
    (26, 'Latex Rubber Gloves Size 9', '$21.12', '2023/05/18'),
    (27, 'Garlic Powder', '$5.46', '2023/08/08'),
    (28, 'Doilies - 12, Paper', '$9.06', '2023/07/05'),
    (29, 'Crab Brie In Phyllo', '$26.81', '2023/06/28'),
    (30, 'Pepper - Yellow Bell', '$17.57', '2023/06/07'),
    (31, 'Bread - Sticks, Thin, Plain', '$6.84', '2023/06/05'),
    (32, 'Sauce - Roasted Red Pepper', '$26.77', '2023/07/11'),
    (33, 'Cheese - Bakers Cream Cheese', '$14.19', '2023/06/21'),
    (34, 'Langers - Cranberry Cocktail', '$12.91', '2023/08/02'),
    (35, 'Sour Puss - Tangerine', '$29.60', '2023/06/30'),
    (36, 'Pasta - Rotini, Dry', '$29.24', '2023/06/30'),
    (37, 'Oil - Pumpkinseed', '$20.60', '2023/08/13'),
    (38, 'Soup Campbells - Tomato Bisque', '$19.67', '2023/06/26'),
    (39, 'Cranberries - Fresh', '$3.12', '2023/07/31'),
    (40, 'Juice - V8, Tomato', '$17.25', '2023/06/12'),
    (41, 'Tomatoes - Grape', '$12.83', '2023/08/10'),
    (42, 'Squeeze Bottle', '$14.94', '2023/06/10'),
    (43, 'Sterno - Chafing Dish Fuel', '$10.91', '2023/06/09'),
    (44, 'Veal - Kidney', '$15.25', '2023/07/20'),
    (45, 'Roe - Flying Fish', '$25.71', '2023/05/29'),
    (46, 'Beer - True North Lager', '$14.20', '2023/06/01'),
    (47, 'Lettuce - Baby Salad Greens', '$15.72', '2023/06/20'),
    (48, 'Longos - Chicken Caeser Salad', '$9.25', '2023/06/17'),
    (49, 'Juice - Orange', '$14.17', '2023/05/31'),
    (50, 'Wine - Penfolds Koonuga Hill', '$6.25', '2023/08/13');

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

CodVenda			INT(10) auto_increment PRIMARY KEY,
CodCliente			INT(10),
CodProduto			INT(5),
QuantVenda			INT(4),
DataVenda			DATE,
FormaPagto			CHAR(1)

);

INSERT INTO VENDAS VALUES


  (1, 122, 38, 6, '2023/05/13', 'P'),
 (2, 171, 16, 16, '2023/05/02', 'V'),
 (3, 151, 44, 66, '2023/05/24', 'P'),
 (4, 107, 13, 59, '2023/05/27', 'P'),
 (5, 120, 18, 26, '2023/05/12', 'P'),
 (6, 199, 6, 34, '2023/05/21', 'P'),
 (7, 174, 26, 88, '2023/04/29', 'P'),
 (8, 141, 8, 43, '2023/05/06', 'P'),
 (9, 174, 34, 41, '2023/05/31', 'P'),
 (10, 139, 46, 21, '2023/05/26', 'P'),
 (11, 110, 50, 27, '2023/05/29', 'V'),
 (12, 171, 45, 32, '2023/04/20', 'V'),
 (13, 196, 45, 92, '2023/05/15', 'V'),
 (14, 167, 23, 100, '2023/05/24', 'V'),
 (15, 152, 35, 36, '2023/05/20', 'V'),
 (16, 198, 10, 38, '2023/05/17', 'P'),
 (17, 138, 27, 55, '2023/04/28', 'P'),
 (18, 132, 17, 15, '2023/05/10', 'V'),
 (19, 109, 26, 84, '2023/05/29', 'P'),
 (20, 128, 20, 86, '2023/05/28', 'P'),
 (21, 109, 16, 49, '2023/05/08', 'V'),
 (22, 145, 47, 84, '2023/05/30', 'P'),
 (23, 133, 25, 5, '2023/05/09', 'P'),
 (24, 168, 13, 36, '2023/05/09', 'V'),
 (25, 193, 9, 98, '2023/06/01', 'V'),
 (26, 134, 16, 68, '2023/04/20', 'V'),
 (27, 194, 39, 9, '2023/04/30', 'V'),
 (28, 112, 46, 75, '2023/05/31', 'P'),
 (29, 108, 28, 30, '2023/05/03', 'V'),
 (30, 151, 46, 31, '2023/05/21', 'V'),
 (31, 175, 2, 36, '2023/05/14', 'P'),
 (32, 179, 48, 23, '2023/05/30', 'P'),
 (33, 145, 39, 100, '2023/06/03', 'P'),
 (34, 140, 35, 68, '2023/05/10', 'P'),
 (35, 140, 44, 30, '2023/05/26', 'V'),
 (36, 189, 30, 16, '2023/05/02', 'P'),
 (37, 152, 3, 70, '2023/05/02', 'V'),
 (38, 160, 45, 4, '2023/04/19', 'P'),
 (39, 179, 37, 85, '2023/05/15', 'P'),
 (40, 104, 26, 52, '2023/04/20', 'V'),
 (41, 183, 13, 26, '2023/04/25', 'P'),
 (42, 189, 47, 33, '2023/04/26', 'V'),
 (43, 190, 17, 80, '2023/04/21', 'P'),
 (44, 197, 38, 50, '2023/04/22', 'P'),
 (45, 137, 33, 72, '2023/05/03', 'V'),
 (46, 181, 35, 35, '2023/04/25', 'V'),
 (47, 163, 33, 83, '2023/05/05', 'V'),
 (48, 113, 46, 76, '2023/04/23', 'V'),
 (49, 200, 18, 90, '2023/05/22', 'V'),
 (50, 178, 15, 93, '2023/04/25', 'V');

SELECT * FROM VENDAS;
DROP TABLE VENDAS;

SELECT * FROM VENDAS
WHERE FormaPagto = 'P';

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

