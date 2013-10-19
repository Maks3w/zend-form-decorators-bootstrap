<?php
/**
 * Form definition
 *
 * @category Forms
 * @package Twitter_Bootstrap
 * @subpackage Form
 * @author Christian Soronellas <csoronellas@emagister.com>
 */

/**
 * An "horizontal" Twitter Bootstrap's UI form
 *
 * @category Forms
 * @package Twitter_Bootstrap
 * @subpackage Form
 * @author Christian Soronellas <csoronellas@emagister.com>
 */
class Twitter_Bootstrap_Form_Horizontal extends Twitter_Bootstrap_Form
{
    public function __construct($options = null, $fieldWidth = 'col-md-4', $labelWidth = 'col-md-3')
    {
        $this->_initializePrefixes();
        
        $this->setDisposition(self::DISPOSITION_HORIZONTAL);

        $this->setElementDecorators(array(
            array('FieldSize'),
            array('ViewHelper'),
            array('Addon'),
            array('ElementErrors'),
            array('Description', array('tag' => 'p', 'class' => 'help-block')),
            array('HorizontalWrapper', array('width' => $fieldWidth)),
            array('Label', array('class' => "control-label {$labelWidth}")),
            array('Wrapper')
        ));
        
        parent::__construct($options);
    }
}
