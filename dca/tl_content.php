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
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['donatepaypal'] = '{type_legend},type,headline;{donatepaypal_legend},donatepaypal_address,donatepaypal_message,donatepaypal_currency_code,donatepaypal_total,donatepaypal_javascript,donatepaypal_thanks;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Fields for the palette
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['donatepaypal_address'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['donatepaypal']['address'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['donatepaypal_message'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['donatepaypal']['message'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['donatepaypal_total'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['donatepaypal']['total'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['donatepaypal_currency_code'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['donatepaypal']['currency_code'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => $GLOBALS['TL_DCA']['donatepaypal'],
    'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['donatepaypal_javascript'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['donatepaypal']['javascript'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['donatepaypal_thanks'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['donatepaypal']['thanks'],
    'exclude'                 => true,
    'inputType'               => 'pageTree',
    'eval'                    => array('mandatory'=>true, 'fieldType'=>'radio', 'tl_class'=>'clr')
);
