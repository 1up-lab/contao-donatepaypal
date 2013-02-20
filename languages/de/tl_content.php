<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  1up GmbH - David Greminger / Flavian Sierk
 * @author     David Greminger / Flavian Sierk
 * @package    donatepaypal
 * @license    LGPL
 * @filesource
 */

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['donatepaypal_legend']    = 'PayPal Donate Button';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['donatepaypal']['address']              = array('PayPal ID', 'Ihre Paypal ID.');
$GLOBALS['TL_LANG']['donatepaypal']['message']              = array('Transaktionstext', 'Text, welcher bei der Transaktion erscheint.');
$GLOBALS['TL_LANG']['donatepaypal']['total']                = array('Betrag', 'Wählen Sie einen Standardbetrag.');
$GLOBALS['TL_LANG']['donatepaypal']['currency_code']        = array('Währung', 'Wählen Sie die Währung, in welcher gespendet werden soll.');
$GLOBALS['TL_LANG']['donatepaypal']['javascript']           = array('Javascript deaktivieren', 'Deaktiviert die Ausgabe mittels Javascript (Toggler).');
$GLOBALS['TL_LANG']['donatepaypal']['thanks']               = array('Dankesseite', 'Seite, auf welche der Besucher von PayPal zurückgelangt.');
