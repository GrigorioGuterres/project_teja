-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:18 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teja02`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `rl_aldeia`
--
CREATE TABLE IF NOT EXISTS `rl_aldeia` (
`id` int(11)
,`naran_aldeia` varchar(255)
,`id_municipiu` varchar(255)
,`id_posto` varchar(255)
,`id_suco` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rl_funsionario`
--
CREATE TABLE IF NOT EXISTS `rl_funsionario` (
`id` int(11)
,`naran_funsionariu` varchar(255)
,`hela_fatin` varchar(255)
,`relijiao` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rl_mun`
--
CREATE TABLE IF NOT EXISTS `rl_mun` (
`id` int(11)
,`naran_municipio` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rl_post`
--
CREATE TABLE IF NOT EXISTS `rl_post` (
`id` int(11)
,`naran_posto` varchar(255)
,`id_municipiu` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rl_pro`
--
CREATE TABLE IF NOT EXISTS `rl_pro` (
`id` int(11)
,`id_funsionario` varchar(255)
,`data_moris` varchar(255)
,`sexo` varchar(255)
,`id_municipiu` varchar(255)
,`id_posto` varchar(255)
,`id_suco` varchar(255)
,`id_aldeia` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rl_suku`
--
CREATE TABLE IF NOT EXISTS `rl_suku` (
`id` int(11)
,`id_municipiu` varchar(255)
,`id_posto` varchar(255)
,`obs` varchar(255)
,`naran_suco` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aldeia`
--

CREATE TABLE IF NOT EXISTS `tb_aldeia` (
  `id` int(11) NOT NULL,
  `naran_aldeia` varchar(255) NOT NULL,
  `id_municipiu` varchar(255) NOT NULL,
  `id_posto` varchar(255) NOT NULL,
  `id_suco` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_funsionario`
--

CREATE TABLE IF NOT EXISTS `tb_funsionario` (
  `id` int(11) NOT NULL,
  `naran_funsionariu` varchar(255) NOT NULL,
  `hela_fatin` varchar(255) NOT NULL,
  `relijiao` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_municipiu`
--

CREATE TABLE IF NOT EXISTS `tb_municipiu` (
  `id` int(11) NOT NULL,
  `naran_municipio` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_municipiu`
--

INSERT INTO `tb_municipiu` (`id`, `naran_municipio`, `obs`) VALUES
(1, 'dili', 'diak'),
(2, 'baucau', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_posto`
--

CREATE TABLE IF NOT EXISTS `tb_posto` (
  `id` int(11) NOT NULL,
  `naran_posto` varchar(255) NOT NULL,
  `id_municipiu` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_posto`
--

INSERT INTO `tb_posto` (`id`, `naran_posto`, `id_municipiu`, `obs`) VALUES
(1, 'bagiua', 'baucau', 'diak'),
(2, 'dom aleixo', 'dili', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prossesu`
--

CREATE TABLE IF NOT EXISTS `tb_prossesu` (
  `id` int(11) NOT NULL,
  `id_funsionario` varchar(255) NOT NULL,
  `data_moris` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `id_municipiu` varchar(255) NOT NULL,
  `id_posto` varchar(255) NOT NULL,
  `id_suco` varchar(255) NOT NULL,
  `id_aldeia` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_suco`
--

CREATE TABLE IF NOT EXISTS `tb_suco` (
  `id` int(11) NOT NULL,
  `id_municipiu` varchar(255) NOT NULL,
  `id_posto` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `naran_suco` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suco`
--

INSERT INTO `tb_suco` (`id`, `id_municipiu`, `id_posto`, `obs`, `naran_suco`) VALUES
(1, 'dili', 'bagiua', 'diak', 'alaua leten'),
(2, 'dili', 'dom aleixo', 'diak', 'becora');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `Naran_kompletu` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-06-04 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `images`, `Naran_kompletu`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'admin', '$2y$10$8tk.WKxp.a1qi.XryAiab./mIXy9ecKzHQmNxAamnN8y4pJik8fbq', 'admin@gmail.com', 'http://localhost/teja02/uploads/files/452m_g9d7ixw3lq.jpg', 'Teza', NULL, NULL, '2024-06-04 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure for view `rl_aldeia`
--
DROP TABLE IF EXISTS `rl_aldeia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_aldeia` AS select `ta`.`id` AS `id`,`ta`.`naran_aldeia` AS `naran_aldeia`,`ta`.`id_municipiu` AS `id_municipiu`,`ta`.`id_posto` AS `id_posto`,`ta`.`id_suco` AS `id_suco`,`ta`.`obs` AS `obs` from `tb_aldeia` `ta`;

-- --------------------------------------------------------

--
-- Structure for view `rl_funsionario`
--
DROP TABLE IF EXISTS `rl_funsionario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_funsionario` AS select `tf`.`id` AS `id`,`tf`.`naran_funsionariu` AS `naran_funsionariu`,`tf`.`hela_fatin` AS `hela_fatin`,`tf`.`relijiao` AS `relijiao`,`tf`.`obs` AS `obs` from `tb_funsionario` `tf`;

-- --------------------------------------------------------

--
-- Structure for view `rl_mun`
--
DROP TABLE IF EXISTS `rl_mun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_mun` AS select `tm`.`id` AS `id`,`tm`.`naran_municipio` AS `naran_municipio`,`tm`.`obs` AS `obs` from `tb_municipiu` `tm`;

-- --------------------------------------------------------

--
-- Structure for view `rl_post`
--
DROP TABLE IF EXISTS `rl_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_post` AS select `tp`.`id` AS `id`,`tp`.`naran_posto` AS `naran_posto`,`tp`.`id_municipiu` AS `id_municipiu`,`tp`.`obs` AS `obs` from `tb_posto` `tp`;

-- --------------------------------------------------------

--
-- Structure for view `rl_pro`
--
DROP TABLE IF EXISTS `rl_pro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_pro` AS select `tp`.`id` AS `id`,`tp`.`id_funsionario` AS `id_funsionario`,`tp`.`data_moris` AS `data_moris`,`tp`.`sexo` AS `sexo`,`tp`.`id_municipiu` AS `id_municipiu`,`tp`.`id_posto` AS `id_posto`,`tp`.`id_suco` AS `id_suco`,`tp`.`id_aldeia` AS `id_aldeia`,`tp`.`obs` AS `obs` from `tb_prossesu` `tp`;

-- --------------------------------------------------------

--
-- Structure for view `rl_suku`
--
DROP TABLE IF EXISTS `rl_suku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rl_suku` AS select `ts`.`id` AS `id`,`ts`.`id_municipiu` AS `id_municipiu`,`ts`.`id_posto` AS `id_posto`,`ts`.`obs` AS `obs`,`ts`.`naran_suco` AS `naran_suco` from `tb_suco` `ts`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aldeia`
--
ALTER TABLE `tb_aldeia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_funsionario`
--
ALTER TABLE `tb_funsionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_municipiu`
--
ALTER TABLE `tb_municipiu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_posto`
--
ALTER TABLE `tb_posto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prossesu`
--
ALTER TABLE `tb_prossesu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suco`
--
ALTER TABLE `tb_suco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aldeia`
--
ALTER TABLE `tb_aldeia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_funsionario`
--
ALTER TABLE `tb_funsionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_municipiu`
--
ALTER TABLE `tb_municipiu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_posto`
--
ALTER TABLE `tb_posto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_prossesu`
--
ALTER TABLE `tb_prossesu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_suco`
--
ALTER TABLE `tb_suco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
