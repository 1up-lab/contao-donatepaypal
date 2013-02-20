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
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['donatepaypal'] = 'ModuleDonatePaypal';


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['donatepaypal'] = 'ContentDonatePaypal';

/**
 * Some variables and definitions
 */
$GLOBALS['TL_DCA']['donatepaypal'] = $currencies = array(
    'USD' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['USD'],
    'GBP' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['GBP'],
    'AUD' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['AUD'],
    'BRL' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['BRL'],
    'CAD' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['CAD'],
    'CZK' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['CZK'],
    'DKK' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['DKK'],
    'EUR' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['EUR'],
    'HKD' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['HKD'],
    'HUF' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['HUF'],
    'ILS' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['ILS'],
    'JPY' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['JPY'],
    'MYR' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['MYR'],
    'MXN' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['MXN'],
    'NZD' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['NZD'],
    'NOK' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['NOK'],
    'PHP' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['PHP'],
    'PLN' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['PLN'],
    'SGD' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['SGD'],
    'SEK' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['SEK'],
    'CHF' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['CHF'],
    'TWD' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['TWD'],
    'THB' => &$GLOBALS['TL_LANG']['donatepaypal']['currencies']['THB']
);
