-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2013 at 02:20 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zadmin_lawfirm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

-- CREATE TABLE IF NOT EXISTS `ci_sessions` (
--   `session_id` varchar(40) NOT NULL DEFAULT '0',
--   `ip_address` varchar(45) NOT NULL DEFAULT '0',
--   `user_agent` varchar(120) NOT NULL,
--   `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
--   `user_data` text NOT NULL,
--   PRIMARY KEY (`session_id`),
--   KEY `last_activity_idx` (`last_activity`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- 
-- --
-- -- Dumping data for table `ci_sessions`
-- --
-- 
-- INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
-- ('8d7708f77de19a7ce9aac3b0e500a08e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379686064, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"6";s:8:"username";s:5:"prime";s:9:"firstname";s:6:"Tyrone";s:8:"lastname";s:9:"Fernandez";s:12:"is_logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_archive`
--

-- CREATE TABLE IF NOT EXISTS `tbl_account_archive` (
--   `account_Archive_id` int(150) NOT NULL AUTO_INCREMENT,
--   `userAccount_id` int(150) NOT NULL,
--   `userAccount_status_id` int(150) NOT NULL,
--   PRIMARY KEY (`account_Archive_id`),
--   KEY `userAccount_id` (`userAccount_id`,`userAccount_status_id`),
--   KEY `account_Archive_id` (`account_Archive_id`),
--   KEY `account_Archive_id_2` (`account_Archive_id`),
--   KEY `account_Archive_id_3` (`account_Archive_id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_history`
--

CREATE TABLE IF NOT EXISTS `tbl_account_history` (
  `account_History_id` int(150) NOT NULL AUTO_INCREMENT,
  `userAccount_id` int(150) NOT NULL,
  `account_History_createdby` varchar(90) NOT NULL,
  `account_History_datecreated` date NOT NULL,
  `account_History_timecreated` time NOT NULL,
  `account_History_datemodified` date NOT NULL,
  `account_History_timemodified` time NOT NULL,
  `account_History_modifiedby` varchar(90) NOT NULL,
  PRIMARY KEY (`account_History_id`),
  KEY `userAccount_id` (`userAccount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE IF NOT EXISTS `tbl_case` (
  `case_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_name` varchar(30) NOT NULL,
  `case_number` varchar(150) NOT NULL,
  PRIMARY KEY (`case_id`),
  KEY `client_id` (`client_id`,`defendant_id`,`userAccount_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_case`
--

INSERT INTO `tbl_case` (`case_id`, `client_id`, `defendant_id`, `userAccount_id`, `case_name`, `case_number`) VALUES
(1, 1, 1, 6, 'DOE v. WELLS FARGO', ''),
(4, 4, 4, 6, 'FERNANDEZ v. BUELA', ''),
(7, 7, 7, 6, 'DOE v. DOUGH', ''),
(8, 8, 8, 6, 'MICANOR v. HALILI', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_amendment`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_amendment` (
  `amendment_id` int(150) NOT NULL AUTO_INCREMENT,
  `plaintiff_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `recordeddocuments_id` int(150) NOT NULL,
  `amendment_date` date NOT NULL,
  `originaldeedoftrustlender_id` int(150) NOT NULL,
  PRIMARY KEY (`amendment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_amendment_history`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_amendment_history` (
  `casecriteria_amendment_history_id` int(150) NOT NULL,
  `casecriteria_amendment_history_datecreated` date NOT NULL,
  `casecriteria_amendment_history_datemodified` date NOT NULL,
  `casecriteria_amendment_history_createdbyuseraccountid` int(150) NOT NULL,
  `casecriteria_amendment_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `casecriteria_amendment_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_foreclosed`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_foreclosed` (
  `casecriteria_foreclosed_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `foreclosed_recordeddocuments_id` int(150) NOT NULL,
  `originaldeedoftrustlender_id` int(150) NOT NULL,
  `amendment` tinyint(1) NOT NULL,
  `useraccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  PRIMARY KEY (`casecriteria_foreclosed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_foreclosed_history`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_foreclosed_history` (
  `casecriteria_foreclosed_history_id` int(150) NOT NULL,
  `casecriteria_foreclosed_history_datecreated` date NOT NULL,
  `casecriteria_foreclosed_history_datemodified` date NOT NULL,
  `casecriteria_foreclosed_history_createdbyuseraccountid` int(150) NOT NULL,
  `casecriteria_foreclosed_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `casecriteria_foreclosed_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_inforeclosure`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_inforeclosure` (
  `casecriteria_inforeclosure_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `inforeclosure_recordeddocuments_id` int(150) NOT NULL,
  `originaldeedoftrustlender_id` int(150) NOT NULL,
  `amendment` int(10) NOT NULL,
  `useraccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  PRIMARY KEY (`casecriteria_inforeclosure_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_casecriteria_inforeclosure`
--

INSERT INTO `tbl_casecriteria_inforeclosure` (`casecriteria_inforeclosure_id`, `client_id`, `defendant_id`, `courthouse_id`, `inforeclosure_recordeddocuments_id`, `originaldeedoftrustlender_id`, `amendment`, `useraccount_id`, `case_id`) VALUES
(1, 1, 1, 1, 1, 1, 0, 6, 1),
(4, 4, 4, 4, 4, 4, 0, 6, 4),
(7, 7, 7, 7, 7, 7, 0, 6, 7),
(8, 8, 8, 8, 8, 8, 0, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_inforeclosure_history`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_inforeclosure_history` (
  `casecriteria_inforeclosure_history_id` int(150) NOT NULL,
  `casecriteria_inforeclosure_history_datecreated` datetime NOT NULL,
  `casecriteria_inforeclosure_history_datemodified` datetime NOT NULL,
  `casecriteria_inforeclosure_history_createdbyuseraccountid` int(150) NOT NULL,
  `casecriteria_inforeclosure_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `casecriteria_inforeclosure_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_casecriteria_inforeclosure_history`
--

INSERT INTO `tbl_casecriteria_inforeclosure_history` (`casecriteria_inforeclosure_history_id`, `casecriteria_inforeclosure_history_datecreated`, `casecriteria_inforeclosure_history_datemodified`, `casecriteria_inforeclosure_history_createdbyuseraccountid`, `casecriteria_inforeclosure_history_modifiedbyuseraccountid`, `casecriteria_inforeclosure_id`) VALUES
(1, '2013-09-17 12:43:46', '0000-00-00 00:00:00', 6, 0, 1),
(2, '2013-09-17 14:43:46', '0000-00-00 00:00:00', 6, 0, 4),
(3, '2013-09-20 21:51:56', '0000-00-00 00:00:00', 6, 0, 7),
(4, '2013-09-20 22:04:29', '0000-00-00 00:00:00', 6, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_nodrescinded`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_nodrescinded` (
  `casecriteria_nodrescinded_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `noticeofdefault_documents_id` int(150) NOT NULL,
  `originaldeedoftrustlender_id` int(150) NOT NULL,
  `amendment` tinyint(1) NOT NULL,
  `useraccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  PRIMARY KEY (`casecriteria_nodrescinded_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casecriteria_nodrescinded_history`
--

CREATE TABLE IF NOT EXISTS `tbl_casecriteria_nodrescinded_history` (
  `casecriteria_nodrescinded_history_id` int(150) NOT NULL,
  `casecriteria_nodrescinded_history_datecreated` date NOT NULL,
  `casecriteria_nodrescinded_history_datemodified` date NOT NULL,
  `casecriteria_nodrescinded_history_createdbyuseraccountid` int(150) NOT NULL,
  `casecriteria_nodrescinded_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `casecriteria_nodrescinded_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_casedocument_history`
--

CREATE TABLE IF NOT EXISTS `tbl_casedocument_history` (
  `template_Casedocument_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `template_Summons100_id` int(150) NOT NULL,
  `template_Summons200_id` int(150) NOT NULL,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `template_Proofsummons030p_id` int(150) NOT NULL,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `caseDocument_lastaccessed` datetime NOT NULL,
  `caseDocument_lastaccessedby` varchar(90) NOT NULL,
  `caseDocument_createdby` varchar(90) NOT NULL,
  `caseDocument_datecreated` date NOT NULL,
  `caseDocument_timecreated` time NOT NULL,
  `caseDocument_datemodified` date NOT NULL,
  `caseDocument_timemodified` time NOT NULL,
  `caseDocument_modifiedby` varchar(90) NOT NULL,
  PRIMARY KEY (`template_Casedocument_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`template_Civilcasecoversheet_id`,`template_Summons100_id`,`template_Summons200_id`,`template_Feewaiverrequest001_id`,`template_Feewaiverorder003_id`,`template_Proofsummons030_id`,`template_Proofsummons030p_id`,`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case_history`
--

CREATE TABLE IF NOT EXISTS `tbl_case_history` (
  `case_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `case_history_datecreated` datetime NOT NULL,
  `case_history_datemodified` datetime NOT NULL,
  `case_history_createdbyuseraccountid` int(150) NOT NULL,
  `case_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  PRIMARY KEY (`case_history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_case_history`
--

INSERT INTO `tbl_case_history` (`case_history_id`, `case_history_datecreated`, `case_history_datemodified`, `case_history_createdbyuseraccountid`, `case_history_modifiedbyuseraccountid`, `case_id`) VALUES
(2, '2013-09-17 15:11:26', '0000-00-00 00:00:00', 6, 0, 2),
(4, '2013-09-17 19:36:25', '0000-00-00 00:00:00', 6, 0, 4),
(7, '2013-09-20 21:51:56', '0000-00-00 00:00:00', 6, 0, 7),
(8, '2013-09-20 22:04:29', '0000-00-00 00:00:00', 6, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_actioncause`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_actioncause` (
  `civilCasecoversheet_actioncause_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `civilCasecoversheet_actioncause_description` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_actioncause_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_actionsuit`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_actionsuit` (
  `civilCasecoversheet_actionsuit_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `civilCasecoversheet_actionsuit_description` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_actionsuit_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_casecomplexity`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_casecomplexity` (
  `civilCasecoversheet_casecomplexity_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `civilCasecoversheet_complexityfactors_id` int(150) NOT NULL,
  `civilCasecoversheet_casecomplexity_description` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_casecomplexity_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`,`civilCasecoversheet_complexityfactors_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_caseremedies`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_caseremedies` (
  `civilCasecoversheet_caseremedies_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `civilCasecoversheet_caseremedies_a` varchar(500) NOT NULL,
  `civilCasecoversheet_caseremedies_b` varchar(500) NOT NULL,
  `civilCasecoversheet_caseremedies_c` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_caseremedies_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_casetype`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_casetype` (
  `civilCasecoversheet_casetype_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `civilCasecoversheet_casetype_description` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_casetype_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_complexity`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_complexity` (
  `civilCasecoversheet_ complexity_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `civilCasecoversheet_complexity_description` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_ complexity_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_complexityfactors`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_complexityfactors` (
  `civilCasecoversheet_ complexityfactors_id` int(150) NOT NULL AUTO_INCREMENT,
  `civilCasecoversheet_casecomplexity_id` int(150) NOT NULL,
  `civilCasecoversheet_complexityfactors_a` varchar(500) NOT NULL,
  `civilCasecoversheet_complexityfactors_b` varchar(500) NOT NULL,
  `civilCasecoversheet_complexityfactors_c` varchar(500) NOT NULL,
  `civilCasecoversheet_complexityfactors_d` varchar(500) NOT NULL,
  `civilCasecoversheet_complexityfactors_e` varchar(500) NOT NULL,
  `civilCasecoversheet_complexityfactors_f` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_ complexityfactors_id`),
  KEY `civilCasecoversheet_casecomplexity_id` (`civilCasecoversheet_casecomplexity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilcasecoversheet_limitation`
--

CREATE TABLE IF NOT EXISTS `tbl_civilcasecoversheet_limitation` (
  `civilCasecoversheet_limitation_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `civilCasecoversheet_limitation_description` varchar(500) NOT NULL,
  PRIMARY KEY (`civilCasecoversheet_limitation_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `client_id` int(150) NOT NULL AUTO_INCREMENT,
  `userAccount_id` int(150) NOT NULL,
  `client_Lastname` varchar(30) NOT NULL,
  `client_Firstname` varchar(30) NOT NULL,
  `client_Middlename` varchar(30) NOT NULL,
  PRIMARY KEY (`client_id`),
  KEY `case_id` (`userAccount_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`client_id`, `userAccount_id`, `client_Lastname`, `client_Firstname`, `client_Middlename`) VALUES
(1, 6, 'Buela', 'Christian', 'Radoc'),
(4, 6, 'Fernandez', 'Tyrone', 'Valencia'),
(7, 6, 'Smith', 'John', 'Doe'),
(8, 6, 'Micanor', 'Jose', 'Binatog');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clientmailingaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_clientmailingaddress` (
  `client_Mailingaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `client_Mailingaddress_street` varchar(30) NOT NULL,
  `client_Mailingaddress_city` varchar(30) NOT NULL,
  `client_Mailingaddress_zipcode` varchar(150) NOT NULL,
  `client_Mailingaddress_cityonly` varchar(200) NOT NULL,
  `client_Mailingaddress_telephonenumber` varchar(150) NOT NULL,
  PRIMARY KEY (`client_Mailingaddress_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_clientmailingaddress`
--

INSERT INTO `tbl_clientmailingaddress` (`client_Mailingaddress_id`, `client_id`, `client_Mailingaddress_street`, `client_Mailingaddress_city`, `client_Mailingaddress_zipcode`, `client_Mailingaddress_cityonly`, `client_Mailingaddress_telephonenumber`) VALUES
(1, 1, '1120 N Street', 'Roseville', 'CA', 'Roseville', '(831)-204-000-123'),
(4, 4, 'Sta. Escolastica Village', 'Roseville', 'CA', 'Baguio', '(074) 424-2162'),
(7, 7, '1120 N Street', 'Roseville', 'CA', 'Roseville', '(831)-204-000-123'),
(8, 8, '1120 N Street', 'Roseville', 'CA', 'Roseville', '(831)-204-000-123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clientsubjectpropertyaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_clientsubjectpropertyaddress` (
  `client_Subjectpropertyaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `client_Subjectpropertyaddress_street` varchar(200) NOT NULL,
  `client_Subjectpropertyaddress_city` varchar(150) NOT NULL,
  `client_Subjectpropertyaddress_zipcode` varchar(150) NOT NULL,
  `client_Subjectpropertyaddress_apnnumber` varchar(150) NOT NULL,
  PRIMARY KEY (`client_Subjectpropertyaddress_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_clientsubjectpropertyaddress`
--

INSERT INTO `tbl_clientsubjectpropertyaddress` (`client_Subjectpropertyaddress_id`, `client_id`, `client_Subjectpropertyaddress_street`, `client_Subjectpropertyaddress_city`, `client_Subjectpropertyaddress_zipcode`, `client_Subjectpropertyaddress_apnnumber`) VALUES
(1, 1, '1120 N Street', 'Roseville', 'CA', '010 233 789'),
(4, 4, '232 Crescencia Village', 'Baguio', 'CA', '123456789'),
(7, 7, '1120 N Street', 'Roseville', 'CA', '123789'),
(8, 8, '1120 N Street', 'Roseville', 'CA', '123789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_defendant`
--

CREATE TABLE IF NOT EXISTS `tbl_client_defendant` (
  `client_defendant_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  PRIMARY KEY (`client_defendant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_client_defendant`
--

INSERT INTO `tbl_client_defendant` (`client_defendant_id`, `client_id`, `defendant_id`, `case_id`, `courthouse_id`, `userAccount_id`) VALUES
(1, 1, 1, 1, 1, 6),
(4, 4, 4, 4, 4, 6),
(7, 7, 7, 7, 7, 6),
(8, 8, 8, 8, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_history`
--

CREATE TABLE IF NOT EXISTS `tbl_client_history` (
  `client_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_history_datecreated` datetime NOT NULL,
  `client_history_datemodified` datetime NOT NULL,
  `client_history_createdbyuseraccountid` int(150) NOT NULL,
  `client_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  PRIMARY KEY (`client_history_id`),
  KEY `client_history_createdbyuseraccountid` (`client_history_createdbyuseraccountid`),
  KEY `client_history_modifiedbyuseraccountid` (`client_history_modifiedbyuseraccountid`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_client_history`
--

INSERT INTO `tbl_client_history` (`client_history_id`, `client_history_datecreated`, `client_history_datemodified`, `client_history_createdbyuseraccountid`, `client_history_modifiedbyuseraccountid`, `client_id`) VALUES
(1, '2013-09-17 12:42:10', '0000-00-00 00:00:00', 6, 0, 1),
(4, '2013-09-17 19:36:25', '0000-00-00 00:00:00', 6, 0, 4),
(7, '2013-09-20 21:51:56', '0000-00-00 00:00:00', 6, 0, 7),
(8, '2013-09-20 22:04:29', '0000-00-00 00:00:00', 6, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courthouse`
--

CREATE TABLE IF NOT EXISTS `tbl_courthouse` (
  `courthouse_id` int(150) NOT NULL AUTO_INCREMENT,
  `courthouse_name` varchar(200) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  PRIMARY KEY (`courthouse_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_courthouse`
--

INSERT INTO `tbl_courthouse` (`courthouse_id`, `courthouse_name`, `client_id`, `defendant_id`) VALUES
(1, 'Hall of Justice', 1, 1),
(4, 'Hall of Justice', 4, 4),
(7, 'Hall of Justice', 7, 7),
(8, '1120 N Street', 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courthouseaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_courthouseaddress` (
  `courthouseaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `courthouse_state` varchar(150) NOT NULL,
  `courthouse_cityaddress` varchar(200) NOT NULL,
  `courthouse_streetaddress` varchar(200) NOT NULL,
  `courthouse_zipcodeaddress` varchar(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  PRIMARY KEY (`courthouseaddress_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_courthouseaddress`
--

INSERT INTO `tbl_courthouseaddress` (`courthouseaddress_id`, `courthouse_state`, `courthouse_cityaddress`, `courthouse_streetaddress`, `courthouse_zipcodeaddress`, `courthouse_id`) VALUES
(1, '', 'San Diego', '1120 N Street', 'CA', 1),
(4, '', 'San Diego', '1120 N Street', 'CA', 4),
(7, '', 'San Diego', '1120 N Street', 'CA', 7),
(8, '', 'Roseville', '1120 N Street', 'CA', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courthouse_history`
--

CREATE TABLE IF NOT EXISTS `tbl_courthouse_history` (
  `courthouse_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `courthouse_history_datecreated` datetime NOT NULL,
  `courthouse_history_datemodified` datetime NOT NULL,
  `courthouse_history_createdbyuseraccountid` int(11) NOT NULL,
  `courthouse_history_modifiedbyuseraccountid` int(11) NOT NULL,
  `courthouse_id` int(11) NOT NULL,
  PRIMARY KEY (`courthouse_history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_courthouse_history`
--

INSERT INTO `tbl_courthouse_history` (`courthouse_history_id`, `courthouse_history_datecreated`, `courthouse_history_datemodified`, `courthouse_history_createdbyuseraccountid`, `courthouse_history_modifiedbyuseraccountid`, `courthouse_id`) VALUES
(1, '2013-09-17 12:42:10', '0000-00-00 00:00:00', 6, 0, 1),
(4, '2013-09-17 19:36:25', '0000-00-00 00:00:00', 6, 0, 4),
(7, '2013-09-20 21:51:56', '0000-00-00 00:00:00', 6, 0, 7),
(8, '2013-09-20 22:04:29', '0000-00-00 00:00:00', 6, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant` (
  `defendant_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_name` varchar(250) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  PRIMARY KEY (`defendant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant`
--

INSERT INTO `tbl_defendant` (`defendant_id`, `defendant_name`, `userAccount_id`) VALUES
(1, 'WELLS FARGO', 6),
(4, 'BUELA', 6),
(7, 'WELLS FARGO', 6),
(8, 'HALILI', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendantaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_defendantaddress` (
  `defendant_Address_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_id` int(150) NOT NULL,
  `defendant_Address_street` varchar(30) NOT NULL,
  `defendant_Address_city` varchar(30) NOT NULL,
  `defendant_Address_zipcode` int(30) NOT NULL,
  PRIMARY KEY (`defendant_Address_id`),
  KEY `defendant_id` (`defendant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_anotherbonafidebuyer`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_anotherbonafidebuyer` (
  `defendant_anotherbonafidebuyer_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_id` int(11) NOT NULL,
  `defendant_anotherbonafidebuyer_name` varchar(200) NOT NULL,
  `defendant_anotherbonafidebuyer_shortname` varchar(200) NOT NULL,
  PRIMARY KEY (`defendant_anotherbonafidebuyer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_anotherbonafidebuyer`
--

INSERT INTO `tbl_defendant_anotherbonafidebuyer` (`defendant_anotherbonafidebuyer_id`, `defendant_id`, `defendant_anotherbonafidebuyer_name`, `defendant_anotherbonafidebuyer_shortname`) VALUES
(1, 1, 'JOHN SMITH', 'SMITH'),
(4, 4, 'JENNY TALS', 'TALS'),
(7, 7, 'GINA CALLS', 'CALLS'),
(8, 8, 'MALLY SIA', 'SIA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_anotherbonafidebuyeraddress`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_anotherbonafidebuyeraddress` (
  `defendant_anotherbonafidebuyeraddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_anotherbonafidebuyeraddress_street` varchar(200) NOT NULL,
  `defendant_anotherbonafidebuyeraddress_city` varchar(200) NOT NULL,
  `defendant_anotherbonafidebuyeraddress_zipcode` varchar(200) NOT NULL,
  `defendant_anotherbonafidebuyer_id` int(150) NOT NULL,
  PRIMARY KEY (`defendant_anotherbonafidebuyeraddress_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_anotherbonafidebuyeraddress`
--

INSERT INTO `tbl_defendant_anotherbonafidebuyeraddress` (`defendant_anotherbonafidebuyeraddress_id`, `defendant_anotherbonafidebuyeraddress_street`, `defendant_anotherbonafidebuyeraddress_city`, `defendant_anotherbonafidebuyeraddress_zipcode`, `defendant_anotherbonafidebuyer_id`) VALUES
(1, '1120 N Street', 'Roseville', 'CA', 1),
(4, '1120 N Street', 'Roseville', 'CA', 4),
(7, '1120 N Street', 'Roseville', 'CA', 7),
(8, '1120 N Street', 'Roseville', 'CA', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_beneficiary`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_beneficiary` (
  `defendant_Beneficiary_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_id` int(150) NOT NULL,
  `defendant_Beneficiary_name` varchar(300) NOT NULL,
  `defendant_Beneficiary_shortname` varchar(150) NOT NULL,
  PRIMARY KEY (`defendant_Beneficiary_id`),
  KEY `defendant_id` (`defendant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_beneficiary`
--

INSERT INTO `tbl_defendant_beneficiary` (`defendant_Beneficiary_id`, `defendant_id`, `defendant_Beneficiary_name`, `defendant_Beneficiary_shortname`) VALUES
(1, 1, 'RESIDENTIAL RFMS14000-UNSOLD', 'RESIDENTIAL TRUST'),
(4, 4, 'RESIDENTIAL RMS14000-UNSOLD', 'RESIDENTIAL FULL TRUST'),
(7, 7, 'RESIDENTIAL DISABLED RFM45678 UNSOLD', 'RESIDENTIAL DISABLED'),
(8, 8, 'RESIDENTIAL SQUATER RSM15980', 'RESIDENTIAL SQUATER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_beneficiaryaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_beneficiaryaddress` (
  `defendant_Beneficiaryaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_Beneficiary_id` int(150) NOT NULL,
  `defendant_BeneficiaryAddress_street` varchar(30) NOT NULL,
  `defendant_BeneficiaryAddress_city` varchar(30) NOT NULL,
  `defendant_BeneficiaryAddress_zipcode` varchar(30) NOT NULL,
  PRIMARY KEY (`defendant_Beneficiaryaddress_id`),
  KEY `defendant_Beneficiary_id` (`defendant_Beneficiary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_beneficiaryaddress`
--

INSERT INTO `tbl_defendant_beneficiaryaddress` (`defendant_Beneficiaryaddress_id`, `defendant_Beneficiary_id`, `defendant_BeneficiaryAddress_street`, `defendant_BeneficiaryAddress_city`, `defendant_BeneficiaryAddress_zipcode`) VALUES
(1, 1, '1120 N Street', 'Roseville', 'CA'),
(4, 4, '1120 N Street', 'Roseville', 'CA'),
(7, 7, '1120 N Street', 'Roseville', 'CA'),
(8, 8, '1120 N Street', 'Roseville', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_foreclosuretrustee`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_foreclosuretrustee` (
  `defendant_foreclosuretrustee_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_id` int(150) NOT NULL,
  `defendant_foreclosuretrustee_name` varchar(300) NOT NULL,
  `defendant_foreclosuretrustee_shortname` varchar(30) NOT NULL,
  PRIMARY KEY (`defendant_foreclosuretrustee_id`),
  KEY `defendant_id` (`defendant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_foreclosuretrustee`
--

INSERT INTO `tbl_defendant_foreclosuretrustee` (`defendant_foreclosuretrustee_id`, `defendant_id`, `defendant_foreclosuretrustee_name`, `defendant_foreclosuretrustee_shortname`) VALUES
(1, 1, 'CAL-WESTERN RECONVEYANCE', 'CAL-WESTERN'),
(4, 4, 'CAL-EASTERN RECONVERGE', 'CAL-EASTERN'),
(7, 7, 'CAL-EASTERN WEST RECONVERGE', 'CAL-EASTERN WEST'),
(8, 8, 'CAL-NORTHERN SOUTH RECONVERGE', 'CAL-NORTHERN SOUTH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_foreclosuretrusteeaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_foreclosuretrusteeaddress` (
  `defendant_foreclosuretrusteeaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_foreclosuretrustee_id` int(150) NOT NULL,
  `defendant_floreclosuretrusteeaddress_street` varchar(30) NOT NULL,
  `defendant_floreclosuretrusteeaddress_city` varchar(30) NOT NULL,
  `defendant_floreclosuretrusteeaddress_zipcode` varchar(150) NOT NULL,
  PRIMARY KEY (`defendant_foreclosuretrusteeaddress_id`),
  KEY `defendant_Subjecttrustee_id` (`defendant_foreclosuretrustee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_foreclosuretrusteeaddress`
--

INSERT INTO `tbl_defendant_foreclosuretrusteeaddress` (`defendant_foreclosuretrusteeaddress_id`, `defendant_foreclosuretrustee_id`, `defendant_floreclosuretrusteeaddress_street`, `defendant_floreclosuretrusteeaddress_city`, `defendant_floreclosuretrusteeaddress_zipcode`) VALUES
(1, 1, '1120 N Street', 'Roseville', 'CA'),
(4, 4, 'Session Road', 'Baguio', 'CA'),
(7, 7, '1120 N Street', 'Roseville', 'CA'),
(8, 8, '1120 N Street', 'Roseville', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_grantee`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_grantee` (
  `defendant_Grantee_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_id` int(150) NOT NULL,
  `defendant_Grantee_name` varchar(30) NOT NULL,
  `defendant_Grantee_shortname` varchar(30) NOT NULL,
  PRIMARY KEY (`defendant_Grantee_id`),
  KEY `defendant_Granteeaddress_id` (`defendant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_grantee`
--

INSERT INTO `tbl_defendant_grantee` (`defendant_Grantee_id`, `defendant_id`, `defendant_Grantee_name`, `defendant_Grantee_shortname`) VALUES
(1, 1, 'ASSET SENTRY UTA8 TRUST', 'ASSET SENTRY'),
(4, 4, 'ASSET SENTRIC UTA9 FULL TRUST', 'ASSET SENTRIC'),
(7, 7, 'ASSET CENTER UTA10 TRUSTEER', 'ASSET CENTER'),
(8, 8, 'ASSET DE SENTRO UTA10 TRUSTEER', 'ASSET DE SENTRO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_granteeaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_granteeaddress` (
  `defendant_Granteeaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_Grantee_id` int(150) NOT NULL,
  `defendant_Granteeaddress_street` varchar(30) NOT NULL,
  `defendant_Granteeaddress_city` varchar(30) NOT NULL,
  `defendant_Granteeaddress_zipcode` varchar(30) NOT NULL,
  PRIMARY KEY (`defendant_Granteeaddress_id`),
  KEY `defendant_Grantee_id` (`defendant_Grantee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_granteeaddress`
--

INSERT INTO `tbl_defendant_granteeaddress` (`defendant_Granteeaddress_id`, `defendant_Grantee_id`, `defendant_Granteeaddress_street`, `defendant_Granteeaddress_city`, `defendant_Granteeaddress_zipcode`) VALUES
(1, 1, '1120 N Street', 'Roseville', 'CA'),
(4, 4, 'Diego Silang', 'Roseville', 'CA'),
(7, 7, '1120 N Street', 'Roseville', 'CA'),
(8, 8, '1120 N Street', 'Roseville', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_defendant_history`
--

CREATE TABLE IF NOT EXISTS `tbl_defendant_history` (
  `defendant_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `defendant_history_datecreated` datetime NOT NULL,
  `defendant_history_datemodified` datetime NOT NULL,
  `defendant_history_createdbyuseraccountid` int(150) NOT NULL,
  `defendant_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  PRIMARY KEY (`defendant_history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_defendant_history`
--

INSERT INTO `tbl_defendant_history` (`defendant_history_id`, `defendant_history_datecreated`, `defendant_history_datemodified`, `defendant_history_createdbyuseraccountid`, `defendant_history_modifiedbyuseraccountid`, `defendant_id`) VALUES
(1, '2013-09-17 12:42:10', '0000-00-00 00:00:00', 6, 0, 1),
(4, '2013-09-17 19:36:25', '0000-00-00 00:00:00', 6, 0, 4),
(7, '2013-09-20 21:51:56', '0000-00-00 00:00:00', 6, 0, 7),
(8, '2013-09-20 22:04:29', '0000-00-00 00:00:00', 6, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document_archive`
--

CREATE TABLE IF NOT EXISTS `tbl_document_archive` (
  `document_Archive_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `template_Summons100_id` int(150) NOT NULL,
  `template_Summons200_id` int(150) NOT NULL,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `template_Proofsummons030p_id` int(150) NOT NULL,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `document_Status_id` int(150) NOT NULL,
  PRIMARY KEY (`document_Archive_id`),
  KEY `template_Civilcasecoversheet_id` (`template_Civilcasecoversheet_id`,`template_Summons100_id`,`template_Summons200_id`,`template_Feewaiverrequest001_id`,`template_Feewaiverorder003_id`,`template_Proofsummons030_id`,`template_Proofsummons030p_id`,`template_Sdcourtform_id`,`document_Status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document_status`
--

CREATE TABLE IF NOT EXISTS `tbl_document_status` (
  `document_Status_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `template_Summons100_id` int(150) NOT NULL,
  `template_Summons200_id` int(150) NOT NULL,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `template_Proofsummons030p_id` int(150) NOT NULL,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `document_Status` varchar(30) NOT NULL,
  PRIMARY KEY (`document_Status_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`template_Civilcasecoversheet_id`,`template_Summons100_id`,`template_Summons200_id`,`template_Feewaiverrequest001_id`,`template_Feewaiverorder003_id`,`template_Proofsummons030_id`,`template_Proofsummons030p_id`,`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_afterreview`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_afterreview` (
  `feeWaiverorder003_afterreview_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `feeWaiverorder003_afterreview_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_afterreview_id`),
  KEY `template_Feewaiverorder003_id` (`template_Feewaiverorder003_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_denies`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_denies` (
  `feeWaiverorder003_denies_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `feeWaiverorder003_denies1_id` int(150) NOT NULL,
  `feeWaiverorder003_denies2_id` int(150) NOT NULL,
  `feeWaiverorder003_denies_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_denies_id`),
  KEY `template_Feewaiverorder003_id` (`template_Feewaiverorder003_id`,`feeWaiverorder003_denies1_id`,`feeWaiverorder003_denies2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_denies1`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_denies1` (
  `feeWaiverorder003_denies1_id` int(150) NOT NULL,
  `feeWaiverorder003_denies_id` int(150) NOT NULL,
  `feeWaiverorder003_denies1_description` varchar(500) NOT NULL,
  `feeWaiverorder003_denies1_specific` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_denies1_id`),
  KEY `feeWaiverorder003_denies_id` (`feeWaiverorder003_denies_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_denies2`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_denies2` (
  `feeWaiverorder003_denies2_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverorder003_denies_id` int(150) NOT NULL,
  `feeWaiverorder003_denies2_description` varchar(500) NOT NULL,
  `feeWaiverorder003_denies2_specific` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_denies2_id`),
  KEY `feeWaiverorder003_denies_id` (`feeWaiverorder003_denies_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_fileddate`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_fileddate` (
  `feeWaiverorder003_fileddate_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiveroorder003_id` int(150) NOT NULL,
  `feeWaiverorder003_fileddate_current` date NOT NULL,
  `feeWaiverorder003_fileddate_previous` date NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_fileddate_id`),
  KEY `template_Feewaiveroorder003_id` (`template_Feewaiveroorder003_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_grants`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_grants` (
  `feeWaiverorder003_grants_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `feeWaiverorder003_grants1_id` int(150) NOT NULL,
  `feeWaiverorder003_grants2_id` int(150) NOT NULL,
  `feeWaiverorder003_grants3_id` int(150) NOT NULL,
  `eeWaiverorder003_grants_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_grants_id`),
  KEY `template_Feewaiverorder003_id` (`template_Feewaiverorder003_id`,`feeWaiverorder003_grants1_id`,`feeWaiverorder003_grants2_id`,`feeWaiverorder003_grants3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_grants1`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_grants1` (
  `feeWaiverorder003_grants1_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverorder003_grants_id` int(150) NOT NULL,
  `feeWaiverorder003_grants1_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_grants1_id`),
  KEY `feeWaiverorder003_grants_id` (`feeWaiverorder003_grants_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_grants2`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_grants2` (
  `feeWaiverorder003_grants2_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverorder003_grants_id` int(150) NOT NULL,
  `feeWaiverorder003_grants2_jury` varchar(500) NOT NULL,
  `feeWaiverorder003 _grants2_experts` varchar(500) NOT NULL,
  `feeWaiverorder003_grants2_reporters` varchar(500) NOT NULL,
  `feeWaiverorder003_grants2_officer` varchar(500) NOT NULL,
  `feeWaiverorder003_grants2_interpreter` varchar(500) NOT NULL,
  `feeWaiverorder003_grants2_others` varchar(500) NOT NULL,
  `feeWaiverorder003_grants2_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_grants2_id`),
  KEY `feeWaiverorder003_grants_id` (`feeWaiverorder003_grants_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_grants3`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_grants3` (
  `feeWaiverorder003_grants3_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverorder003_grants_id` int(150) NOT NULL,
  `feeWaiverorder003_grants3_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_grants3_id`),
  KEY `feeWaiverorder003_grants_id` (`feeWaiverorder003_grants_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_hearinginfo`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_hearinginfo` (
  `feeWaiverorder003_hearinginfo_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `feeWaiverorder003_hearinginfoaddress_id` int(150) NOT NULL,
  `feeWaiverorder003_hearinginfo_date` date NOT NULL,
  `feeWaiverorder003_hearinginfo_time` time NOT NULL,
  `feeWaiverorder003_hearinginfo_department` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_hearinginfo_id`),
  KEY `template_Feewaiverorder003_id` (`template_Feewaiverorder003_id`,`feeWaiverorder003_hearinginfoaddress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_hearinginfoaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_hearinginfoaddress` (
  `feeWaiverorder003_hearinginfoaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverorder003_hearinginfo_id` int(150) NOT NULL,
  `feeWaiverorder003_hearingmailingaddress_id` int(150) NOT NULL,
  `feeWaiverorder003_hearinginfoaddress_street` varchar(30) NOT NULL,
  `feeWaiverorder003_hearinginfoaddress_city` varchar(30) NOT NULL,
  `feeWaiverorder003_hearinginfoaddress_zipcode` int(150) NOT NULL,
  `feeWaiverorder003_hearinginfoaddress_branch` varchar(30) NOT NULL,
  `feeWaiverorder003_hearinginfoaddress_county` varchar(30) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_hearinginfoaddress_id`),
  KEY `feeWaiverorder003_hearinginfo_id` (`feeWaiverorder003_hearinginfo_id`,`feeWaiverorder003_hearingmailingaddress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_hearingmailingaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_hearingmailingaddress` (
  `feeWaiverorder003_hearingmailingaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverorder003_hearinginfoaddress_id` int(150) NOT NULL,
  `feeWaiverorder003_hearingmailingaddress_street` varchar(30) NOT NULL,
  `feeWaiverorder003_hearingmailingaddress_city` varchar(30) NOT NULL,
  `feeWaiverorder003_hearingmailingaddress_zipcode` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_hearingmailingaddress_id`),
  KEY `feeWaiverorder003_hearinginfoaddress_id` (`feeWaiverorder003_hearinginfoaddress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_moreinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_moreinfo` (
  `feeWaiverorder003_moreinfo_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `feeWaiverorder003_moreinfo_description1` varchar(500) NOT NULL,
  `feeWaiverorder003_moreinfo_description2` varchar(500) NOT NULL,
  `feeWaiverorder003_moreinfo_description3` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_moreinfo_id`),
  KEY `template_Feewaiverorder003_id` (`template_Feewaiverorder003_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverorder003_servicecertificate`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverorder003_servicecertificate` (
  `feeWaiverorder003_servicecertificate_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `feeWaiverorder003_servicecertificate_certificate` varchar(500) NOT NULL,
  `feeWaiverorder003_servicecertificate_handed` varchar(500) NOT NULL,
  `feeWaiverorder003_servicecertificate_mailed` varchar(500) NOT NULL,
  `feeWaiverorder003_servicecertificate_city` varchar(500) NOT NULL,
  `feeWaiverorder003_servicecertificate_date` date NOT NULL,
  PRIMARY KEY (`feeWaiverorder003_servicecertificate_id`),
  KEY `template_Feewaiverorder003_id` (`template_Feewaiverorder003_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_addition`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_addition` (
  `feeWaiverrequest001_addition_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_addition_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_addition_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_courtfees`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_courtfees` (
  `feeWaiverrequest001_CourtFees_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees_a` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees_b` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_CourtFees_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_courtfees5`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_courtfees5` (
  `feeWaiverrequest001_CourtFees5_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees5a_id` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5b_id` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5c_id` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_CourtFees5_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_courtfees5a`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_courtfees5a` (
  `feeWaiverrequest001_courtfees5a_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_courtfees5_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees5a_medical` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5a_ssi` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5a_ssp` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5a_county` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5a_ihss` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5a_cal` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5a_capi` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_courtfees5a_id`),
  KEY `feeWaiverrequest001_courtfees5_id` (`feeWaiverrequest001_courtfees5_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_courtfees5b`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_courtfees5b` (
  `feeWaiverrequest001_courtfees5b_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_courtfees5_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees5b_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_courtfees5b_id`),
  KEY `feeWaiverrequest001_courtfees5_id` (`feeWaiverrequest001_courtfees5_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_courtfees5c`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_courtfees5c` (
  `feeWaiverrequest001_courtfees5c_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_courtfees5_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees5c_option` varchar(500) NOT NULL,
  `feeWaiverrequest001_courtfees5c_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_courtfees5c_id`),
  KEY `feeWaiverrequest001_courtfees5_id` (`feeWaiverrequest001_courtfees5_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_courtfees6`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_courtfees6` (
  `feeWaiverrequest001_courtfees6_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees6_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_courtfees6_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_householdincome`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_householdincome` (
  `feeWaiverrequest001_householdincome_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_householdincomea_id` int(150) NOT NULL,
  `feeWaiverrequest001_householdincomeb_id` int(150) NOT NULL,
  `feeWaiverrequest001_totalmonthlyhousehold_id` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_householdincome_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`,`feeWaiverrequest001_householdincomea_id`,`feeWaiverrequest001_householdincomeb_id`,`feeWaiverrequest001_totalmonthlyhousehold_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_householdincomea`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_householdincomea` (
  `feeWaiverrequest001_householdincomea_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_householdincome_id` int(150) NOT NULL,
  `feeWaiverrequest001_householdincomea_name` varchar(90) NOT NULL,
  `feeWaiverrequest001_householdincomea_age` int(150) NOT NULL,
  `feeWaiverrequest001_householdincomea_relation` varchar(500) NOT NULL,
  `feeWaiverrequest001_householdincomea_income` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_householdincomea_id`),
  KEY `feeWaiverrequest001_householdincome_id` (`feeWaiverrequest001_householdincome_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_householdincomeb`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_householdincomeb` (
  `feeWaiverrequest001_householdincomeb_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_householdincome_id` int(150) NOT NULL,
  `feeWaiverrequest001_householdincomeb_total` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_householdincomeb_id`),
  KEY `feeWaiverrequest001_householdincome_id` (`feeWaiverrequest001_householdincome_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_incomechanges`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_incomechanges` (
  `feeWaiverrequest001_incomechanges_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_incomechanges_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_incomechanges_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_job`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_job` (
  `feeWaiverrequest001_job_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_job_empaddress_id` int(150) NOT NULL,
  `feeWaiverrequest001_job_title` varchar(30) NOT NULL,
  `feeWaiverrequest001_job_employer` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_job_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`,`feeWaiverrequest001_job_empaddress_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_job_empaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_job_empaddress` (
  `feeWaiverrequest001_job_empaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_job_id` int(150) NOT NULL,
  `feeWaiverrequest001_job_ address_street` varchar(30) NOT NULL,
  `feeWaiverrequest001_job_ address_city` varchar(30) NOT NULL,
  `feeWaiverrequest001_job_ address_zip` int(30) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_job_empaddress_id`),
  KEY `feeWaiverrequest001_job_id` (`feeWaiverrequest001_job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_lawyerfees`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_lawyerfees` (
  `feeWaiverrequest001_lawyerfees_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_lawyerfees_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_lawyerfees_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_moneyproperty`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_moneyproperty` (
  `feeWaiverrequest001_moneyproperty_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypopertya_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyb_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyc_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyd_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertye_id` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_moneyproperty_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`,`feeWaiverrequest001_moneypopertya_id`,`feeWaiverrequest001_moneypropertyb_id`,`feeWaiverrequest001_moneypropertyc_id`,`feeWaiverrequest001_moneypropertyd_id`,`feeWaiverrequest001_moneypropertye_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_moneypropertya`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_moneypropertya` (
  `feeWaiverrequest001_moneypropertya_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_moneyproperty_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertya_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_moneypropertya_id`),
  KEY `feeWaiverrequest001_moneyproperty_id` (`feeWaiverrequest001_moneyproperty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_moneypropertyb`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_moneypropertyb` (
  `feeWaiverrequest001_moneypropertyb_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_moneyproperty_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyb_bank` varchar(500) NOT NULL,
  `feeWaiverrequest001_moneypropertyb_amount` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_moneypropertyb_id`),
  KEY `feeWaiverrequest001_moneyproperty_id` (`feeWaiverrequest001_moneyproperty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_moneypropertyc`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_moneypropertyc` (
  `feeWaiverrequest001_moneypropertyc_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_moneyproperty_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyc_year` year(4) NOT NULL,
  `feeWaiverrequest001_moneypropertyc_value` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyc_owe` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_moneypropertyc_id`),
  KEY `feeWaiverrequest001_moneyproperty_id` (`feeWaiverrequest001_moneyproperty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_moneypropertyd`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_moneypropertyd` (
  `feeWaiverrequest001_moneypropertyd_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_moneyproperty_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyd_adddress` varchar(500) NOT NULL,
  `feeWaiverrequest001_moneypropertyd_value` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertyd_owe` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_moneypropertyd_id`),
  KEY `feeWaiverrequest001_MoneyProperty_id` (`feeWaiverrequest001_moneyproperty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_moneypropertye`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_moneypropertye` (
  `feeWaiverrequest001_moneypropertye_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_moneyproperty_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertye_describe` varchar(500) NOT NULL,
  `feeWaiverrequest001_moneypropertye_value` int(150) NOT NULL,
  `feeWaiverrequest001_moneypropertye_owe` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_moneypropertye_id`),
  KEY `feeWaiverrequest001_moneyproperty_id` (`feeWaiverrequest001_moneyproperty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyexpenses`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyexpenses` (
  `feeWaiverrequest001_monthlyexpenses_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyexpensesk_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyexpensesm_id` int(150) NOT NULL,
  `feeWaiverrequest001_totalmonthlyexpenses_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_a` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_b` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_c` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_d` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_e` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_f` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_g` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_h` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_i` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_j` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_k` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_l` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyexpenses_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`,`feeWaiverrequest001_monthlyexpensesk_id`,`feeWaiverrequest001_monthlyexpensesm_id`,`feeWaiverrequest001_totalmonthlyexpenses_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyexpensesk`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyexpensesk` (
  `feeWaiverrequest001_monthlyexpensesk_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_monthlyexpenses_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyexpensesk_paidto` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpensesk_amount` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyexpensesk_id`),
  KEY `feeWaiverrequest001_monthlyexpenses_id` (`feeWaiverrequest001_monthlyexpenses_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyexpensesm`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyexpensesm` (
  `feeWaiverrequest001_monthlyexpensesm_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_monthlyexpenses_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyexpensesm_paidto` varchar(500) NOT NULL,
  `feeWaiverrequest001_monthlyexpensesm_amount` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyexpensesm_id`),
  KEY `feeWaiverrequest001_monthlyexpenses_id` (`feeWaiverrequest001_monthlyexpenses_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincome`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincome` (
  `feeWaiverrequest001_monthlyincome_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomea_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomeb_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomec_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomed_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomee_id` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincome_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`,`feeWaiverrequest001_monthlyincomea_id`,`feeWaiverrequest001_monthlyincomeb_id`,`feeWaiverrequest001_monthlyincomec_id`,`feeWaiverrequest001_monthlyincomed_id`,`feeWaiverrequest001_monthlyincomee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomea`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomea` (
  `feeWaiverrequest001_monthlyincomea_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomeadeduction_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomeaamount_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomea_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomea_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`,`feeWaiverrequest001_monthlyincomeadeduction_id`,`feeWaiverrequest001_monthlyincomeaamount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomeaamount`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomeaamount` (
  `feeWaiverrequest001_monthlyincomeaamount_id` int(11) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_monthlyincomea_id` int(11) NOT NULL,
  `feeWaiverrequest001_monthlyincomea_amount` int(11) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomeaamount_id`),
  KEY `feeWaiverrequest001_monthlyincomea_id` (`feeWaiverrequest001_monthlyincomea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomeadeduction`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomeadeduction` (
  `feeWaiverrequest001_monthlyincomeadeduction_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_monthlyincomea_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomea_deduction` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomeadeduction_id`),
  KEY `feeWaiverrequest001_monthlyincomea_id` (`feeWaiverrequest001_monthlyincomea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomeb`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomeb` (
  `feeWaiverrequest001_monthlyincomeb_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomeb_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomeb_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomec`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomec` (
  `feeWaiverrequest001_monthlyincomec_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomec_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomec_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomed`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomed` (
  `feeWaiverrequest001_monthlyincomed_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomedsource_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomedamount_id` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomed_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`,`feeWaiverrequest001_monthlyincomedsource_id`,`feeWaiverrequest001_monthlyincomedamount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomedamount`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomedamount` (
  `feeWaiverrequest001_monthlyincomedamount_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_monthlyincomed_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomed_amount` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomedamount_id`),
  KEY `feeWaiverrequest001_monthlyincomed_id` (`feeWaiverrequest001_monthlyincomed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomedsource`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomedsource` (
  `feeWaiverrequest001_monthlyincomedsource_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_monthlyincomed_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomed_source` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomedsource_id`),
  KEY `feeWaiverrequest001_monthlyincomed_id` (`feeWaiverrequest001_monthlyincomed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_monthlyincomee`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_monthlyincomee` (
  `feeWaiverrequest001_monthlyincomee_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincomee_description` varchar(500) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_monthlyincomee_id`),
  KEY `template_Feewaiverrequest001_id` (`template_Feewaiverrequest001_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_totalmonthlyexpenses`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_totalmonthlyexpenses` (
  `feeWaiverrequest001_totalmonthlyexpenses_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_monthlyexpenses_id` int(150) NOT NULL,
  `feeWaiverrequest001_totalmonthlyexpenses` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_totalmonthlyexpenses_id`),
  KEY `feeWaiverrequest001_monthlyexpenses_id` (`feeWaiverrequest001_monthlyexpenses_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feewaiverrequest001_totalmonthlyhousehold`
--

CREATE TABLE IF NOT EXISTS `tbl_feewaiverrequest001_totalmonthlyhousehold` (
  `feeWaiverrequest001_totalmonthlyhousehold_id` int(150) NOT NULL AUTO_INCREMENT,
  `feeWaiverrequest001_householdincome_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyhousehold_total` int(150) NOT NULL,
  PRIMARY KEY (`feeWaiverrequest001_totalmonthlyhousehold_id`),
  KEY `feeWaiverrequest001_householdincome_id` (`feeWaiverrequest001_householdincome_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foreclosed_recordeddocuments`
--

CREATE TABLE IF NOT EXISTS `tbl_foreclosed_recordeddocuments` (
  `foreclosed_recordeddocuments_id` int(150) NOT NULL AUTO_INCREMENT,
  `foreclosed_recordeddocuments_deedoftrusteesigningdate` date NOT NULL,
  `foreclosed_recordeddocuments_deedoftrusteerecdate` date NOT NULL,
  `foreclosed_recordeddocuments_deedoftrusteedocnumber` int(200) NOT NULL,
  `foreclosed_recordeddocuments_nodrecdate` date NOT NULL,
  `foreclosed_recordeddocuments_noddocnumber` int(200) NOT NULL,
  `foreclosed_recordeddocuments_ntsrecdate` date NOT NULL,
  `foreclosed_recordeddocuments_ntsdocnumber` int(200) NOT NULL,
  `foreclosed_recordeddocuments_tdusrecdate` date NOT NULL,
  `foreclosed_recordeddocuments_tdusdocnumber` int(200) NOT NULL,
  `foreclosed_recordeddocuments_tduspropertysolddate` date NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  PRIMARY KEY (`foreclosed_recordeddocuments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foreclosed_recordeddocuments_history`
--

CREATE TABLE IF NOT EXISTS `tbl_foreclosed_recordeddocuments_history` (
  `foreclosed_recordeddocuments_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `foreclosed_recordeddocuments_history_datecreated` datetime NOT NULL,
  `foreclosed_recordeddocuments_history_datemodified` datetime NOT NULL,
  `foreclosed_recordeddocuments_history_createdbyuseraccountid` int(150) NOT NULL,
  `foreclosed_recordeddocuments_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `foreclosed_recordeddocuments_id` int(150) NOT NULL,
  PRIMARY KEY (`foreclosed_recordeddocuments_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inforeclosure_recordeddocuments`
--

CREATE TABLE IF NOT EXISTS `tbl_inforeclosure_recordeddocuments` (
  `inforeclosure_recordeddocuments_id` int(150) NOT NULL AUTO_INCREMENT,
  `inforeclosure_recordeddocuments_deedoftrusteesigningdate` date NOT NULL,
  `inforeclosure_recordeddocuments_deedoftrusteerecdate` date NOT NULL,
  `inforeclosure_recordeddocuments_deedoftrusteedocnumber` int(200) NOT NULL,
  `inforeclosure_recordeddocuments_nodrecdate` date NOT NULL,
  `inforeclosure_recordeddocuments_noddocnumber` int(200) NOT NULL,
  `inforeclosure_recordeddocuments_pagedeclaration` int(200) NOT NULL,
  `inforeclosure_recordeddocuments_ntsrecdate` date NOT NULL,
  `inforeclosure_recordeddocuments_ntsdocnumber` int(200) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  PRIMARY KEY (`inforeclosure_recordeddocuments_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_inforeclosure_recordeddocuments`
--

INSERT INTO `tbl_inforeclosure_recordeddocuments` (`inforeclosure_recordeddocuments_id`, `inforeclosure_recordeddocuments_deedoftrusteesigningdate`, `inforeclosure_recordeddocuments_deedoftrusteerecdate`, `inforeclosure_recordeddocuments_deedoftrusteedocnumber`, `inforeclosure_recordeddocuments_nodrecdate`, `inforeclosure_recordeddocuments_noddocnumber`, `inforeclosure_recordeddocuments_pagedeclaration`, `inforeclosure_recordeddocuments_ntsrecdate`, `inforeclosure_recordeddocuments_ntsdocnumber`, `client_id`, `defendant_id`, `courthouse_id`, `case_id`, `userAccount_id`) VALUES
(1, '2013-09-17', '2013-09-17', 123456, '2013-09-17', 12345, 20, '2013-09-17', 12345, 1, 1, 1, 1, 6),
(4, '2013-09-17', '2013-09-17', 12345, '2013-09-17', 12345, 20, '2013-09-17', 12345, 4, 4, 4, 4, 6),
(7, '2013-09-20', '2013-09-20', 12345, '2013-09-20', 12345, 20, '2013-09-20', 12345, 7, 7, 7, 7, 6),
(8, '2013-09-20', '2013-09-20', 123456, '2013-09-20', 12345, 20, '2013-09-20', 12345, 8, 8, 8, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inforeclosure_recordeddocuments_history`
--

CREATE TABLE IF NOT EXISTS `tbl_inforeclosure_recordeddocuments_history` (
  `inforeclosure_recordeddocuments_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `inforeclosure_recordeddocuments_history_datecreated` datetime NOT NULL,
  `inforeclosure_recordeddocuments_history_datemodified` datetime NOT NULL,
  `inforeclosure_recordeddocuments_history_createdbyuseraccountid` int(150) NOT NULL,
  `inforeclosure_recordeddocuments_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `inforeclosure_recordeddocuments_id` int(150) NOT NULL,
  PRIMARY KEY (`inforeclosure_recordeddocuments_history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_inforeclosure_recordeddocuments_history`
--

INSERT INTO `tbl_inforeclosure_recordeddocuments_history` (`inforeclosure_recordeddocuments_history_id`, `inforeclosure_recordeddocuments_history_datecreated`, `inforeclosure_recordeddocuments_history_datemodified`, `inforeclosure_recordeddocuments_history_createdbyuseraccountid`, `inforeclosure_recordeddocuments_history_modifiedbyuseraccountid`, `inforeclosure_recordeddocuments_id`) VALUES
(1, '2013-09-17 12:42:10', '0000-00-00 00:00:00', 6, 0, 1),
(4, '2013-09-17 19:36:25', '0000-00-00 00:00:00', 6, 0, 4),
(7, '2013-09-20 21:51:56', '0000-00-00 00:00:00', 6, 0, 7),
(8, '2013-09-20 22:04:29', '0000-00-00 00:00:00', 6, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_noticeofdefault_recordeddocuments`
--

CREATE TABLE IF NOT EXISTS `tbl_noticeofdefault_recordeddocuments` (
  `noticeofdefault_recordeddocuments_id` int(150) NOT NULL AUTO_INCREMENT,
  `noticeofdefault_recordeddocuments_deedoftrusteesigningdate` date NOT NULL,
  `noticeofdefault_recordeddocuments_deedoftrusteerecdate` date NOT NULL,
  `noticeofdefault_recordeddocuments_deedoftrusteedocnumber` int(200) NOT NULL,
  `noticeofdefault_recordeddocuments_nodrecdate` date NOT NULL,
  `noticeofdefault_recordeddocuments_noddocnumber` int(200) NOT NULL,
  `noticeofdefault_recordeddocuments_pagedeclaration` int(200) NOT NULL,
  `noticeofdefault_recordeddocuments_ntsrecdate` date NOT NULL,
  `noticeofdefault_recordeddocuments_ntsdocnumber` int(200) NOT NULL,
  `noticeofdefault_recordeddocuments_norrecdate` date NOT NULL,
  `noticeofdefault_recordeddocuments_nordocnumber` int(200) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `courthouse_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  PRIMARY KEY (`noticeofdefault_recordeddocuments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_noticeofdefault_recordeddocuments_history`
--

CREATE TABLE IF NOT EXISTS `tbl_noticeofdefault_recordeddocuments_history` (
  `noticeofdefault_recordeddocuments_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `noticeofdefault_recordeddocuments_history_datecreated` int(11) NOT NULL,
  `noticeofdefault_recordeddocuments_history_datemodified` int(11) NOT NULL,
  `noticeofdefault_recordeddocuments_history_createdbyuseraccountid` int(11) NOT NULL,
  `noticeofdefault_recordeddocuments_historymodifiedbyuseraccountid` int(11) NOT NULL,
  `noticeofdefault_recordeddocuments_id` int(11) NOT NULL,
  PRIMARY KEY (`noticeofdefault_recordeddocuments_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_originaldeedoftrustlender`
--

CREATE TABLE IF NOT EXISTS `tbl_originaldeedoftrustlender` (
  `originaldeedoftrustlender_id` int(150) NOT NULL AUTO_INCREMENT,
  `originaldeedoftrustlender_name` varchar(300) NOT NULL,
  `originaldeedoftrustlender_shortname` varchar(200) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  PRIMARY KEY (`originaldeedoftrustlender_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_originaldeedoftrustlender`
--

INSERT INTO `tbl_originaldeedoftrustlender` (`originaldeedoftrustlender_id`, `originaldeedoftrustlender_name`, `originaldeedoftrustlender_shortname`, `client_id`, `defendant_id`) VALUES
(1, 'COUNTRY WIDE HOME LOANS', 'COUNTRY WIDE', 1, 1),
(4, 'COUNTRY CLUB HOME LOANS', 'COUNTRY CLUB', 4, 4),
(7, 'SESSION TOWN LOANS', 'SESSION TOWN', 7, 7),
(8, 'COUNTRY SHORT TERM LOANS', 'COUNTRY SHORT TERM', 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_originaldeedoftrustlender_history`
--

CREATE TABLE IF NOT EXISTS `tbl_originaldeedoftrustlender_history` (
  `originaldeedoftrustlender_history_id` int(150) NOT NULL AUTO_INCREMENT,
  `originaldeedoftrustlender_history_datecreated` datetime NOT NULL,
  `originaldeedoftrustlender_history_datemodified` datetime NOT NULL,
  `originaldeedoftrustlender_history_createdbyuseraccountid` int(150) NOT NULL,
  `originaldeedoftrustlender_history_modifiedbyuseraccountid` int(150) NOT NULL,
  `originaldeedoftrustlender_id` int(150) NOT NULL,
  PRIMARY KEY (`originaldeedoftrustlender_history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_originaldeedoftrustlender_history`
--

INSERT INTO `tbl_originaldeedoftrustlender_history` (`originaldeedoftrustlender_history_id`, `originaldeedoftrustlender_history_datecreated`, `originaldeedoftrustlender_history_datemodified`, `originaldeedoftrustlender_history_createdbyuseraccountid`, `originaldeedoftrustlender_history_modifiedbyuseraccountid`, `originaldeedoftrustlender_id`) VALUES
(1, '2013-09-17 12:42:10', '0000-00-00 00:00:00', 6, 0, 1),
(4, '2013-09-17 19:36:25', '0000-00-00 00:00:00', 6, 0, 4),
(7, '2013-09-20 21:51:56', '0000-00-00 00:00:00', 6, 0, 7),
(8, '2013-09-20 22:04:29', '0000-00-00 00:00:00', 6, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plaintiffdefendanttype`
--

CREATE TABLE IF NOT EXISTS `tbl_plaintiffdefendanttype` (
  `plaintiffDefendanttype_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `plaintiffDefendanttype_description` varchar(500) NOT NULL,
  PRIMARY KEY (`plaintiffDefendanttype_id`),
  KEY `client_id` (`client_id`,`defendant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_plaintiffdefendanttype`
--

INSERT INTO `tbl_plaintiffdefendanttype` (`plaintiffDefendanttype_id`, `client_id`, `defendant_id`, `plaintiffDefendanttype_description`) VALUES
(1, 1, 1, 'Individual'),
(2, 2, 2, 'Invidual');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proofsummons030_address`
--

CREATE TABLE IF NOT EXISTS `tbl_proofsummons030_address` (
  `proofSummons030_address_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `proofSummons030_address_street` varchar(500) NOT NULL,
  `proofSummons030_address_city` varchar(500) NOT NULL,
  `proofSummons030_address_zipcode` int(150) NOT NULL,
  PRIMARY KEY (`proofSummons030_address_id`),
  KEY `template_Proofsummons030_id` (`template_Proofsummons030_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proofsummons030_document`
--

CREATE TABLE IF NOT EXISTS `tbl_proofsummons030_document` (
  `proofSummons030_document_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `proofSummons030_document_date` date NOT NULL,
  `proofSummons030_document_citystate` varchar(500) NOT NULL,
  `proofSummons030_document_list` varchar(500) NOT NULL,
  `proofSummons030_document_attached` varchar(500) NOT NULL,
  PRIMARY KEY (`proofSummons030_document_id`),
  KEY `template_Proofsummons030_id` (`template_Proofsummons030_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proofsummons030_enclosure`
--

CREATE TABLE IF NOT EXISTS `tbl_proofsummons030_enclosure` (
  `proofSummons030_enclosure_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `proofSummons030_enclosure_description` varchar(500) NOT NULL,
  PRIMARY KEY (`proofSummons030_enclosure_id`),
  KEY `template_Proofsummons030_id` (`template_Proofsummons030_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proofsummons030_personserved`
--

CREATE TABLE IF NOT EXISTS `tbl_proofsummons030_personserved` (
  `proofSummons030_personserved_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `proofSummons030_personservedaddress_id` int(150) NOT NULL,
  `proofSummons030_personserved_name` varchar(90) NOT NULL,
  `proofSummons030_personserved_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proofsummons030_personservedaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_proofsummons030_personservedaddress` (
  `proofSummons030_personservedaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `proofSummons030_personserved_id` int(150) NOT NULL,
  `proofSummons030_personservedaddress_street` varchar(30) NOT NULL,
  `proofSummons030_personservedaddress_city` varchar(30) NOT NULL,
  `proofSummons030_personservedaddress_zipcode` int(150) NOT NULL,
  PRIMARY KEY (`proofSummons030_personservedaddress_id`),
  KEY `proofSummons030_personserved_id` (`proofSummons030_personserved_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sdcourtform_commencedon`
--

CREATE TABLE IF NOT EXISTS `tbl_sdcourtform_commencedon` (
  `sdCourtform_commencedon_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `sdCourtform_commencedon_description` varchar(500) NOT NULL,
  PRIMARY KEY (`sdCourtform_commencedon_id`),
  KEY `template_Sdcourtform_id` (`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sdcourtform_countydivision`
--

CREATE TABLE IF NOT EXISTS `tbl_sdcourtform_countydivision` (
  `sdCourtform_countydivision_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `sdCourtform_countydivision_central1` varchar(30) NOT NULL,
  `sdCourtform_countydivision_central2` varchar(30) NOT NULL,
  `sdCourtform_countydivision_central3` varchar(30) NOT NULL,
  `sdCourtform_countydivision_east1` varchar(30) NOT NULL,
  `sdCourtform_countydivision_east2` varchar(30) NOT NULL,
  `sdCourtform_countydivision_north` varchar(30) NOT NULL,
  `sdCourtform_countydivision_south` varchar(30) NOT NULL,
  PRIMARY KEY (`sdCourtform_countydivision_id`),
  KEY `template_Sdcourtform_id` (`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sdcourtform_partynames`
--

CREATE TABLE IF NOT EXISTS `tbl_sdcourtform_partynames` (
  `sdCourtform_partynames_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `sdCourtform_partynames_Description` varchar(500) NOT NULL,
  PRIMARY KEY (`sdCourtform_partynames_id`),
  KEY `template_Sdcourtform _id` (`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sdcourtform_questions`
--

CREATE TABLE IF NOT EXISTS `tbl_sdcourtform_questions` (
  `sdCourtform_questions_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `sdCourtform_questions_description` varchar(500) NOT NULL,
  PRIMARY KEY (`sdCourtform_questions_id`),
  KEY `template_Sdcourtform_id` (`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_summons100_date`
--

CREATE TABLE IF NOT EXISTS `tbl_summons100_date` (
  `summons100_Date_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Summons100_id` int(150) NOT NULL,
  `summons100_Date_description` varchar(500) NOT NULL,
  PRIMARY KEY (`summons100_Date_id`),
  KEY `template_Summons100_id` (`template_Summons100_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_summons100_defendant`
--

CREATE TABLE IF NOT EXISTS `tbl_summons100_defendant` (
  `summons100_Defendant_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Summons100_id` int(150) NOT NULL,
  `summons100_Defendant_description` varchar(500) NOT NULL,
  PRIMARY KEY (`summons100_Defendant_id`),
  KEY `template_Summons100_id` (`template_Summons100_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_summons100_fictitiousname`
--

CREATE TABLE IF NOT EXISTS `tbl_summons100_fictitiousname` (
  `summons100_Fictitiousname_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Summons100_id` int(150) NOT NULL,
  `summons100_FictitiousName_description` varchar(500) NOT NULL,
  PRIMARY KEY (`summons100_Fictitiousname_id`),
  UNIQUE KEY `template_Summons100_id` (`template_Summons100_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_summons100_onbehalf`
--

CREATE TABLE IF NOT EXISTS `tbl_summons100_onbehalf` (
  `summons100_Onbehalf_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Summons100_id` int(150) NOT NULL,
  `summons100_Onbehalf_description` varchar(500) NOT NULL,
  `summons100_Onbehalf_coporation` varchar(500) NOT NULL,
  `summons100_Onbehalf_defunct` varchar(500) NOT NULL,
  `summons100_Onbehalf_associaton` varchar(500) NOT NULL,
  `summons100_Onbehalf_minor` varchar(500) NOT NULL,
  `summons100_Onbehalf_conservatee` varchar(500) NOT NULL,
  `summons100_Onbehalf_authorized` varchar(500) NOT NULL,
  `summons100_Onbehalf_other` varchar(500) NOT NULL,
  PRIMARY KEY (`summons100_Onbehalf_id`),
  KEY `template_Summons100_id` (`template_Summons100_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template`
--

CREATE TABLE IF NOT EXISTS `tbl_template` (
  `template_id` int(150) NOT NULL AUTO_INCREMENT,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `template_Summons100_id` int(150) NOT NULL,
  `template_Summons200_id` int(150) NOT NULL,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `template_Proofsummons030p_id` int(150) NOT NULL,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `template_Status_id` int(150) NOT NULL,
  `template_history_id` int(150) NOT NULL,
  `template_Name` varchar(30) NOT NULL,
  `temp_Description` varchar(500) NOT NULL,
  PRIMARY KEY (`template_id`),
  KEY `client_id` (`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`template_Civilcasecoversheet_id`,`template_Summons100_id`,`template_Summons200_id`,`template_Feewaiverrequest001_id`,`template_Feewaiverorder003_id`,`template_Proofsummons030_id`,`template_Proofsummons030p_id`,`template_Sdcourtform_id`,`template_Status_id`,`template_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_archive`
--

CREATE TABLE IF NOT EXISTS `tbl_template_archive` (
  `template_Civilcasecoversheet_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_Summons100_id` int(150) NOT NULL,
  `template_Summons200_id` int(150) NOT NULL,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `template_Proofsummons030p_id` int(150) NOT NULL,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `document_Status_id` int(150) NOT NULL,
  PRIMARY KEY (`template_Civilcasecoversheet_id`),
  KEY `template_Summons100_id` (`template_Summons100_id`,`template_Summons200_id`,`template_Feewaiverrequest001_id`,`template_Feewaiverorder003_id`,`template_Proofsummons030_id`,`template_Proofsummons030p_id`,`template_Sdcourtform_id`,`document_Status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_civilcasecoversheet`
--

CREATE TABLE IF NOT EXISTS `tbl_template_civilcasecoversheet` (
  `template_Civilcasecoversheet_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `civilCasecoversheet_limitation_id` int(150) NOT NULL,
  `civilCasecoversheet_complexity_id` int(150) NOT NULL,
  `civilCasecoversheet_casetype_id` int(150) NOT NULL,
  `civilCasecoversheet_casecomplexity_id` int(150) NOT NULL,
  `civilCasecoversheet_caseremedies_id` int(150) NOT NULL,
  `civilCasecoversheet_actioncause_id` int(150) NOT NULL,
  `civilCasecoversheet_actionsuit_id` int(150) NOT NULL,
  `document_Status_id` int(150) NOT NULL,
  `history_Casedocument_id` int(150) NOT NULL,
  `template_Civilcasecoversheet_casename` varchar(30) NOT NULL,
  `template_Civilcasecoversheet_casenumber` int(30) NOT NULL,
  `template_Civilcasecoversheet_date` date NOT NULL,
  PRIMARY KEY (`template_Civilcasecoversheet_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`civilCasecoversheet_limitation_id`,`civilCasecoversheet_complexity_id`,`civilCasecoversheet_casetype_id`,`civilCasecoversheet_casecomplexity_id`,`civilCasecoversheet_caseremedies_id`,`civilCasecoversheet_actioncause_id`,`civilCasecoversheet_actionsuit_id`,`document_Status_id`,`history_Casedocument_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_feewaiverorder003`
--

CREATE TABLE IF NOT EXISTS `tbl_template_feewaiverorder003` (
  `template_Feewaiverorder003_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `feeWaiverorder003_fileddate_id` int(150) NOT NULL,
  `feeWaiverorder003_afterreview_id` int(150) NOT NULL,
  `feeWaiverorder003_grants_id` int(150) NOT NULL,
  `feeWaiverorder003_denies_id` int(150) NOT NULL,
  `feeWaiverorder003_moreinfo_id` int(150) NOT NULL,
  `feeWaiverorder003_hearinginfo_id` int(150) NOT NULL,
  `feeWaiverorder003_servicecertificate_id` int(150) NOT NULL,
  `document_status_id` int(150) NOT NULL,
  `history_Casedocument_id` int(150) NOT NULL,
  `template_Feewaiverorder003_date` date NOT NULL,
  `template_Feewaiverorder003_signature` varchar(500) NOT NULL,
  PRIMARY KEY (`template_Feewaiverorder003_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`feeWaiverorder003_fileddate_id`,`feeWaiverorder003_afterreview_id`,`feeWaiverorder003_grants_id`,`feeWaiverorder003_denies_id`,`feeWaiverorder003_moreinfo_id`,`feeWaiverorder003_hearinginfo_id`,`feeWaiverorder003_servicecertificate_id`,`document_status_id`,`history_Casedocument_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_feewaiverrequest001`
--

CREATE TABLE IF NOT EXISTS `tbl_template_feewaiverrequest001` (
  `template_Feewaiverrequest001_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  ` client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `feeWaiverrequest001_addition_id` int(150) NOT NULL,
  `feeWaiverrequest001_job_id` int(150) NOT NULL,
  `feeWaiverrequest001_lawyerfees_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees5_id` int(150) NOT NULL,
  `feeWaiverrequest001_courtfees6_id` int(150) NOT NULL,
  `feeWaiverrequest001_Incomechanges_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyincome_id` int(150) NOT NULL,
  `feeWaiverrequest001_householdincome_id` int(150) NOT NULL,
  `feeWaiverrequest001_moneyproperty_id` int(150) NOT NULL,
  `feeWaiverrequest001_monthlyexpenses_id` int(150) NOT NULL,
  `document_Status_id` int(150) NOT NULL,
  `history_Casedocument_id` int(150) NOT NULL,
  PRIMARY KEY (`template_Feewaiverrequest001_id`),
  KEY `template_id` (`template_id`,` client_id`,`defendant_id`,`userAccount_id`,`case_id`,`feeWaiverrequest001_addition_id`,`feeWaiverrequest001_job_id`,`feeWaiverrequest001_lawyerfees_id`,`feeWaiverrequest001_courtfees_id`,`feeWaiverrequest001_courtfees5_id`,`feeWaiverrequest001_courtfees6_id`,`feeWaiverrequest001_Incomechanges_id`,`feeWaiverrequest001_monthlyincome_id`,`feeWaiverrequest001_householdincome_id`,`feeWaiverrequest001_moneyproperty_id`),
  KEY `feeWaiverrequest001_monthlyexpenses_id` (`feeWaiverrequest001_monthlyexpenses_id`,`document_Status_id`,`history_Casedocument_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_history`
--

CREATE TABLE IF NOT EXISTS `tbl_template_history` (
  `template_History_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `template_Summons100_id` int(150) NOT NULL,
  `template_Summons200_id` int(150) NOT NULL,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `template_Proofsummons030p_id` int(150) NOT NULL,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `template_Version` varchar(90) NOT NULL,
  `template_Dateuploaded` date NOT NULL,
  `template_Createdby` varchar(90) NOT NULL,
  `template_Datecreated` date NOT NULL,
  `template_Timecreated` time NOT NULL,
  `template_Datemodified` date NOT NULL,
  `template_Timemodified` time NOT NULL,
  `template_Modifiedby` varchar(90) NOT NULL,
  PRIMARY KEY (`template_History_id`),
  KEY `template_id` (`template_id`,`userAccount_id`,`template_Civilcasecoversheet_id`,`template_Summons100_id`,`template_Summons200_id`,`template_Feewaiverrequest001_id`,`template_Feewaiverorder003_id`,`template_Proofsummons030_id`,`template_Proofsummons030p_id`,`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_proofsummons030`
--

CREATE TABLE IF NOT EXISTS `tbl_template_proofsummons030` (
  `template_Proofsummons030_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `proofSummons030_address_id` int(150) NOT NULL,
  `proofSummons030_document_id` int(150) NOT NULL,
  `proofSummons030_enclosure_id` int(150) NOT NULL,
  `proofSummons030_personserved_id` int(150) NOT NULL,
  `document_Status_id` int(150) NOT NULL,
  `history_Casedocument_id` int(150) NOT NULL,
  `template_Proofsummons030_date` date NOT NULL,
  `template_Proofsummons030_name` varchar(90) NOT NULL,
  PRIMARY KEY (`template_Proofsummons030_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`proofSummons030_address_id`,`proofSummons030_document_id`,`proofSummons030_enclosure_id`,`proofSummons030_personserved_id`,`document_Status_id`,`history_Casedocument_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_sdcourtform`
--

CREATE TABLE IF NOT EXISTS `tbl_template_sdcourtform` (
  `template_Sdcourtform_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `sdCourtform_countydivision_id` int(150) NOT NULL,
  `document_Status_id` int(150) NOT NULL,
  `history_Casedocument_id` int(150) NOT NULL,
  `template_Sdcourtform_date` date NOT NULL,
  PRIMARY KEY (`template_Sdcourtform_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`sdCourtform_countydivision_id`,`document_Status_id`,`history_Casedocument_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_status`
--

CREATE TABLE IF NOT EXISTS `tbl_template_status` (
  `template_Status_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `template_Civilcasecoversheet_id` int(150) NOT NULL,
  `template_Summons100_id` int(150) NOT NULL,
  `template_Summons200_id` int(150) NOT NULL,
  `template_Feewaiverrequest001_id` int(150) NOT NULL,
  `template_Feewaiverorder003_id` int(150) NOT NULL,
  `template_Proofsummons030_id` int(150) NOT NULL,
  `template_Proofsummons030p_id` int(150) NOT NULL,
  `template_Sdcourtform_id` int(150) NOT NULL,
  `template_Status` varchar(30) NOT NULL,
  PRIMARY KEY (`template_Status_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`template_Civilcasecoversheet_id`,`template_Summons100_id`,`template_Summons200_id`,`template_Feewaiverrequest001_id`,`template_Feewaiverorder003_id`,`template_Proofsummons030_id`,`template_Proofsummons030p_id`,`template_Sdcourtform_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template_summons100`
--

CREATE TABLE IF NOT EXISTS `tbl_template_summons100` (
  `template_Summons100_id` int(150) NOT NULL AUTO_INCREMENT,
  `template_id` int(150) NOT NULL,
  `client_id` int(150) NOT NULL,
  `defendant_id` int(150) NOT NULL,
  `userAccount_id` int(150) NOT NULL,
  `case_id` int(150) NOT NULL,
  `summons100_Defendant_id` int(150) NOT NULL,
  `summons100_Fictitiousname_id` int(150) NOT NULL,
  `summons100_Onbehalf_id` int(150) NOT NULL,
  `summons100_Date_id` int(150) NOT NULL,
  `document_Status_id` int(150) NOT NULL,
  `history_Casedocument_id` int(150) NOT NULL,
  PRIMARY KEY (`template_Summons100_id`),
  KEY `template_id` (`template_id`,`client_id`,`defendant_id`,`userAccount_id`,`case_id`,`summons100_Defendant_id`,`summons100_Fictitiousname_id`,`summons100_Onbehalf_id`,`summons100_Date_id`,`document_Status_id`,`history_Casedocument_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccount`
--

CREATE TABLE IF NOT EXISTS `tbl_useraccount` (
  `userAccount_id` int(150) NOT NULL AUTO_INCREMENT,
  `case_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `defendant_id` int(10) NOT NULL,
  `userAccountaddress_id` int(10) NOT NULL,
  `userAccountstatus_id` int(10) NOT NULL,
  `account_History _id` int(10) NOT NULL,
  `userAccount_lastname` varchar(150) NOT NULL,
  `userAccount_firstname` varchar(150) NOT NULL,
  `userAccount_middlename` varchar(150) NOT NULL,
  `userAccount_emailaddress` varchar(150) NOT NULL,
  `userAccount_username` varchar(150) NOT NULL,
  `userAccount_defaultpassword` varchar(40) NOT NULL,
  `userAccount_datetimecreated` datetime NOT NULL,
  `stateBarno` varchar(150) NOT NULL,
  `userAccount_admin_id` int(150) NOT NULL,
  PRIMARY KEY (`userAccount_id`),
  KEY `case_id` (`case_id`,`client_id`,`defendant_id`,`userAccountaddress_id`,`userAccountstatus_id`,`account_History _id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_useraccount`
--

INSERT INTO `tbl_useraccount` (`userAccount_id`, `case_id`, `client_id`, `defendant_id`, `userAccountaddress_id`, `userAccountstatus_id`, `account_History _id`, `userAccount_lastname`, `userAccount_firstname`, `userAccount_middlename`, `userAccount_emailaddress`, `userAccount_username`, `userAccount_defaultpassword`, `userAccount_datetimecreated`, `stateBarno`, `userAccount_admin_id`) VALUES
(6, 1, 1, 1, 1, 1, 1, 'Fernandez', 'Tyrone', 'Valencia', 'rastatirone@gmail.com', 'Prime', '601f1889667efaebb33b8c12572835da3f027f78', '2013-08-05 20:19:39', '', 0),
(7, 2, 2, 2, 2, 2, 2, 'Buela', 'Christian', 'Radoc', 'dummyunouno@gmail.com', 'Chan', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '2013-08-06 14:38:38', '', 0),
(8, 3, 3, 3, 3, 3, 3, 'moy', 'moy', 'mismo', 'chrisb.eighteen@gmail.com', 'moy', '601f1889667efaebb33b8c12572835da3f027f78', '2013-08-22 19:55:57', '20010103', 0),
(9, 0, 0, 0, 0, 0, 0, '1234', '123', '', '', 'charm', '601f1889667efaebb33b8c12572835da3f027f78', '0000-00-00 00:00:00', '', 0),
(10, 0, 0, 0, 0, 0, 0, 'tom2', 'moy2', '', '', '', '', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccountaddress`
--

CREATE TABLE IF NOT EXISTS `tbl_useraccountaddress` (
  `userAccountaddress_id` int(150) NOT NULL AUTO_INCREMENT,
  `userAccount_id` int(150) NOT NULL,
  `userAccount_address_street` varchar(30) NOT NULL,
  `userAccount_address_city` varchar(30) NOT NULL,
  `userAccount_address_zipcode` int(30) NOT NULL,
  PRIMARY KEY (`userAccountaddress_id`),
  KEY `userAccount_id` (`userAccount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccountresetpassword`
--

CREATE TABLE IF NOT EXISTS `tbl_useraccountresetpassword` (
  `userAccountresetpassword_id` int(150) NOT NULL AUTO_INCREMENT,
  `userAccount_id` int(150) NOT NULL,
  `userAccount_temppassword` varchar(32) NOT NULL,
  PRIMARY KEY (`userAccountresetpassword_id`),
  KEY `userAccount_id` (`userAccount_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_useraccountresetpassword`
--

INSERT INTO `tbl_useraccountresetpassword` (`userAccountresetpassword_id`, `userAccount_id`, `userAccount_temppassword`) VALUES
(1, 1, 'rWpqXDHcjvwydnT72mNnY0XX7eGPbsPT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccountstatus`
--

CREATE TABLE IF NOT EXISTS `tbl_useraccountstatus` (
  `userAccountstatus_id` int(150) NOT NULL AUTO_INCREMENT,
  `userAccount_id` int(150) NOT NULL,
  `userAccount_accountstatus` varchar(30) NOT NULL,
  PRIMARY KEY (`userAccountstatus_id`),
  KEY `useraccount_id` (`userAccount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
