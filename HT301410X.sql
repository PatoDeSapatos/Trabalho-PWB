-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27-Jun-2023 às 22:59
-- Versão do servidor: 10.2.38-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `HT301410X`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `comentario` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `idUser`, `comentario`) VALUES
(8, 19, 'uauauaua'),
(12, 22, 'menti nao ta'),
(13, 23, 'site muito legal!'),
(14, 23, 'site muito legal!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `nick` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `datac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `nick`, `email`, `senha`, `telefone`, `cidade`, `foto`, `datac`) VALUES
(8, 'a', 'a', 'a', 'a', 'a', 'a', '2020-10-19 09_06_14-pombo sentado - Pesquisa Google - Opera.png', '2023-06-24'),
(9, 'AaA', 'a', 'a', 'a', 'a', 'a', '2020-10-19 09_06_14-pombo sentado - Pesquisa Google - Opera.png', '2023-06-24'),
(10, 'Felipe', 'Felipe', 'teste', '123456', 'teste', 'teste', '2020-10-19 09_06_14-pombo sentado - Pesquisa Google - Opera.png', '2023-06-24'),
(12, 'abner', 'abner', 'abner@abner', 'abner', 'abner', 'abner', 'cachorro.png', '2023-06-25'),
(13, 'pedro', 'pedro', 'pedro@pedro', 'pedro', 'pedro', 'pedro', 'lontra.png', '2023-06-25'),
(14, 'fagner', 'fagner', 'fagner@fagner', 'fagner', 'fagner', 'fagner', 'cachorro.png', '2023-06-25'),
(15, 'alison', 'alison', 'alison@alison', 'alison', 'alison', 'alison', 'leao.png', '2023-06-25'),
(16, 'agghfjgj', 'lkfÃ§ghl', 'kfglhÃ§kg', 'fghkflgÃ§', 'fkglhkflÃ§', 'fgklÃ§hkfglÃ§h', 'guaxinim.png', '2023-06-25'),
(18, 'lucas', 'lucas', 'lucas', 'lucas', 'lucas', 'lucas', 'leao.png', '2023-06-25'),
(19, 'cenoura', 'cenoura', 'cenoura', 'cenoura', 'cenoura', 'cenoura', 'guaxinim.png', '2023-06-25'),
(20, 'Walter White', 'Heisenberg', 'blue@meth', 'jessse', '69', 'New MÃ©xico', 'guaxinim.png', '2023-06-25'),
(21, 'Felipe', 'Albino', 'felipecongio@gmail.com', '25052006', '1991178023', 'PaulÃ­nia', 'leao.png', '2023-06-26'),
(22, 'julia', 'jujupinkemo', 'juju@emo', 'emo', '666', 'HortolÃ¢ndia', 'leao.png', '2023-06-26'),
(23, 'sedro', 'sedro', 'sedro@sedro', 'sedro', 'sedro', 'sedro', 'lontra.png', '2023-06-26'),
(24, 'felipe', 'fernandes', 'fernandes@aasdasd', 'felipe', 'felipe', 'felipe', 'cachorro.png', '2023-06-27'),
(25, 'Felipe', 'Felipe', 'afos@asd', 'paulo', 'paulo', 'paulo', 'leao.png', '2023-06-27'),
(26, 'Felipe', 'Albino', 'felipecongioalbino11@gmail.com', '25052006', '19981182', 'PaulÃ­nia', 'leao.png', '2023-06-27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_idUser` (`idUser`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_id_idUser` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
