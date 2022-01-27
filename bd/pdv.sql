CREATE TABLE `api_key` (
  `id` int(11) NOT NULL,
  `chave` varchar(255) NOT NULL,
  `permision` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `api_key` (`id`, `chave`, `permision`) VALUES
(1, 'a210090bc5f7142119e0af2ae7818d1c58275193', 'root');



CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `category` (`id_category`, `nome`) VALUES
(1, 'Fralda Infantil'),
(2, 'Absorvente'),
(3, 'Higiene Oral');



CREATE TABLE `client` (
  `codcli` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dt_nascimento` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `client` (`codcli`, `nome`, `cpf`, `email`, `dt_nascimento`, `cep`, `logradouro`, `numero`, `bairro`, `complemento`, `cidade`) VALUES
(1, 'samuel', '12526607400', '', '', '', '', '', '', '', ''),
(2, 'samuel2', '12526707400', '', '16/03/2001', '51320400', '16/03/2001', '32', 'pe', 'pe', '16/03/2001');


CREATE TABLE `formato` (
  `id_formato` int(11) NOT NULL,
  `dimensao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `formato` (`id_formato`, `dimensao`) VALUES
(1, '400x400');



CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `id_formato` int(11) NOT NULL,
  `caminho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `image` (`id_image`, `id_formato`, `caminho`) VALUES
(1, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/36c5c96a-db3c-441a-bc0f-767e0de5505b.jpg'),
(2, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/568074ae-942f-42e7-9e1b-c4805586e482.jpg'),
(3, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/0f652301-a752-4990-b6d7-67989344cd7e.jpg'),
(4, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/9fff00da-e094-4f88-b1c3-0c11c610aa6c.jpg'),
(5, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/b64da49a-92ac-41c4-9985-7dd9d4100776.jpg'),
(6, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/09b160f7-5b1a-4885-969a-37c0492a75ea.jpg'),
(7, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/2ceaebe5-990f-492b-89d8-ecddeddd5d6c.jpg'),
(8, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/b9004c82-2b6b-4023-a866-b8beefcd53c2.jpg'),
(9, 1, 'https://s3-sa-east-1.amazonaws.com/prod-superon-public-media/shared/product-image/7a0bf2fa-aff6-4935-8cef-d09900393f1f.jpg');


CREATE TABLE `ped` (
  `numped` int(11) NOT NULL,
  `codcli` int(11) NOT NULL,
  `data` varchar(50) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `pedi` (
  `numped` int(11) NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `codprod` int(11) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `product` (
  `codprod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` float NOT NULL,
  `id_category` int(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `product` (`codprod`, `nome`, `valor`, `id_category`, `deleted`) VALUES
(1, 'ABS DELIGEL C/ABAS C/16', 4.17, 2, 0),
(2, 'ABS DELIGEL NOTURNO C/ABAS C/10\n', 3.43, 2, 0),
(3, 'ABS INTIMUS INTERNO MEDIO C/8', 5.38, 2, 0),
(4, 'ABS INTIMUS INTERNO SUPER C/16', 12.53, 2, 0),
(5, 'FRALDA BUMMIS TUBOS FITA JUMBINH EG/14', 16.64, 1, 0),
(6, 'FRALDA BUMMIS TUBOS FITA JUMBINHO G/18', 15.29, 1, 0),
(7, 'FRALDA HUGGIES NATURAL CARE MEGA G C/28', 34.44, 1, 0),
(8, 'ANTI-SEP D.CLEAN HORT 300ML 2007', 8.47, 3, 0),
(9, 'ANTI-SEP CLINEX 300ML ZERO + ESCOVA 2205\r', 18.86, 3, 0),
(10, '', 454.4, 0, 0),
(11, '', 454.4, 0, 0),
(12, '', 454.4, 0, 0),
(13, '', 454.4, 0, 0),
(14, '', 454.4, 0, 0),
(15, '', 454.4, 0, 0),
(16, '', 454.4, 0, 0),
(17, '', 454.4, 0, 0);


CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `codprod` int(11) NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `product_image` (`id`, `codprod`, `id_image`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9);

ALTER TABLE `api_key`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);


ALTER TABLE `client`
  ADD PRIMARY KEY (`codcli`);

ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

ALTER TABLE `ped`
  ADD PRIMARY KEY (`numped`);

ALTER TABLE `product`
  ADD PRIMARY KEY (`codprod`);


ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `api_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `client`
  MODIFY `codcli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `ped`
  MODIFY `numped` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `product`
  MODIFY `codprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;


ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;


