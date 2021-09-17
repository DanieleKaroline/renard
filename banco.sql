-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para website_tcc
CREATE DATABASE IF NOT EXISTS `website_tcc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `website_tcc`;

-- Copiando estrutura para tabela website_tcc.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `Blog_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Blog_Titulo` varchar(150) DEFAULT NULL,
  `Blog_Corpo` longtext DEFAULT NULL,
  `Blog_Data` timestamp NULL DEFAULT NULL,
  `Blog_Texto` longtext DEFAULT NULL,
  PRIMARY KEY (`Blog_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.blog: ~4 rows (aproximadamente)
DELETE FROM `blog`;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`Blog_Codigo`, `Blog_Titulo`, `Blog_Corpo`, `Blog_Data`, `Blog_Texto`) VALUES
	(1, 'O início de tudo', 'Um pouco mais sobre a ideia principal do projeto e de nosso objetivo como equipe.', '2019-08-09 19:36:11', 'O Transtorno do Espectro Autista, também chamado de TEA, tem ganhado bastante visibilidade nos últimos anos em função de campanhas de conscientização e da ampla divulgação por parte da mídia. Isso tem aproximado cada vez mais o tema da população. Segundo a Organização Mundial da Saúde (OMS), estima-se que existam 70 milhões de pessoas com autismo em todo o mundo, 2 milhões delas somente no Brasil. Com base em nossa pesquisa e interesse, tivemos o foco de nosso projeto, destinado a ajudar as pessoas autistas em momentos de crise (meltdown) por meio do monitoramento desse usuário e pelo repasse de informação para uma pessoa próxima ou responsável por ele. Foi utilizado como meio de pesquisa de viabilidade e usabilidade do projeto, um formulário que foi disseminado em grupos com o público-alvo para pessoas autistas, pessoas próximas, familiares e acadêmicos. Além de nossa pulseira (a qual faz a verificação de sinais vitais), foram desenvolvidas três plataformas, sendo: Aplicativo Mobile, Site e Aplicação Desktop. O objetivo deste trabalho é apresentar os resultados e métodos sobre o desenvolvimento do nosso projeto. Nós, como equipe de desenvolvimento, esperamos que de certa forma possamos ajudar os autistas e, também, estudos acerca desse transtorno.'),
	(2, 'Sobre o meltdown: O que é? ', 'Artigo sobre o meltdown e suas motivações', '2019-08-09 19:36:11', ' Segundo a Organização Mundial da Saúde (OMS), estima-se que existam 70\r\nmilhões de pessoas com autismo em todo o mundo, 2 milhões delas somente no Brasil. O transtorno do Espectro Autista (TEA) é um grupo de distúrbios do desenvolvimento neurológico de início precoce, caracterizado por comprometimento das habilidades sociais e de comunicação, além de comportamento comportamentos estereotipados. \r\nApesar de o autismo ter um número relativamente grande de incidência, foi apenas em 1993 que a síndrome foi adicionada à Classificação Internacional de Doenças da Organização Mundial da Saúde. A demora na inclusão do autismo neste ranking é reflexo do pouco que se sabe sobre a questão.\r\nNo TEA o processamento da informação sensorial está normalmente comprometido interferindo no desempenho diário ou no comportamento, devido a dificuldades em regular a intensidade da resposta a estímulos sensoriais. Os meltdowns, também conhecidos como colapsos ou crises nervosas, são uma perda temporária do controle emocional pelo indivíduo, podendo caracterizar-se por choros e movimentos repetitivos intensos, gritos, e algumas vezes até mesmo autoagressão, como morder o próprio braço, por exemplo. Na maior parte das vezes eles estão ligados ou a algum tipo de frustração, tal como uma mudança de rotina não esperada ou algum tipo de expectativa que não foi satisfeita, por isso necessidade de sempre adiantar ao autista o que vai acontecer em seu dia, em alguns casos os meltdowns podem também estar ligados à hiperestimulação, é sabido que a maior parte dos autistas têm dificuldades sensoriais, então estar em ambientes com muitos estímulos pode ser um complicador, desta forma, algumas situações cotidianas podem ser muito difíceis de ser enfrentadas, como a ida a um restaurante ou festas infantis, sugiro neste sentido que sempre se tente expor o autista às situações do cotidiano, entretanto é de bom tom que os familiares sempre estejam atentos a qualquer manifestação de estresse para evitar perdas de controle mais severas. \r\n'),
	(3, 'Nossas plataformas em produção.', 'Tudo sobre a equipe e a metodologia de desenvolvimento.', '2019-08-09 19:36:11', 'Estamos a todo vapor! Novidades estarão chegando e, com elas, o avanço do projeto é claro. Dizponibilizamos abaixo uma prévia sobre nossas plataformas:');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.blogimagem
