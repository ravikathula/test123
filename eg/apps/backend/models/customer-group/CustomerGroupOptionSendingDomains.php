<?php defined('MW_PATH') || exit('No direct script access allowed');

/**
 * CustomerGroupOptionSendingDomains
 * 
 * @package MailWizz EMA
 * @author Serban George Cristian <cristian.serban@mailwizz.com> 
 * @link https://www.mailwizz.com/
 * @copyright 2013-2018 MailWizz EMA (https://www.mailwizz.com)
 * @license https://www.mailwizz.com/license/
 * @since 1.3.4.7
 */
 
class CustomerGroupOptionSendingDomains extends OptionCustomerSendingDomains
{
    public function behaviors()
    {
        $behaviors = array(
            'handler' => array(
                'class'         => 'backend.components.behaviors.CustomerGroupModelHandlerBehavior',
                'categoryName'  => $this->_categoryName,
            ),
        );
        return CMap::mergeArray($behaviors, parent::behaviors());
    }
    
    public function save()
    {
        return $this->asa('handler')->save();
    }
}
