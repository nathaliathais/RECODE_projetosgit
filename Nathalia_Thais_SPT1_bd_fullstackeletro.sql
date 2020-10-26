CREATE DATABASE fseletro;

CREATE TABLE produtos (
`idproduto` INT NOT NULL auto_increment,
`categoria` VARCHAR(45) NOT NULL,
`descricao` VARCHAR(250) NOT NULL,
`preco` DECIMAL(8,2) NULL,
`precofinal` DECIMAL(8,2) NULL,
`nomeimg` VARCHAR(255),
PRIMARY KEY (`idproduto`)
);

INSERT INTO produtos (`categoria`,`descricao`,`preco`,`precofinal`, `nomeimg`)
VALUES  ('geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', '4199.99', '3389.99', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/geladeira.jpg'),      
        ('geladeira', 'Geladeira/Refrigerador Electrolux Frost Free Inox - French Door 579L', '5949.99', '4949.10', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/geladeira_2.png'),
        ('geladeira', 'Geladeira Brastemp Frost Free Duplex 500 litros Branca com Turbo Control 110V', '4068.10',  '3068.10', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/geladeira_3.png'),
        ('fogoes', 'Fogão de Piso 4 Bocas Cinza Brastemp - Bivolt', '1900.00', '990.00', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/fogao.jpg'),
        ('fogoes', 'Fogão Electrolux 4 Bocas 52LBU Vidro Interno Removível – Branco', ' 1000.00', '809.10', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/fogao_2.png'),
        ('microondas', 'Microondas Philco PMS24 20 Litros', '499.00', '399.00', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/microondas1.png'), 
        ('microondas', 'Microondas Philco PME25 25 Litros', '625.10', '499.99', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/microondas2.png'),
        ('microondas', 'Microondas Brastemp Espelhado Grill 32 Litros - BMG45 110v', '999.99', '849.99', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/microondas3.png'),
        ('maquina de lavar', 'Máquina de lavar Brastemp - 15 kg', '2709.00', '2103.66', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/lavadora_roupa.jpg'),
        ('maquina de lavar', 'Máquina de lavar Consul - 10 kg', '2590.66', '2100.00', 'file:///C:/Users/natha/Desktop/Nathalia/Recode/Projeto%20Full%20Stack%20Eletro/JavaScript_Nathalia_Thais_SPT1_Projeto%20site%20Full%20Stack%20Eletro/imagens/maquina_consul.png');

CREATE TABLE pedidos (
`idcliente` INT NOT NULL auto_increment,
`nomedocliente` VARCHAR(45) NOT NULL,
`endereço` VARCHAR(60) NOT NULL,
`telefone` VARCHAR(9) NOT NULL,
`nomedoproduto` VARCHAR(50) NOT NULL,
`valorunitario` DECIMAL NOT NULL,
`quantidade` INT NOT NULL,
`valortotal` DECIMAL NOT NULL, 
PRIMARY KEY (`idcliente`)           
);

INSERT INTO pedidos (`nomedocliente`,`endereço`,`telefone`,`nomedoproduto`, `valorunitario`, `quantidade`, `valortotal`)
VALUES  ('Elisabeth', 'Rua Santos Dumont, nº 301 - Alto Da Boa Vista, São Paulo', '1111-1111', 'Geladeira', '3068.10','2','6136.20'), 
        ('Mikkel', 'Rua vinte e cinco de março, nº1540 - Centro, São Paulo', '2222-2222', 'Fogão', '809.10', '1', '809.10'),
        ('Hannah','Rua Gato Cinzento, nº 780 - Vila Urupês, São Paulo', '3333-3333','Microondas','399.00','1','399.00'), 
        ('Magnus','Rua Sete de Setembro, nº 796 - Jardim Iraí , São Paulo', '4444-4444','Lava-roupas','2103.66','2','4207.32'),  
        ('Katarina','Rua das Rosas, nº1986 - Mirandópolis, São Paulo', '5555-5555','Lava-roupas','2100.00','3','6300.00'), 
        ('Jonas', 'Rua Bresser, nº 301 - Brás, São Paulo', '6666-6666', 'Microondas', '399.00','2','798.00'), 
        ('Marta', 'Rua Helvétia, nº 301 - Campos Elíseos, São Paulo', '7777-7777', 'Playstation 4', '4000.00','2','8000.00'), 
        ('Regina', 'Rua Tiradentes, nº 301 - Centro - São Paulo', '8888-8888', 'Geladeira', '3068.10','2',' 6136.20'), 
        ('Claudia', 'Rua Oriente, nº 301 - Brás, São Paulo', '9999-9999', 'Geladeira', '3068.10','2',' 6136.20'), 
        ('Charlotte', 'Rua Oscar Freire, nº 4583 - Bairro dos Jardins, São Paulo', '1010-1010', 'Fogão', '990.00','2','1980.00'); 