CREATE TABLE IF NOT EXISTS `blogimagem` (
  `BlogImagem_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `BlogImagem_Nome` longtext DEFAULT NULL,
  `BlogImagem_Blog_Codigo` int(11) DEFAULT NULL,
  `BlogImagem_Destaque` char(1) DEFAULT 'n',
  PRIMARY KEY (`BlogImagem_Codigo`),
  KEY `FK__blog` (`BlogImagem_Blog_Codigo`),
  CONSTRAINT `FK__blog` FOREIGN KEY (`BlogImagem_Blog_Codigo`) REFERENCES `blog` (`Blog_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.blogimagem: ~13 rows (aproximadamente)
DELETE FROM `blogimagem`;
/*!40000 ALTER TABLE `blogimagem` DISABLE KEYS */;
INSERT INTO `blogimagem` (`BlogImagem_Codigo`, `BlogImagem_Nome`, `BlogImagem_Blog_Codigo`, `BlogImagem_Destaque`) VALUES
	(1, 'meltdonw.jpg', 2, 's'),
	(2, 'code.jpg', 3, 's'),
	(3, 'ideia.jpg', 1, 's'),
	(4, 'mMenu.jpg', 3, 'n'),
	(5, 'mAl.jpg', 3, 'n'),
	(6, 'mNE.jpg', 3, 'n'),
	(7, 'Dlogin.jpg', 3, 'n'),
	(8, 'DprincipalS.jpg', 3, 'n'),
	(9, 'DcadastroS.jpg', 3, 'n'),
	(10, 'DprincipalTEA.jpg', 3, 'n'),
	(11, 'Ddados.jpg', 3, 'n'),
	(12, 'Dguia.jpg', 3, 'n'),
	(13, 'Descolha.jpg', 3, 'n'),
	(23, 'laco_autismo.png', 1, 'n'),
	(24, 'meltd.jpg', 2, 'n');
/*!40000 ALTER TABLE `blogimagem` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `assunto` varchar(150) DEFAULT NULL,
  `mensagem` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela website_tcc.contato: ~0 rows (aproximadamente)
DELETE FROM `contato`;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
	(6, 'Silmara Carvalho Farias', 'anne.lucidchart@gmail.com', 'Rua Ver Miguel Veiga, 60', 'AAAA');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.conteudo
CREATE TABLE IF NOT EXISTS `conteudo` (
  `Conteudo_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Conteudo_Titulo` varchar(250) DEFAULT NULL,
  `Conteudo_Corpo` longtext DEFAULT NULL,
  `Conteudo_Link_Codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Conteudo_Codigo`),
  KEY `FK_conteudo_link` (`Conteudo_Link_Codigo`),
  CONSTRAINT `FK_conteudo_link` FOREIGN KEY (`Conteudo_Link_Codigo`) REFERENCES `link` (`Link_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.conteudo: ~24 rows (aproximadamente)
DELETE FROM `conteudo`;
/*!40000 ALTER TABLE `conteudo` DISABLE KEYS */;
INSERT INTO `conteudo` (`Conteudo_Codigo`, `Conteudo_Titulo`, `Conteudo_Corpo`, `Conteudo_Link_Codigo`) VALUES
	(1, 'Equipe', 'Texto 1', 2),
	(2, 'História', 'Texto 2', 2),
	(3, 'Currículo', 'Texto 3', 2),
	(4, 'SOBRE NOSSA EMPRESA', 'Melhorar o modo de vida e garantir maior segurança o usuário de nosso sistema. Um dos nossos objetivos é que buscamos auxiliar no dia a dia os portadores de TEA a fim de que nossos clientes se sintam à-vontade para ter sua vida social aberta para novas experiências e convívio sem maiores complicações.', 2),
	(5, 'DIVERSAS APLICAÇÕES EM UM ÚNICO SISTEMA', 'Disponibilizamos meios de comunicação, informação e jogos para excelência de sua comodidade. Pode-se acessar em todos os plataformas seja em seu celular, computador ou site.', 2),
	(6, 'Rua dos Andradas, 140 - Santa Ifigênia', 'CEP 01208-000 – São Paulo – SP', 5),
	(7, '+55 11 3324-3300', 'Horário de funcionamento: 08h - 18h', 5),
	(8, 'etecacademica@gmail.gov.br', 'Envie-nos sua consulta a qualquer momento!', 5),
	(9, 'Sistema de Localização', ' Nosso sistema de geolocalização, monitora e supervisiona o usuário utilizador da pulseira. Em ambas plataformas (Desktop e Mobile) disponibilizamos a opção de consultar a localização do Autista nos momentos de meltdown, podendo assim, assegurar um auxílio mais rápido e eficaz, causando menos dano ao Autista.', 6),
	(10, 'Pulseira Interativa', 'A nossa pulseira possí alguns sensores que auxiliam na constante verificação dos sinais vitais do Autista podendo prenunciar um possivél momento de meltdown.\nOs dados são enviados para nossas plataformas (Mobile e Desktop) gerando relatórios em situações diárias. Em caso de meltdow, o usuário próximo ao Autista\nreceberá um alerta sobre o que ocorre e, também, a localização atual.\n', 6),
	(11, 'Software Personalizado', 'Software que interage com pulseira, disponibiliza jogos interativos, guias educativos e sistemas de alerta.Tanto no Computador quanto no aparelho celular.', 6),
	(12, 'Aparelho de Monitoramento', 'Serve para monitorar e acompanhar o dia a dia o usuario.', 7),
	(13, 'NOSSA PULSEIRA E SUAS VARIEDADES', 'DISCRETA E CONFORTÁVEL ', 3),
	(14, '<h4>Black Sky</h4> <p>Feita para o dia a dia.</p>', 'Pulseira com sensores que verificam frequência cardíaca, auxilia e monitora o usuário em seu dia a dia.', 3),
	(15, '<h4>Caribbean Blue</h4><p>Elegante e confortável.</p> ', 'Pulseira com sensores que verificam frequência cardíaca, auxilia e monitora o usuário em seu dia a dia.', 3),
	(16, '<h4>Branco Marfim</h4> <p>Discreta e moderna.</p>', 'Pulseira com sensores que verificam frequência cardíaca, auxilia e monitora o usuário em seu dia a dia.', 3),
	(17, '<h4>Vermelho Velvet</h4><p>Um pouco de cor.</p>', 'Pulseira com sensores que verificam frequência cardíaca, auxilia e monitora o usuário em seu dia a dia.', 3),
	(18, 'Plataforma Desktop', 'Em nossa plataforma Desktop, é possível acessar a partir de qualquer computador, desde que esteja instalado, podendo ser acessado simultaneamente. Seu visual é confortavel e prático. Necessário criar sua conta.', 3),
	(19, 'Plataforma Mobile', 'No nosso aplicativo tudo ocorre. Opções variadas de possibilidades e um design agradável. Disponibilizamos espaços de interação e informativos.', 3),
	(20, 'Plataformas', 'As plataformas a serem utlizadas pelos usuários ainda estão sendo desenvolvidas e configuradas. Disponibilizamos uma prévia abaixo:', 3),
	(21, 'Sobre nossa equipe', 'Nossa Equipe De Criadores E Desenvolvedores:', 2),
	(22, 'Daniele Karoline.', 'Desenvolvedora e criadora do projeto.', 2),
	(23, 'Júlia Martins.', 'Desenvolvedora e criadora do projeto.', 2),
	(24, 'Adeldivo Jr.', 'Desenvolvedor e criador do projeto.', 2);
/*!40000 ALTER TABLE `conteudo` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.imagem
CREATE TABLE IF NOT EXISTS `imagem` (
  `Imagem_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Imagem_Nome` longtext DEFAULT NULL,
  `Imagem_Conteudo_Codigo` int(11) DEFAULT NULL,
  `Imagem_Destaque` char(50) DEFAULT 'n',
  PRIMARY KEY (`Imagem_Codigo`),
  KEY `FK__conteudo` (`Imagem_Conteudo_Codigo`),
  CONSTRAINT `FK__conteudo` FOREIGN KEY (`Imagem_Conteudo_Codigo`) REFERENCES `conteudo` (`Conteudo_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.imagem: ~26 rows (aproximadamente)
DELETE FROM `imagem`;
/*!40000 ALTER TABLE `imagem` DISABLE KEYS */;
INSERT INTO `imagem` (`Imagem_Codigo`, `Imagem_Nome`, `Imagem_Conteudo_Codigo`, `Imagem_Destaque`) VALUES
	(1, 'img1.jpg', 3, 'n'),
	(2, 'img2.jpg', 3, 'n'),
	(3, 'img3.jpg', 3, 'n'),
	(4, 'desk.png', 4, 'n'),
	(5, 'pl1.png', 14, 's'),
	(6, 'pl2.png', 15, 's'),
	(7, 'pl3.png', 16, 's'),
	(8, 'pl4.png', 17, 's'),
	(9, 'mAl.jpg', 19, 'n'),
	(10, 'mNE.jpg', 19, 'n'),
	(11, 'mMenu.jpg', 19, 'n'),
	(12, 'os1.jpg', 9, 's'),
	(13, 'os2.jpg', 10, 's'),
	(14, 'os3.jpg', 11, 's'),
	(15, 'computer.png', 5, 's'),
	(16, 'phone.png', 5, 's'),
	(17, 'site.png', 5, 's'),
	(18, 'desktopstea.png', 18, 's'),
	(19, 'mobilestea.png', 19, 's'),
	(20, 'Dlogin.jpg', 18, 'n'),
	(21, 'DprincipalS.jpg', 18, 'n'),
	(22, 'DcadastroS.jpg', 18, 'n'),
	(23, 'DprincipalTEA.jpg', 18, 'n'),
	(24, 'Ddados.jpg', 18, 'n'),
	(25, 'Dguia.jpg', 18, 'n'),
	(26, 'Descolha.jpg', 18, 'n'),
	(27, 'danny.png', 22, 'n'),
	(28, 'julia.png', 23, 'n'),
	(29, 'junior.png', 24, 'n');
/*!40000 ALTER TABLE `imagem` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.itemproduto
CREATE TABLE IF NOT EXISTS `itemproduto` (
  `ItemProduto_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ItemProduto_Data` timestamp NULL DEFAULT NULL,
  `ItemProduto_Versao` decimal(10,0) DEFAULT NULL,
  `ItemProduto_Modelo` varchar(50) DEFAULT NULL,
  `ItemProduto_Tipo` varchar(50) DEFAULT NULL,
  `ItemProduto_Valor` decimal(10,0) DEFAULT NULL,
  `ItemProduto_Conteudo_Codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`ItemProduto_Codigo`) USING BTREE,
  KEY `FK_servico_conteudo` (`ItemProduto_Conteudo_Codigo`) USING BTREE,
  CONSTRAINT `FK_produtoservico_conteudo` FOREIGN KEY (`ItemProduto_Conteudo_Codigo`) REFERENCES `conteudo` (`Conteudo_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.itemproduto: ~6 rows (aproximadamente)
DELETE FROM `itemproduto`;
/*!40000 ALTER TABLE `itemproduto` DISABLE KEYS */;
INSERT INTO `itemproduto` (`ItemProduto_Codigo`, `ItemProduto_Data`, `ItemProduto_Versao`, `ItemProduto_Modelo`, `ItemProduto_Tipo`, `ItemProduto_Valor`, `ItemProduto_Conteudo_Codigo`) VALUES
	(1, '2020-05-06 08:34:20', 1, 'preta', 'aparelho', 35, 14),
	(2, '2020-05-06 08:34:20', 1, 'azul', 'aparelho', 35, 15),
	(3, '2020-05-06 08:34:20', 1, 'branca', 'aparelho', 35, 16),
	(4, '2020-05-06 08:34:20', 1, 'vermelha', 'aparelho', 35, 17),
	(5, '2020-05-06 08:34:20', 1, 'desktop', 'plataforma', 0, 18),
	(6, '2020-05-06 08:34:20', 1, 'mobile', 'plataforma', 0, 19);
/*!40000 ALTER TABLE `itemproduto` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.link
CREATE TABLE IF NOT EXISTS `link` (
  `Link_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Link_Nome` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Link_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.link: ~7 rows (aproximadamente)
DELETE FROM `link`;
/*!40000 ALTER TABLE `link` DISABLE KEYS */;
INSERT INTO `link` (`Link_Codigo`, `Link_Nome`) VALUES
	(1, 'Home'),
	(2, 'Sobre'),
	(3, 'Produtos'),
	(4, 'Blog'),
	(5, 'Contato'),
	(6, 'Servicos'),
	(7, 'Loja');
/*!40000 ALTER TABLE `link` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.loja
CREATE TABLE IF NOT EXISTS `loja` (
  `Loja_Conteudo_Codigo` int(11) DEFAULT NULL,
  `Loja_ItemProduto_Codigo` int(11) DEFAULT NULL,
  `Loja_Servico_Codigo` int(11) DEFAULT NULL,
  `Loja_Destaque` char(1) DEFAULT 'n',
  KEY `FK_loja_conteudo` (`Loja_Conteudo_Codigo`),
  KEY `FK_loja_servico` (`Loja_Servico_Codigo`),
  KEY `FK_loja_produto` (`Loja_ItemProduto_Codigo`) USING BTREE,
  CONSTRAINT `FK_loja_conteudo` FOREIGN KEY (`Loja_Conteudo_Codigo`) REFERENCES `conteudo` (`Conteudo_Codigo`),
  CONSTRAINT `FK_loja_itemproduto` FOREIGN KEY (`Loja_ItemProduto_Codigo`) REFERENCES `itemproduto` (`ItemProduto_Codigo`),
  CONSTRAINT `FK_loja_servico` FOREIGN KEY (`Loja_Servico_Codigo`) REFERENCES `servico` (`Servico_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.loja: ~12 rows (aproximadamente)
DELETE FROM `loja`;
/*!40000 ALTER TABLE `loja` DISABLE KEYS */;
INSERT INTO `loja` (`Loja_Conteudo_Codigo`, `Loja_ItemProduto_Codigo`, `Loja_Servico_Codigo`, `Loja_Destaque`) VALUES
	(14, 1, 2, 's'),
	(14, 5, 3, 'n'),
	(14, 6, 3, 'n'),
	(15, 2, 2, 's'),
	(15, 5, 3, 'n'),
	(15, 6, 3, 'n'),
	(16, 3, 2, 's'),
	(16, 5, 3, 'n'),
	(16, 6, 3, 'n'),
	(17, 4, 2, 's'),
	(17, 5, 3, 'n'),
	(17, 6, 3, 'n');
/*!40000 ALTER TABLE `loja` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.servico
CREATE TABLE IF NOT EXISTS `servico` (
  `Servico_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Servico_Conteudo_Codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Servico_Codigo`),
  KEY `FK_servicoproduto_conteudo` (`Servico_Conteudo_Codigo`),
  CONSTRAINT `FK_servicoproduto_conteudo` FOREIGN KEY (`Servico_Conteudo_Codigo`) REFERENCES `conteudo` (`Conteudo_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.servico: ~3 rows (aproximadamente)
DELETE FROM `servico`;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` (`Servico_Codigo`, `Servico_Conteudo_Codigo`) VALUES
	(1, 9),
	(2, 10),
	(3, 11);
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;

-- Copiando estrutura para tabela website_tcc.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `Usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario_email` longtext DEFAULT NULL,
  `Usuario_senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website_tcc.usuario: ~0 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`Usuario_id`, `Usuario_email`, `Usuario_senha`) VALUES
	(1, 'aaa@gmail.com', '123'),
	(2, 'anne.lucidchart@gmail.com', '123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
