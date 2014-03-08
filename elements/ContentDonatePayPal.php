<?php

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
 * Class ContentDonatePaypal
 *
 * Front end content element "donatepaypal".
 * @copyright  1up GmbH - David Greminger / Flavian Sierk
 * @author     David Greminger
 * @package    donatepaypal
 */

namespace Oneup;

class ContentDonatePayPal extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_donatepaypal';

    /**
     * Generates content element
     * @return mixed
     */
    public function generate()
    {
        return parent::generate();
    }

    /**
     * Parses the template
     * @return string
     */
    protected function compile()
    {
        $arrFields = array();

        $arrFields['amount'] = array (
            'name' => 'amount',
            'label' => sprintf($GLOBALS['TL_LANG']['donatepaypal']['donate_amount'], $this->donatepaypal_currency_code),
            'inputType' => 'text',
            'value' => $this->donatepaypal_total
        );

        foreach ($arrFields as $arrField)
        {
            $strClass = $GLOBALS['TL_FFL'][$arrField['inputType']];

            // Continue if the class is not defined
            if (!$this->classFileExists($strClass))
            {
                continue;
            }

            $arrField['eval']['required'] = $arrField['eval']['mandatory'];
            $objWidget = new $strClass($this->prepareForWidget($arrField, $arrField['name'], $arrField['value']));
            $arrWidgets[] = $objWidget;
        }

        $objPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
            ->limit(1)
            ->execute($this->donatepaypal_thanks);

        if ($objPage->numRows)
        {
            $strLink = $this->Environment->base . $this->generateFrontendUrl($objPage->row());
        }

        $this->Template->return 	= $strLink;
        $this->Template->fields 	= $arrWidgets;
        $this->Template->amount 	= $GLOBALS['TL_LANG']['donatepaypal']['donate_amount'];
        $this->Template->donate 	= $GLOBALS['TL_LANG']['donatepaypal']['donate'];
        $this->Template->email 		= $this->donatepaypal_address;
        $this->Template->currency	= $this->donatepaypal_currency_code;
        $this->Template->item 		= $this->donatepaypal_message;
        $this->Template->ceID 		= $this->id;

        if($this->donatepaypal_javascript != '1')
        {
            $this->Template->javascript = true;
        }
    }
}
