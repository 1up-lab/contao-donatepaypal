-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

--
-- Table `tl_module`
--
CREATE TABLE `tl_module` (
  `donatepaypal_currency_code` varchar(10) NOT NULL default '',
  `donatepaypal_address` varchar(255) NOT NULL default '',
  `donatepaypal_total` varchar(255) NOT NULL default '',
  `donatepaypal_hardtotal` char(1) NOT NULL default '',
  `donatepaypal_javascript` char(1) NOT NULL default '',
  `donatepaypal_message` varchar(255) NOT NULL default '',
  `donatepaypal_thanks` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table `tl_content`
--

CREATE TABLE `tl_content` (
  `donatepaypal_currency_code` varchar(10) NOT NULL default '',
  `donatepaypal_address` varchar(255) NOT NULL default '',
  `donatepaypal_total` varchar(255) NOT NULL default '',
  `donatepaypal_hardtotal` char(1) NOT NULL default '',
  `donatepaypal_javascript` char(1) NOT NULL default '',
  `donatepaypal_message` varchar(255) NOT NULL default '',
  `donatepaypal_thanks` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;