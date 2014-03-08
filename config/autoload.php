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
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Oneup\ContentDonatePayPal' => 'system/modules/donate-paypal/elements/ContentDonatePayPal.php',
    'Oneup\ModuleDonatePayPal'  => 'system/modules/donate-paypal/modules/ModuleDonatePayPal.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_donatepaypal'  => 'system/modules/donate-paypal/templates',
    'mod_donatepaypal' => 'system/modules/donate-paypal/templates',
));
