-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2015 at 11:43 PM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_adicionais`
--

CREATE TABLE IF NOT EXISTS `tb_adicionais` (
`cd_adicionais` int(11) NOT NULL,
  `no_adicional` varchar(45) DEFAULT NULL,
  `vl_adicional` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bebida`
--

CREATE TABLE IF NOT EXISTS `tb_bebida` (
`cd_bebida` int(11) NOT NULL,
  `no_bebida` text,
  `vl_bebida` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
`cd_cliente` int(11) NOT NULL,
  `no_cliente` text,
  `nu_telefone` text,
  `cpf` varchar(15) DEFAULT NULL,
  `ds_endereco` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_entragador`
--

CREATE TABLE IF NOT EXISTS `tb_entragador` (
`cd_entragador` int(11) NOT NULL,
  `no_entregador` char(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_entrega`
--

CREATE TABLE IF NOT EXISTS `tb_entrega` (
`cd_entrega` int(11) NOT NULL,
  `dt_saida` text,
  `cd_pedido` int(11) NOT NULL,
  `cd_entragador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
`cd_funcionario` int(11) NOT NULL,
  `no_funcionario` text,
  `login` text,
  `senha` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pedido`
--

CREATE TABLE IF NOT EXISTS `tb_pedido` (
`cd_pedido` int(11) NOT NULL,
  `cd_funcionario` int(11) NOT NULL,
  `cd_cliente` int(11) NOT NULL,
  `bo_pedido` varchar(45) DEFAULT NULL,
  `dt_pedido` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pedido_adicionais`
--

CREATE TABLE IF NOT EXISTS `tb_pedido_adicionais` (
  `cd_pedido` int(11) NOT NULL,
  `cd_adicionais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pedido_bebida`
--

CREATE TABLE IF NOT EXISTS `tb_pedido_bebida` (
  `cd_pedido` int(11) NOT NULL,
  `cd_bebida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pedido_pizza`
--

CREATE TABLE IF NOT EXISTS `tb_pedido_pizza` (
  `cd_pedido` int(11) NOT NULL,
  `cd_pizza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pizza`
--

CREATE TABLE IF NOT EXISTS `tb_pizza` (
`cd_pizza` int(11) NOT NULL,
  `no_pizza` text,
  `vl_pizza` text,
  `tb_pizza_medida_cd_tamanho` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pizza_medida`
--

CREATE TABLE IF NOT EXISTS `tb_pizza_medida` (
`cd_tamanho` int(11) NOT NULL,
  `no_tamanho` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_adicionais`
--
ALTER TABLE `tb_adicionais`
 ADD PRIMARY KEY (`cd_adicionais`);

--
-- Indexes for table `tb_bebida`
--
ALTER TABLE `tb_bebida`
 ADD PRIMARY KEY (`cd_bebida`);

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
 ADD PRIMARY KEY (`cd_cliente`);

--
-- Indexes for table `tb_entragador`
--
ALTER TABLE `tb_entragador`
 ADD PRIMARY KEY (`cd_entragador`);

--
-- Indexes for table `tb_entrega`
--
ALTER TABLE `tb_entrega`
 ADD PRIMARY KEY (`cd_entrega`), ADD KEY `fk_tb_entrega_tb_pedido1_idx` (`cd_pedido`), ADD KEY `fk_tb_entrega_tb_entragador1_idx` (`cd_entragador`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
 ADD PRIMARY KEY (`cd_funcionario`);

--
-- Indexes for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
 ADD PRIMARY KEY (`cd_pedido`), ADD KEY `fk_tb_pedido_tb_funcionario1_idx` (`cd_funcionario`), ADD KEY `fk_tb_pedido_tb_cliente1_idx` (`cd_cliente`);

--
-- Indexes for table `tb_pedido_adicionais`
--
ALTER TABLE `tb_pedido_adicionais`
 ADD PRIMARY KEY (`cd_pedido`,`cd_adicionais`), ADD KEY `fk_tb_pedido_has_tb_adicionais_tb_adicionais1_idx` (`cd_adicionais`), ADD KEY `fk_tb_pedido_has_tb_adicionais_tb_pedido1_idx` (`cd_pedido`);

--
-- Indexes for table `tb_pedido_bebida`
--
ALTER TABLE `tb_pedido_bebida`
 ADD PRIMARY KEY (`cd_pedido`,`cd_bebida`), ADD KEY `fk_tb_pedido_has_tb_bebida_tb_bebida1_idx` (`cd_bebida`), ADD KEY `fk_tb_pedido_has_tb_bebida_tb_pedido1_idx` (`cd_pedido`);

--
-- Indexes for table `tb_pedido_pizza`
--
ALTER TABLE `tb_pedido_pizza`
 ADD PRIMARY KEY (`cd_pedido`,`cd_pizza`), ADD KEY `fk_tb_pedido_has_tb_pizza_tb_pizza1_idx` (`cd_pizza`), ADD KEY `fk_tb_pedido_has_tb_pizza_tb_pedido1_idx` (`cd_pedido`);

--
-- Indexes for table `tb_pizza`
--
ALTER TABLE `tb_pizza`
 ADD PRIMARY KEY (`cd_pizza`,`tb_pizza_medida_cd_tamanho`), ADD KEY `fk_tb_pizza_tb_pizza_medida_idx` (`tb_pizza_medida_cd_tamanho`);

--
-- Indexes for table `tb_pizza_medida`
--
ALTER TABLE `tb_pizza_medida`
 ADD PRIMARY KEY (`cd_tamanho`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_adicionais`
--
ALTER TABLE `tb_adicionais`
MODIFY `cd_adicionais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_bebida`
--
ALTER TABLE `tb_bebida`
MODIFY `cd_bebida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
MODIFY `cd_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_entragador`
--
ALTER TABLE `tb_entragador`
MODIFY `cd_entragador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_entrega`
--
ALTER TABLE `tb_entrega`
MODIFY `cd_entrega` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
MODIFY `cd_funcionario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
MODIFY `cd_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pizza`
--
ALTER TABLE `tb_pizza`
MODIFY `cd_pizza` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pizza_medida`
--
ALTER TABLE `tb_pizza_medida`
MODIFY `cd_tamanho` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_entrega`
--
ALTER TABLE `tb_entrega`
ADD CONSTRAINT `fk_tb_entrega_tb_entragador1` FOREIGN KEY (`cd_entragador`) REFERENCES `tb_entragador` (`cd_entragador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tb_entrega_tb_pedido1` FOREIGN KEY (`cd_pedido`) REFERENCES `tb_pedido` (`cd_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
ADD CONSTRAINT `fk_tb_pedido_tb_cliente1` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tb_pedido_tb_funcionario1` FOREIGN KEY (`cd_funcionario`) REFERENCES `tb_funcionario` (`cd_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pedido_adicionais`
--
ALTER TABLE `tb_pedido_adicionais`
ADD CONSTRAINT `fk_tb_pedido_has_tb_adicionais_tb_adicionais1` FOREIGN KEY (`cd_adicionais`) REFERENCES `tb_adicionais` (`cd_adicionais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tb_pedido_has_tb_adicionais_tb_pedido1` FOREIGN KEY (`cd_pedido`) REFERENCES `tb_pedido` (`cd_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pedido_bebida`
--
ALTER TABLE `tb_pedido_bebida`
ADD CONSTRAINT `fk_tb_pedido_has_tb_bebida_tb_bebida1` FOREIGN KEY (`cd_bebida`) REFERENCES `tb_bebida` (`cd_bebida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tb_pedido_has_tb_bebida_tb_pedido1` FOREIGN KEY (`cd_pedido`) REFERENCES `tb_pedido` (`cd_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pedido_pizza`
--
ALTER TABLE `tb_pedido_pizza`
ADD CONSTRAINT `fk_tb_pedido_has_tb_pizza_tb_pedido1` FOREIGN KEY (`cd_pedido`) REFERENCES `tb_pedido` (`cd_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tb_pedido_has_tb_pizza_tb_pizza1` FOREIGN KEY (`cd_pizza`) REFERENCES `tb_pizza` (`cd_pizza`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pizza`
--
ALTER TABLE `tb_pizza`
ADD CONSTRAINT `fk_tb_pizza_tb_pizza_medida` FOREIGN KEY (`tb_pizza_medida_cd_tamanho`) REFERENCES `tb_pizza_medida` (`cd_tamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
