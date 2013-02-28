<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Donatepaypal
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Oneup',
    'Oneup\DonatePayPal',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Oneup\DonatePayPal\ContentDonatePayPal' => 'system/modules/donatepaypal/elements/ContentDonatePayPal.php',
    'Oneup\DonatePayPal\ModuleDonatePayPal'  => 'system/modules/donatepaypal/modules/ModuleDonatePayPal.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_donatepaypal'  => 'system/modules/donatepaypal/templates',
    'mod_donatepaypal' => 'system/modules/donatepaypal/templates',
));
