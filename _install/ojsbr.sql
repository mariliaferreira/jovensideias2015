-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2015 at 03:31 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ojsbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `submit_documento`
--

CREATE TABLE IF NOT EXISTS `submit_documento` (
`id_doc` bigint(20) unsigned NOT NULL,
  `doc_1_titulo` char(200) DEFAULT NULL,
  `doc_2_titulo` char(200) DEFAULT NULL,
  `doc_3_titulo` char(200) DEFAULT NULL,
  `doc_1_subtitulo` char(200) DEFAULT NULL,
  `doc_2_subtitulo` char(200) DEFAULT NULL,
  `doc_3_subtitulo` char(200) DEFAULT NULL,
  `doc_1_idioma` char(5) DEFAULT '',
  `doc_2_idioma` char(5) DEFAULT NULL,
  `doc_3_idioma` char(5) DEFAULT NULL,
  `doc_protocolo` char(7) DEFAULT NULL,
  `doc_data` int(11) DEFAULT '0',
  `doc_hora` char(5) DEFAULT '',
  `doc_editor` char(7) DEFAULT NULL,
  `doc_relator` char(7) DEFAULT NULL,
  `doc_revisor` char(7) DEFAULT NULL,
  `doc_diagramador` char(7) DEFAULT NULL,
  `doc_dt_atualizado` int(11) DEFAULT '19000101',
  `doc_dt_prazo` int(11) DEFAULT '19000101',
  `doc_autor_principal` char(7) DEFAULT NULL,
  `doc_status` char(7) DEFAULT NULL,
  `doc_atual` char(7) DEFAULT NULL,
  `doc_id` char(20) DEFAULT NULL,
  `doc_tipo` char(7) DEFAULT NULL,
  `doc_cep` char(7) DEFAULT NULL,
  `doc_journal_id` char(7) DEFAULT '',
  `doc_protocolo_mae` char(7) DEFAULT NULL,
  `doc_update` int(11) DEFAULT NULL,
  `slog_protocolo` char(7) DEFAULT NULL,
  `pl_autor` char(1) DEFAULT NULL,
  `doc_titulo` text,
  `doc_resumo` text,
  `doc_palavra_chave` text,
  `doc_sessao` bigint(20) DEFAULT '0',
  `doc_referencias` text,
  `doc_field_1` text,
  `doc_field_2` text,
  `doc_field_3` text,
  `doc_field_4` text,
  `doc_field_5` text,
  `doc_field_6` text,
  `doc_field_7` text,
  `doc_field_8` text
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `submit_documento`
--

INSERT INTO `submit_documento` (`id_doc`, `doc_1_titulo`, `doc_2_titulo`, `doc_3_titulo`, `doc_1_subtitulo`, `doc_2_subtitulo`, `doc_3_subtitulo`, `doc_1_idioma`, `doc_2_idioma`, `doc_3_idioma`, `doc_protocolo`, `doc_data`, `doc_hora`, `doc_editor`, `doc_relator`, `doc_revisor`, `doc_diagramador`, `doc_dt_atualizado`, `doc_dt_prazo`, `doc_autor_principal`, `doc_status`, `doc_atual`, `doc_id`, `doc_tipo`, `doc_cep`, `doc_journal_id`, `doc_protocolo_mae`, `doc_update`, `slog_protocolo`, `pl_autor`, `doc_titulo`, `doc_resumo`, `doc_palavra_chave`, `doc_sessao`, `doc_referencias`, `doc_field_1`, `doc_field_2`, `doc_field_3`, `doc_field_4`, `doc_field_5`, `doc_field_6`, `doc_field_7`, `doc_field_8`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL, 'pt_BR', NULL, NULL, '', 20150514, '14:58', NULL, NULL, NULL, NULL, 19000101, 19000101, NULL, NULL, NULL, '72952105987', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '', NULL, NULL, NULL, NULL, NULL, 'pt_BR', NULL, NULL, '', 20150514, '15:00', NULL, NULL, NULL, NULL, 19000101, 19000101, NULL, '@', NULL, '72952105987', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '', NULL, NULL, NULL, NULL, NULL, 'pt_BR', NULL, NULL, '', 20150514, '15:31', NULL, NULL, NULL, NULL, 19000101, 19000101, NULL, '@', NULL, '72952105987', NULL, NULL, '0000087', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submit_documentos_obrigatorio`
--

CREATE TABLE IF NOT EXISTS `submit_documentos_obrigatorio` (
`id_sdo` bigint(20) unsigned NOT NULL,
  `sdo_codigo` char(7) DEFAULT NULL,
  `sdo_descricao` char(50) DEFAULT NULL,
  `sdo_content` text,
  `sdo_info` text,
  `sdo_ativo` int(11) DEFAULT '1',
  `sdo_obrigatorio` int(11) DEFAULT '0',
  `sdo_tipo` char(5) DEFAULT NULL,
  `sdo_upload` int(11) DEFAULT '0',
  `sdo_modelo` char(100) DEFAULT NULL,
  `sdo_ordem` int(11) DEFAULT '0',
  `sdo_journal_id` int(11) DEFAULT '0',
  `sdo_tipodoc` char(5) DEFAULT '0',
  `pl_autor` char(1) DEFAULT NULL,
  `sdo_ged_tipo` char(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `submit_documento_autor`
--

CREATE TABLE IF NOT EXISTS `submit_documento_autor` (
`id_sma` bigint(20) unsigned NOT NULL,
  `sma_protocolo` char(7) DEFAULT NULL,
  `sma_nome` char(100) DEFAULT NULL,
  `sma_funcao` char(1) DEFAULT NULL,
  `sma_instituicao` char(15) DEFAULT NULL,
  `sma_pais` char(7) DEFAULT NULL,
  `sma_uf` char(2) DEFAULT NULL,
  `sma_cidade` char(20) DEFAULT NULL,
  `sma_ativo` int(11) DEFAULT NULL,
  `sma_titulacao` char(3) DEFAULT NULL,
  `sma_email` char(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `submit_files`
--

CREATE TABLE IF NOT EXISTS `submit_files` (
`id_doc` bigint(20) unsigned NOT NULL,
  `doc_dd0` char(7) DEFAULT NULL,
  `doc_tipo` char(5) DEFAULT NULL,
  `doc_ano` char(4) DEFAULT NULL,
  `doc_filename` text,
  `doc_status` char(1) DEFAULT NULL,
  `doc_data` int(11) DEFAULT NULL,
  `doc_hora` char(8) DEFAULT NULL,
  `doc_arquivo` text,
  `doc_extensao` char(4) DEFAULT NULL,
  `doc_size` double DEFAULT NULL,
  `doc_versao` char(4) DEFAULT NULL,
  `doc_ativo` int(11) DEFAULT NULL,
  `doc_user` char(7) DEFAULT NULL,
  `doc_autor` char(1) DEFAULT '0',
  `doc_all` char(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `submit_files_tipo`
--

CREATE TABLE IF NOT EXISTS `submit_files_tipo` (
`id_doct` bigint(20) unsigned NOT NULL,
  `doct_nome` char(50) DEFAULT NULL,
  `doct_codigo` char(5) DEFAULT NULL,
  `doct_publico` int(11) DEFAULT NULL,
  `doct_avaliador` int(11) DEFAULT NULL,
  `doct_autor` int(11) DEFAULT NULL,
  `doct_restrito` int(11) DEFAULT NULL,
  `doct_ativo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submit_documento`
--
ALTER TABLE `submit_documento`
 ADD UNIQUE KEY `id_doc` (`id_doc`);

--
-- Indexes for table `submit_documentos_obrigatorio`
--
ALTER TABLE `submit_documentos_obrigatorio`
 ADD PRIMARY KEY (`id_sdo`), ADD UNIQUE KEY `id_sdo` (`id_sdo`);

--
-- Indexes for table `submit_documento_autor`
--
ALTER TABLE `submit_documento_autor`
 ADD UNIQUE KEY `id_sma` (`id_sma`);

--
-- Indexes for table `submit_files`
--
ALTER TABLE `submit_files`
 ADD UNIQUE KEY `id_doc` (`id_doc`);

--
-- Indexes for table `submit_files_tipo`
--
ALTER TABLE `submit_files_tipo`
 ADD UNIQUE KEY `id_doct` (`id_doct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submit_documento`
--
ALTER TABLE `submit_documento`
MODIFY `id_doc` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `submit_documentos_obrigatorio`
--
ALTER TABLE `submit_documentos_obrigatorio`
MODIFY `id_sdo` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submit_documento_autor`
--
ALTER TABLE `submit_documento_autor`
MODIFY `id_sma` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submit_files`
--
ALTER TABLE `submit_files`
MODIFY `id_doc` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submit_files_tipo`
--
ALTER TABLE `submit_files_tipo`
MODIFY `id_doct` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
