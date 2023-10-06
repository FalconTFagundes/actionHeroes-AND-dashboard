-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/10/2023 às 00:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `actionheroesdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `banner`
--

CREATE TABLE `banner` (
  `idbanner` int(10) UNSIGNED NOT NULL,
  `img` varchar(90) NOT NULL DEFAULT '',
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `banner`
--

INSERT INTO `banner` (`idbanner`, `img`, `cadastro`, `alteracao`, `ativo`) VALUES
(2, 'deadpool.jpg', '2023-10-02 21:09:00', '2023-10-04 21:34:41', 'A'),
(3, 'off.jpg', '2023-10-02 21:09:00', '2023-10-03 01:19:29', 'A'),
(4, 'batman.jpg', '2023-10-02 21:09:00', '2023-10-03 01:19:31', 'A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentarios` int(10) UNSIGNED NOT NULL,
  `img` varchar(45) NOT NULL DEFAULT '',
  `comentario` varchar(225) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `profissao` varchar(45) NOT NULL,
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comentarios`
--

INSERT INTO `comentarios` (`idcomentarios`, `img`, `comentario`, `nome`, `profissao`, `cadastro`, `alteracao`, `ativo`) VALUES
(1, 'diegao.png', 'Comprei meu primeiro action figure do Kratos  aqui, amo muito, lembro como se fosse ontem', 'Cleiton do SAAE', 'Assassino de Deuses', '2023-09-29 22:31:00', '2023-10-04 22:06:01', 'A'),
(2, 'gabigol.jpg', 'Amo comprar com a Action, melhores action figures do mundo', 'Gabriel Gabigol', 'Jogador de Profissional de Futebol Masculino', '2023-09-29 22:31:00', '2023-10-04 22:02:46', 'A'),
(3, 'lcp.jpg', 'Amo a Action Figures, a minha coleção ficou show com a ajuda da Action', 'Luciano Pettersen', 'Instrutor Desenvolvimento de Sistemas ', '2023-09-29 22:31:00', '2023-10-04 22:03:23', 'A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `info`
--

CREATE TABLE `info` (
  `idinfo` int(10) UNSIGNED NOT NULL,
  `titulo1` varchar(45) NOT NULL,
  `titulo2` varchar(45) NOT NULL,
  `descricao` varchar(70) NOT NULL,
  `imagem1` longtext NOT NULL,
  `imagem2` longtext NOT NULL,
  `titulo1info` varchar(45) NOT NULL,
  `descricao1info` varchar(70) NOT NULL,
  `titulo2info` varchar(45) NOT NULL,
  `descricao2info` varchar(70) NOT NULL,
  `titulo3info` varchar(45) NOT NULL,
  `descricao3info` varchar(70) NOT NULL,
  `titulo4info` varchar(45) NOT NULL,
  `descricao4info` varchar(70) NOT NULL,
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `info`
--

INSERT INTO `info` (`idinfo`, `titulo1`, `titulo2`, `descricao`, `imagem1`, `imagem2`, `titulo1info`, `descricao1info`, `titulo2info`, `descricao2info`, `titulo3info`, `descricao3info`, `titulo4info`, `descricao4info`, `cadastro`, `alteracao`, `ativo`) VALUES
(1, 'Nossa loja', 'Informações', 'Confira um pouco de nossos fundamentos destaques', 'kr.jpg', 'luffy.jpg', 'Rápida Entrega', 'Entrega rápida no endereço em que solicitar!', 'Qualidade', 'Nossos produtos possuem o selo certificado de qualidade', 'Fiel ao Solicitado', 'Buscamos desenvolver figuras de ação 100% fieis aos personagens', 'Praticidade', 'Fácil acesso ao site e aos nossos produtos', '2023-09-27 00:00:00', '2023-10-04 22:11:54', 'A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `init`
--

CREATE TABLE `init` (
  `idinit` int(10) UNSIGNED NOT NULL,
  `icon` varchar(60) NOT NULL DEFAULT '',
  `text` varchar(75) NOT NULL DEFAULT '',
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `init`
--

INSERT INTO `init` (`idinit`, `icon`, `text`, `cadastro`, `alteracao`, `ativo`) VALUES
(1, 'mdi mdi-account-lock-open', 'Segurança nas Suas Compras', '2023-09-24 16:10:00', '2023-09-26 22:20:51', 'A'),
(2, 'mdi mdi-account-cash', 'Cabe no seu Bolso', '2023-09-24 16:10:00', '2023-09-24 19:12:52', 'A'),
(3, 'mdi mdi-thumb-up', 'Produtos de Qualidade', '2023-09-24 16:12:00', '2023-09-24 19:12:52', 'A'),
(4, 'mdi mdi-bike-fast', 'Entrega Rápida', '2023-09-24 16:12:00', '2023-10-04 21:13:12', 'A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(50) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `img1` varchar(70) NOT NULL DEFAULT '',
  `img2` varchar(70) NOT NULL DEFAULT '',
  `img3` varchar(70) NOT NULL DEFAULT '',
  `descricao` longtext NOT NULL,
  `material` varchar(45) NOT NULL DEFAULT '',
  `dimensoes` varchar(50) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `valor` decimal(5,2) NOT NULL DEFAULT 0.00,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `desconto` varchar(45) NOT NULL,
  `destaque` char(1) NOT NULL DEFAULT 'N',
  `freteGratis` char(1) NOT NULL DEFAULT 'N',
  `ofertasDoDia` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `img1`, `img2`, `img3`, `descricao`, `material`, `dimensoes`, `peso`, `valor`, `cadastro`, `alteracao`, `ativo`, `desconto`, `destaque`, `freteGratis`, `ofertasDoDia`) VALUES
(1, 'Kratos', 'kratos1.jpg', 'kratos2.jpg', 'kratos3.jpg', 'Kratos é um guerreiro grego a serviço dos deuses Gregos do Olimpo. Enganado por Ares, o Deus da Guerra, que queria transformá-lo num guerreiro perfeito, Kratos acidentalmente mata sua esposa e sua filha, mas, depois disso, Kratos decide não servir mais a Ares e é amaldiçoado com as cinzas de sua família morta pelo Oráculo da cidade que foi destruída. Kratos é atormentado com memórias de seus atos e faz um trato de servir aos outros deuses do Olimpo por dez anos. Cansado de servir, convoca Atena e, ela afirma que o perdoará por seus atos se ele realizar uma última tarefa: matar Ares. Para isso ele deve encontrar e usar a Caixa de Pandora. Ao recuperar a Caixa de Pandora de Ares, Kratos a abre e usa o seu poder para tomar os poderes de um deus. Apesar dos esforços de Ares para acabar com Kratos, tanto física quanto mentalmente, incluindo ser despojado das Lâminas do Caos, perder os Poderes Divinos, e lutar contra uma Horda de Clones e perder sua família novamente, Kratos sobrevive e mata seu inimigo com a lendária Lâmina dos Deuses. Atenas é salva, e apesar de Atena dizer que seus pecados foram perdoados, seus pesadelos não poderão ser parados. Kratos, então, tenta cometer suicídio lançando-se no Mar Egeu, mas Atena intervém dizendo que não cabe a ele tirar sua própria vida, pois teria matado um deus, e leva-o de volta para o Monte Olimpo. Como recompensa por seus serviços aos deuses, Atena lhe concede as Lâminas de Atena e Kratos se torna o novo Deus da Guerra.', 'Boneco de PVC, ABS', '20x15x8 cm', '	700g', 300.00, '2023-09-11 20:47:00', '2023-10-04 21:13:24', 'A', '60%', 'N', 'S', 'N'),
(2, 'Atreus', 'atreus1.jpg', 'atreus2.jpg', 'atreus3.jpg', 'Atreus foi concebido entre o grego espartano Kratos e uma giganta nativa de Jötunheim chamada Laufey, a quem ele e seu pai chamam de \"Faye\". Ele era uma criança enfermiça e só recentemente ficou saudável o suficiente para a sua jornada. Seu passado não foi extensivamente revelado, no entanto, está implícito que ele e sua mãe viveram sem Kratos por um tempo, pois o próprio Kratos não tem certeza da capacidade de caça do menino e, respeitando os desejos de Faye, não ensinou ele próprio. Algum tempo depois, Kratos retorna. É mostrado que a mãe, aparentemente, havia falecido por razões não esclarecidas.\r\n\r\nAlgum tempo depois da morte de sua mãe, Atreus começa a aprender a caçar e matar com seu pai, Kratos. Kratos também o ensina a lutar e o garoto assume o papel de assistente, usando suas flechas eletrificadas. Ao contrário de Kratos, Atreus não é um assassino nato e parece hesitar diante da perspectiva de acabar com uma vida, até mesmo a de um monstro que está atacando seu pai. Ele está, no entanto, disposto a lutar.', 'Boneco de PVC, ABS', ' 18 cm', '600g', 270.00, '2023-09-11 21:03:00', '2023-10-03 01:06:15', 'A', '', 'N', 'S', 'N'),
(3, 'Joel', 'joel1.jpg', 'joel2.jpg', 'joel3.jpg', 'Joel Miller é o protagonista jogável de The Last of Us, e um personagem coadjuvante em The Last of Us: Left Behind e The Last of Us Part II, no qual ele é brevemente jogável.\r\n\r\nJoel era um sobrevivente na América pós-apocalíptica que havia sido devastada pela infecção cerebral por Cordyceps .  Depois de perder sua única filha Sarah nos estágios iniciais do surto,  Joel tornou-se um contrabandista implacável e cínico eventualmente encarregado de contrabandear e proteger Ellie Williams, uma jovem que era a chave para a sobrevivência da humanidade. Joel eventualmente formou um forte vínculo com ela.', 'Boneco de PVC, ABS', 'Peça em escala 1/8 com 23cm contando a base', '800g', 450.00, '2023-09-11 21:24:00', '2023-09-15 00:38:49', 'A', '', 'N', 'N', 'N'),
(4, 'Ellie', 'ellie1.jpg', 'ellie2.jpg', 'ellie3.jpg', 'Ellie Williams é a personagem central da série The Last of Us. Ela atua como a protagonista de The Last of Us: American Dreams,\r\n\r\nsta jogável de The Last of Us, e a protagonista jogável de The Last of Us: Left Behind e The Last of Us Part II.\r\n\r\nEllie cresceu órfã na zona de quarentena de Boston e frequentou uma escola militar preparatória, onde conheceu e fez amizade com Riley Abel. Quando Ellie tinha quatorze anos, a dupla foi infectada com a infecção cerebral por Cordyceps, onde Ellie descobriu que era imune. Uma amiga de sua mãe e líder dos Vaga-lumes, Marlene, acreditava que ela era a chave para a engenharia reversa de uma vacina. Marlene encarregou Joel Miller, um contrabandista, de escoltar Ellie para fora do QZ. O simples desembarque se transformou em uma jornada de um ano pela América, e os dois eventualmente formaram um vínculo estreito.', 'PVC', '30x25x25 cm\r\n \r\n ', '1200g', 999.99, '2023-09-11 21:35:00', '2023-10-02 12:11:46', 'A', '', 'S', 'N', 'N'),
(5, 'Luffy', 'luffy1.jpg', 'luffy2.jpg', 'luffy3.jpg', 'Nascido em East Blue, Monkey D. Luffy é um rapaz com um sonho bem ambicioso: desde criança, ele sonhava em ser pirata! Com sete anos de idade, ele conheceu o capitão pirata Shanks, seu maior ídolo! Desde aquela época, ele desejava fazer parte da tripulação de Shanks e viajar pelo mundo atrás do famoso tesouro One Piece, para se tornar o Rei dos Piratas.\r\n\r\nAcontece que não foi assim tão simples para começar sua jornada: Luffy não conseguiu fazer parte do bando de Shanks, que negou a entrada do menino por conta da sua pouca idade. O pirata deixou para o jovem seu chapéu de palha e o sonho de um dia se tornar o maior dos mares.', 'ABS', '‎9 x 9 x 18 cm', '250g', 200.00, '2023-09-11 21:42:00', '2023-10-03 01:06:15', 'A', '', 'N', 'S', 'N'),
(6, 'Naruto', 'naruto1.jpg', 'naruto2.jpg', 'naruto3.jpg', 'Naruto Uzumaki é um garoto que vive na Aldeia da Folha, a vila ninja no País do Fogo. Ainda bebê, Naruto teve aprisionado em seu corpo a Kyuubi (Raposa de Nove Caudas) pelo Yondaime Hokage (Quarto Hokage e seu pai), com finalidade de salvar a Aldeia.\r\n\r\nA mãe de Naruto era hospedeira da Kurama e estava sendo manipulada pelo óbito. Enquanto isso Minato estava com o Naruto lutando contra o obito e cuidando dele; até Minato chegar e selar a Kurama com a ajuda da Kuxina Uzumaki (uma kunoichi de Konohagakure que se originou no Clã Uzumaki de Uzushiogakure).\r\n\r\nComo não conseguiram destruir o demônio, Yondaime fez um pacto com o Shinigami (Deus da Morte), onde sacrificou sua própria alma para selar a Kyuubi no corpo de um recém-nascido.', 'Plastico', '‎11,43 x 7,37 x 13,97 cm', '100g', 350.00, '2023-09-11 21:49:00', '2023-09-15 00:38:49', 'A', '', 'N', 'N', 'N'),
(7, 'Goku', 'goku1.jpg', 'goku2.jpg', 'goku3.jpg', 'Originalmente batizado como Kakarotto, Goku é membro de uma raça fictícia de extraterrestres, os Saiyajins. Logo após seu nascimento, Goku é enviado à Terra para destruir as formas de vida locais e preparar o planeta para venda no mercado negro intergalático. Encontrado e criado pelo eremita Son Gohan, Goku sofre deamnésia durante a infância graças a uma pancada na cabeça, esquecendo sua missão inicial e passando a ter como objetivo se tornar mais forte, simplesmente pelo prazer da tarefa. ', 'PVC', '‎16 x 11,99 x 16 cm', '300g', 250.00, '2023-09-11 21:51:00', '2023-09-26 22:22:26', 'A', '', 'N', 'N', 'N'),
(8, 'Superman', 'superman1.jpg', 'superman2.jpg', 'superman3.jpg', 'Tudo começa no planeta Krypton, um lugar com uma cultura muito avançada, mas que está condenado a ser iminentemente destruído. Antes que a destruíção completa ocorra, o cientista Jor-El e sua esposa Kara são capazes de colocar seu filho em uma nave para escapar do exermínio. O foguete eventualmente chega à Terra e cai no estado americano do Kansas, onde é encontrado pelos Kents.\n\nOs Kents decidem manter o bebê e criá-lo como se fossem deles mesmos. Quando a criança, à qual deram o nome de Clark, cresce, eles percebem que o garoto possui alguns dons extraordinários, o transformando em algo especial. Com seu amor e orientação, os Kents moldam o código moral de Clark e ensinam-lhe que ele deve usar suas habilidades apenas para ajudar a humanidade. Quando Clark chega à idade adulta, ele se muda para Metrópolis, onde vive uma vida dupla. Em uma vida ele é o gentil Clark Kent, que trabalha como repórter no jornal Planeta Diário. No outro, ele é o Superman, onde usa suas fantásticas habilidades para fazer o bem no mundo.', 'PVC', '32X15X10 cm', '1000g', 999.99, '2023-09-12 20:29:00', '2023-10-02 12:10:43', 'A', '', 'S', 'N', 'N'),
(9, 'Darth Vader', 'vader1.jpg', 'vader2.jpg', 'vader3.jpg', 'Nascido de uma mulher escrava em um planeta desértico e perdido no universo. Essa é a origem de Anakin Skywalker, um garoto destinado a fazer algo grandioso.\r\n\r\nDono de habilidades incríveis, logo na infância foi descoberto por um Jedi ( Qui-Gon-Jinn ) e libertado de sua condição de escravo. Sorte não compartilhada pela mãe, que mais tarde foi aprisionada e torturada, o que a levou à morte. Nesse momento, Anakin mostrou que não trazia a mesma benevolência vista nos mitos e personagens divinos. Ciente de todo o poder que tinha, o ódio o levou a exterminar toda a aldeia que aprisionou sua mãe.                                            Inclui: Luke Skywalker, Cabeça Extra, 5 Pares de mãos, Sabre e Base', 'PVC e Tecido', '30x20x15 cm', '800g', 800.00, '2023-09-12 20:37:00', '2023-10-03 01:06:15', 'A', '', 'N', 'S', 'N'),
(10, 'Luke Skywalker', 'luke1.jpg', 'luke2.jpg', 'luke3.jpg', 'Luke Skywalker é um dos Jedi mais lendários do universo de Star Wars. Após passar por parte de seu treinamento com o Mestre Yoda em Dagobah, Luke aprendeu a dominar a Força e foi uma peça fundamental na luta da Aliança Rebelde contra o Império de Darth Sidious (ou Palpatine para os íntimos) e Darth Vader.                                                 Inclui: Cabeça Extra, 5 Pares de mãos, Sabre e Base', 'PVC', '20 cm', '700g', 950.00, '2023-09-12 20:43:00', '2023-09-27 00:02:50', 'A', '', 'N', 'N', 'N'),
(11, 'Madalorian', 'mandalorian1.jpg', 'mandalorian2.jpg', 'mandalorian3.jpg', 'Djarin  perdeu os pais durante as Guerras Clônicas e foi agregado à cultura Mandaloriana na infância, sendo treinado para se tornar um guerreiro caçador de recompensas. É por isso que foi contratado para caçar Grogu em uma missão paga por um cliente misterioso. Após cumpri-la, Mando se arrepende, decidindo resgatar e proteger a criatura. \r\n\r\nSendo caçado por diversos inimigos, ele tem a nova missão de levar Grogu de volta para seu povo, os Jedi. Em suas aventuras, ele faz novos aliados que o ajudam a escapar e proteger “A Criança”, encontrando personagens famosos como Luke Skywalker, Boba Fett e Ashoka Tano. ', 'Plastico', '‎8,1 x 21 x 30,5 cm', '200g', 250.00, '2023-09-12 20:45:00', '2023-10-03 01:06:15', 'A', '', 'N', 'S', 'N'),
(12, 'Flash', 'flash1.jpg', 'flash2.jpg', 'flash3.jpg', 'Barry Allen era um funcionário da polícia científica, quando foi banhado por produtos químicos após seu laboratório ser atingido por um raio. Esse acidente fez que ele, assim como Jay Garrick, fosse capaz de canalizar a Força da Aceleração para correr em velocidades altíssimas.', 'Plastico', '30,4 x 24,7 x 15,2 cm', '150g', 200.00, '2023-09-12 21:00:00', '2023-10-03 01:12:08', 'A', '', 'N', 'S', 'N'),
(13, 'Han Solo ', 'hansolo1.jpg', 'hansolo2.jpg', 'hansolo3.jpg', 'Em dificuldade financeira, o piloto Han Solo e sua namorada Qi\'ra buscam trabalho. Eles colocam as mãos em uma substância valiosa, mas perigosa, e que acaba levando à perseguição do Império e à separação entre os dois. Preocupado, Han usa toda a sua esperteza para se infiltrar em um plano arriscado, mas que pode render a oportunidade de voltar à terra natal e reencontrar a sua amada. No caminho, o piloto encontra parceiros importantes, como Chewbacca e Lando Calrissian.', 'Boneco de PVC, ABS e Tecido', '30x20x10 cm', '1160g', 999.99, '2023-09-12 21:34:00', '2023-10-02 12:11:46', 'A', '', 'S', 'N', 'N'),
(14, 'Mulher Maravilha', 'mulhermaravilha1.jpg', 'mulhermaravilha2.jpg', 'mulhermaravilha3.jpg', 'Filha da Rainha Hipólita da civilização de amazonas da ilha paradisíaca Themysira, a Princesa Diana foi mandada como Mulher-Maravilha ao “mundo dos homens” para propagar a paz, sendo a defensora da verdade e da vida na luta entre os homens e o firmamento, entre os mortais e os deuses.', 'Polystone', ' 18 cm (A) x 12 cm (L) x 15 cm (C)', '1200g', 900.00, '2023-09-12 21:34:00', '2023-10-03 01:12:09', 'A', '', 'N', 'S', 'N'),
(15, 'Coringa Arkham ', 'coringa1.jpg', 'coringa2.jpg', 'coringa3.jpg', 'O Coringa surgiu na primeira edição da HQ do Batman como um lunático criminoso vestido de Palhaço que matava com um soro que deixava suas vítimas com um macabro sorriso. A aparência do vilão foi fortemente inspirada em O Homem Que Ri, filme baseado no romance de Victor Hugo. A produção trouxe o ator Conrad Veidt como Gwynplaine, um garoto que após ser condenado pela corte inglesa por uma traição cometida por seu pai passa por um procedimento cirúrgico que mutila seu rosto, obrigando-o a \"sorrir para sempre\". O visual de Veidt unido à direção do expressionista alemão Paul Leni conferiram um visual assustador ao personagem, que acabou servindo de base para os quadrinistas Bill Finger, Bob Kane e Jerry Robinson.', 'PVC', '16x11x4 cm ', '300g', 300.00, '2023-09-13 18:57:00', '2023-10-06 22:12:26', 'A', '', 'S', 'N', 'S'),
(16, 'Son Gohan', 'gohan1.jpg', 'gohan2.jpg', 'gohan3.jpg', 'Diferente de seu pai, Gohan não tem paixão por lutas e prefere fazê-lo apenas quando precisa defender seus amigos. Porém, Gohan luta com os Guerreiros Z para defesa da Terra durante grande parte da sua vida. Ele eventualmente estabelece uma família ao fim de Dragon Ball Z, optando pela vida de entomólogo.', 'PVC', '‎5,08 x 5,08 x 15,24 cm; 500 g', '500g', 250.00, '2023-09-13 18:59:00', '2023-10-06 22:28:14', 'A', '', 'N', 'S', 'N'),
(17, 'Goku SSJ 4', 'supersayan4-1.jpg', 'supersayan4-2.jpg', 'supersayan4-3.jpg', 'A forma Super Saiyajin 4 é vista pela primeira vez com Goku após transformar em Oozaru Dourado e ver sua neta Pan chorando para acalmá-lo. Nesta nova forma, Goku tinha força suficiente para dominar Super Baby Vegeta 2, cujos ataques não fazem efeito em Goku.', 'Plastico', '‎10 x 15 x 20 cm; 0,5 g', '800g', 550.00, '2023-09-13 19:02:00', '2023-09-27 01:08:34', 'A', '25%', 'N', 'S', 'N'),
(18, 'Spawn', 'spawn1.jpg', 'spawn2.jpg', 'spawn3.jpg', 'Al Simmons é um assassino mercenário que acabou morto numa missão. Para voltar e rever sua esposa, ele faz um pacto com o demônio Malebólgia. Só que, ao acordar, Simmons se vê sem memória, cinco anos depois de sua morte e transformado num ser terrível, Spawn, o Soldado do Inferno.', 'Plastico e Tecido', '12,7 x 5,72 x 27,94 cm; 320 g', '200g', 250.00, '2023-09-13 19:22:00', '2023-10-06 22:12:26', 'A', '', 'N', 'S', 'S'),
(19, 'johnny silverhand', 'johnnysilverhand1.jpg', 'johnnysilverhand2.jpg', 'johnnysilverhand3.jpg', 'Ele foi o vocalista da banda Samurai e uma das figuras mais proeminentes que lutaram contra o governo corrupto dos EUA e as Megacorporações. Johnny concentra a maior parte de sua raiva para a Corporação Arasaka, devido a eles sequestrarem sua namorada levando à sua suposta morte, que pode ou não ter sido culpa dele.', 'ABS', '30.1 x 26.3 x 17.4', '350g', 150.00, '2023-09-13 19:40:00', '2023-10-03 01:06:16', 'A', '', 'N', 'S', 'N'),
(20, 'Iron-Man', 'ironman1.jpg', 'ironman2.jpg', 'ironman3.jpg', 'Stark é um bilionário que fornece armas para o governo norte-americano. Após a realização de uma demonstração de suas criações, ele é sequestrado por afegãos e durante o período que passa preso, desenvolve uma armadura para conseguir escapar.Seu traje possui vários aspectos tecnológicos. A armadura é a testemunha da genialidade de seu criador Tony Stark.', 'Polystone', '65 x 45.4 x 18.6 ', '600g', 450.00, '2023-09-13 19:45:00', '2023-09-28 22:02:55', 'A', '25%', 'N', 'S', 'N'),
(21, 'The Batman', 'batman1.jpg', 'batman2.jpg', 'batman3.jpg', 'Sua história teve início após testemunhar o assassinato de seus pais ainda quando criança, o que o fez jurar vingança contra os criminosos e treinar todos os dias sozinho, além de criar um personagem baseado em um morcego para combater o crime.', 'Acrilonitrila butadieno estireno Acrilonitril', '7,24 x 7,37 x 15,49 cm; 170 g', '400g', 800.00, '2023-09-13 19:47:00', '2023-09-27 01:13:03', 'A', '', 'N', 'S', 'N'),
(22, 'Loki ', 'loki1.jpg', 'loki2.jpg', 'loki3.jpg', 'Loki, o Deus da Trapaça\nEle era o irmão adotivo de Thor que sempre foi preterido por Odin, o Pai-de-Todos. Ainda que tivesse sido criado em Asgard ao lado de outros deuses, Loki nunca teve chance de ascender ao trono. Ele sempre foi um bobo da corte, insultado e humilhado por seus semelhantes.', 'PVC e tecido', '10 x 10x 25 cm', '600g', 300.00, '2023-09-13 19:49:00', '2023-10-06 22:12:26', 'A', '', 'S', 'N', 'S'),
(23, 'Thor', 'thor1.jpg', 'thor2.jpg', 'thor3.jpg', 'Thor foi um deus presente na mitologia nórdica conhecido por ser filho de Odin e deus do trovão, do céu, da tempestade e da agricultura. Esse deus era o mais popular na religiosidade nórdica, sendo muito venerado pelos camponeses. Tinha como símbolo o seu martelo mjölnir, usado por ele em batalhas.', 'PVC', '24 cm x \n7 cmx 17 cm', '500g', 250.00, '2023-09-13 19:50:00', '2023-10-03 01:06:52', 'A', '', 'S', 'N', 'N'),
(24, 'Noob Saibot', 'noobsaibot1.jpg', 'noobsaibot2.jpg', 'noobsaibot3.jpg', 'Noob Saibot é um personagem fictício da série de jogos de luta Mortal Kombat. Ele estreou como um personagem secreto e não jogável em Mortal Kombat II, onde era uma silhueta negra dos outros ninjas', 'PVC e Tecido', '22 cm x \r\n5 cmx 16 cm', '450g', 210.00, '2023-09-13 19:55:00', '2023-10-06 22:12:27', 'A', '', 'N', 'N', 'S'),
(25, 'Banne', 'bane1.jpg', 'bane2.jpg', 'bane3.jpg', '', 'PVC e tecido', '5 x 6 x 19 cm', '500g', 250.00, '2023-09-13 21:41:00', '2023-10-03 01:03:12', 'A', '', 'S', 'N', 'N'),
(26, 'Shao Khan', 'shaokhan1.jpg', 'shaokhan2.jpg', 'shaokhan3.jpg', 'hao Kahn, o Konquistador, é representado como a personificação do mal. Em muitos aspectos, ele se assemelha a um grande guerreiro asiático, e é bem conhecido entre os membros do Mortal Kombat por sua força divina que rivaliza, se não completamente, com a de Raiden, o Deus do Trovão. ', 'ABS', '26x8x20 cm', '650g', 370.00, '2023-09-13 21:45:00', '2023-09-27 01:08:34', 'A', '90%', 'N', 'S', 'N'),
(27, 'Ryu', 'ryu1.jpg', 'ryu2.jpg', 'ryu3.jpg', 'Ryu é órfão e ficou sem saber sobre o paradeiro de seus pais. Acabou sendo adotado por um homem chamado Gouken, este o levando para o caminho das artes marciais e sendo a figura paterna deste lutador. Passado algum tempo, Gouken viria a formar no seu dojo o filho mimado de seu melhor amigo: Ken Masters.', 'Polystone', '35 x 48 x 40 cm', '700g', 400.00, '2023-09-13 21:48:00', '2023-09-15 00:58:00', 'A', '', 'N', 'N', 'N'),
(28, 'Ken', 'ken1.jpg', 'ken2.jpg', 'ken3.jpg', 'A história de Ken começa aos seus 12 anos. Seu pai, um grande ricaço, pensou que seu filho precisava de disciplina. Assim, ele não se tornaria uma criança mimada, jogando toda a fortuna da família no lixo. Com isto, envio-o ao Japão para treinar com seu melhor amigo, mestre Gouken.', 'PVC e tecido', '5 x 6 x 19 cm', '250g', 350.00, '2023-09-13 21:56:00', '2023-09-15 00:58:00', 'A', '', 'N', 'N', 'N'),
(29, 'King shazam', 'kingshazam1.jpg', 'kingshazam2.jpg', 'kingshazam3.jpg', 'King Shazam é ​​um codinome brevemente adotado por Billy Batson quando ele foi corrompido por The Batman Who Laughs através de um Batarang com Joker Venom . Durante este período, sua forma civil tornou-se Robin , um dos Groblins de Bruce . Ele também foi membro do Secret Six .', 'Polystone', '50 x 60 x 20 cm', '800g', 700.00, '2023-09-13 22:01:00', '2023-10-03 01:10:21', 'A', '', 'S', 'N', 'N'),
(30, 'Freeza', 'freeza1.jpg', 'freeza2.jpg', 'freeza3.jpg', 'Freeza é o grande imperador do Universo. Filho do Rei Cold, no passado se aliou aos Saiyajins, que tinham derrotado os Tsufurujins e tomado conta do Planeta Vegeta (antes chamado de Plant), em suas conquistas pelo universo.', 'Plastico', '60x40x20 cm', '450g', 440.00, '2023-09-13 22:03:00', '2023-09-15 00:58:00', 'A', '', 'N', 'N', 'N'),
(31, 'Bills', 'beerus1.jpg', 'beerus2.jpg', 'beerus3.jpg', 'É um anti herói da franquia Dragon Ball Super, o mesmo atua como o deus da destruição do universo 7. O mesmo odeia Champa pelo simples fato de que o mesmo são irmãos e sempre tentam superar o outro, nisto eles se debatem lutam ou até mesmo entram em combate de comida para ver quem se sai o melhor.', 'PVC', '5 x 6 x 25 cm', '300g', 200.00, '2023-09-13 22:08:00', '2023-09-27 01:08:34', 'A', '15%', 'N', 'S', 'N'),
(32, 'Homem aranha ', 'spiderman1.jpg', 'spiderman2.jpg', 'spiderman3.jpg', 'A história do Homem-Aranha começa quando o tímido Peter Parker, órfão de pai e mãe, que vive com os tios (Ben e May) em Forest Hills, no bairro nova-iorquino de Queens (EUA), visita um laboratório onde decorre uma experiência que revolucionará a sua vida, durante a qual uma aranha é atingida por uma potente radiação.', 'plastico', '‎8 x 8 x 15 cm', '200g', 150.00, '2023-09-13 22:12:00', '2023-09-27 01:08:34', 'A', '15%', 'N', 'S', 'N'),
(33, 'Thanos', 'thanos1.jpg', 'thanos2.jpg', 'thanos3.jpg', 'Thanos foi um dos últimos filhos de A\'Lars, progenitor da segunda colônia de Eternos em Titã, e de Sui-San, a última sobrevivente da colônia original de Eternos em Titã. Nascido com a pele roxa e com um corpo enorme devido a Síndrome Deviante, Thanos era uma criança sombria que ficou obcecado com o conceito da morte.', 'PVC', '5 x 6 x 41 cm', '400g', 350.00, '2023-09-15 21:30:00', '2023-09-16 00:54:46', 'A', '', 'N', 'N', 'N'),
(34, 'Sagat', 'sagat1.jpg', 'sagat2.jpg', 'sagat3.jpg', 'Sagat conquistou o título de Imperador do Muay Thai quando ainda era adolescente, se tornando então um herói nacional na Thailândia.Com o tempo treinou Adon, e anos mais tarde criou o primeiro torneio Street Fighter, a fim de provar que não era somente o mais forte lutador de Muay Thai do mundo mas sim o mais forte lutador do mundo.', 'Plastico', '20x18x12cm', '300g', 200.00, '2023-09-15 21:30:00', '2023-10-02 12:20:54', 'A', '', 'S', 'N', 'N'),
(35, 'Stormtrooper', 'stormtrooper1.jpg', 'stormtrooper2.jpg', 'stormtrooper3.jpg', 'Stormtrooper era um ramo independente militar sob o Exército Imperial do Império Galático. O Corpo era mais conhecido por seu numeroso suprimento de obedientes stormtroopers treinados em Academias Imperiais em toda a galáxia, bem como sua devoção fanática a Darth Vader.', 'PVC', '15 x 20 x 30 cm', '400g', 180.00, '2023-09-15 21:30:00', '2023-10-03 01:06:52', 'A', '', 'S', 'N', 'N');

-- --------------------------------------------------------

--
-- Estrutura para tabela `titleuniversogeek`
--

CREATE TABLE `titleuniversogeek` (
  `idtitleUniversoGeek` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) NOT NULL DEFAULT '',
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `titleuniversogeek`
--

INSERT INTO `titleuniversogeek` (`idtitleUniversoGeek`, `title`, `cadastro`, `alteracao`, `ativo`) VALUES
(1, 'SEU MUNDO GEEK CHEGOU', '2023-09-24 16:23:00', '2023-10-04 21:08:46', 'A'),
(2, 'UNIVERSO GEEK ', '2023-10-04 18:09:22', '2023-10-04 21:09:34', 'D');

-- --------------------------------------------------------

--
-- Estrutura para tabela `universogeek`
--

CREATE TABLE `universogeek` (
  `iduniversoGeek` int(10) UNSIGNED NOT NULL,
  `img` varchar(60) NOT NULL DEFAULT '',
  `cadastro` datetime DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `universogeek`
--

INSERT INTO `universogeek` (`iduniversoGeek`, `img`, `cadastro`, `alteracao`, `ativo`) VALUES
(1, 'DBZ.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(2, 'marvel.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(3, 'narutoLogo.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(4, 'avengersMarvel.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(5, 'DC.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(6, 'nitendo.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(7, 'onePiece.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(8, 'sega.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(9, 'streetFighter.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(10, 'warnerBros.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(11, 'mortalKombat.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(12, 'mario.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(13, 'cavaleirosdoZodiaco.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(14, 'cod.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(15, 'dokeyKong.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(16, 'nanatsunoTaizai.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(17, 'atackOnTitan.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(18, 'bleach.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(19, 'jojo.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(20, 'jujutsuKaizen.png', '2023-09-24 16:29:00', '2023-09-24 19:29:35', 'A'),
(21, 'deathNote.png', '2023-09-24 16:29:00', '2023-09-24 19:29:36', 'A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `papel` enum('usuario_comum','administrador') NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `sobrenome`, `email`, `senha`, `papel`, `cadastro`, `alteracao`, `ativo`) VALUES
(1, 'Rafael', 'Fagundes', 'rafaelfagundes762@gmail.com', 'glock123', 'administrador', '0000-00-00 00:00:00', '2023-10-02 21:34:20', 'A'),
(2, 'Fernando', 'Bulim', 'fernandin@gmail.com', 'flamengo123', 'usuario_comum', '0000-00-00 00:00:00', '2023-10-02 21:39:30', 'A'),
(3, 'erilaine', 'rodrigues', 'erilainerodrigues@gmail.com', 'pedrin', 'administrador', '0000-00-00 00:00:00', '2023-10-03 00:49:04', 'A'),
(4, 'rafael', 'rafaelfaugndes', 'rafaelfagundes762@gmail.com', 'rafae', 'administrador', '2023-10-04 18:33:04', '2023-10-04 21:33:44', 'A'),
(5, 'rafael', 'Fagundes', 'rafaelfagundes762@gmail.com', 'teste', 'usuario_comum', '2023-10-04 20:51:46', '2023-10-04 23:51:46', 'A'),
(6, 'teste', 'Bulim', 'rafaelfagundes762@gmail.com', 'rafae', 'usuario_comum', '2023-10-04 21:09:41', '2023-10-05 00:09:41', 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idbanner`);

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentarios`);

--
-- Índices de tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`idinfo`);

--
-- Índices de tabela `init`
--
ALTER TABLE `init`
  ADD PRIMARY KEY (`idinit`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices de tabela `titleuniversogeek`
--
ALTER TABLE `titleuniversogeek`
  ADD PRIMARY KEY (`idtitleUniversoGeek`);

--
-- Índices de tabela `universogeek`
--
ALTER TABLE `universogeek`
  ADD PRIMARY KEY (`iduniversoGeek`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `idbanner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentarios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `info`
--
ALTER TABLE `info`
  MODIFY `idinfo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `init`
--
ALTER TABLE `init`
  MODIFY `idinit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `titleuniversogeek`
--
ALTER TABLE `titleuniversogeek`
  MODIFY `idtitleUniversoGeek` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `universogeek`
--
ALTER TABLE `universogeek`
  MODIFY `iduniversoGeek` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
