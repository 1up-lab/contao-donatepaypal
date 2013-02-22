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
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['CTE']['donatepaypal']                  = array('Donate PayPal', 'Adds a PayPal donate button.');
$GLOBALS['TL_LANG']['FMD']['donatepaypal']                  = array('Donate PayPal', 'Adds a PayPal donate button.');

/**
 * Fields
 */
$GLOBALS['TL_LANG']['donatepaypal']['donate']               = 'Donate';
$GLOBALS['TL_LANG']['donatepaypal']['donate_amount']        = 'Amount (%s)';
$GLOBALS['TL_LANG']['donatepaypal']['address']              = array('PayPal ID', 'Your Paypal ID.');
$GLOBALS['TL_LANG']['donatepaypal']['message']              = array('Transaction message', 'Message on the PayPal transaction.');
$GLOBALS['TL_LANG']['donatepaypal']['total']                = array('Amount', 'Choose a default amount.');
$GLOBALS['TL_LANG']['donatepaypal']['currency_code']        = array('Currency', 'Choose a currency.');
$GLOBALS['TL_LANG']['donatepaypal']['javascript']           = array('Deactivate Javascript', 'Deactivates the Javascript output (Accordeon/Toggler).');
$GLOBALS['TL_LANG']['donatepaypal']['thanks']               = array('Redirect page', 'Please choose the page to which visitors will be redirected after submitting the form.');

/**
 * Labels
 */
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['USD']    = 'USD - US Dollar';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['GBP']    = 'GBP - British Pound Sterling';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['AUD']    = 'AUD - Australian Dollar';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['BRL']    = 'BRL - Brazilian Real';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['CAD']    = 'CAD - Canadian Dollar';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['CZK']    = 'CZK - Czech Koruna';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['DKK']    = 'DKK - Danish Kroner';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['EUR']    = 'EUR - Euro';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['HKD']    = 'HKD - Hong Kong Dollar';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['HUF']    = 'HUF - Hungarian Forint';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['ILS']    = 'ILS - Israeli New Shekel';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['JPY']    = 'JPY - Japanese Yen';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['MYR']    = 'MYR - Malaysian Ringgit';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['MXN']    = 'MXN - Mexican Pesos';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['NZD']    = 'NZD - New Zealand Dollar';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['NOK']    = 'NOK - Norwegian Kroner';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['PHP']    = 'PHP - Filipino Peso	';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['PLN']    = 'PLN - Polish Zloty';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['SGD']    = 'SGD - Singapore Dollar';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['SEK']    = 'SEK - Swedish Krona';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['CHF']    = 'CHF - Swiss Franc';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['TWD']    = 'TWD - New Taiwan Dollar';
$GLOBALS['TL_LANG']['donatepaypal']['currencies']['THB']    = 'THB - Thai Baht';
