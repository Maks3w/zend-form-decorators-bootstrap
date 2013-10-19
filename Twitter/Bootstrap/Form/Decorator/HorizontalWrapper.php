<?php
/**
 * Form decorator definition
 *
 * @category Forms
 * @package Twitter_Bootstrap_Form
 * @subpackage Decorator
 * @author Christian Soronellas <csoronellas@emagister.com>
 */

/**
 * Defines a decorator to wrap all the Bootstrap form elements
 *
 * @category Forms
 * @package Twitter_Bootstrap_Form
 * @subpackage Decorator
 * @author Christian Soronellas <csoronellas@emagister.com>
 */
class Twitter_Bootstrap_Form_Decorator_HorizontalWrapper extends Zend_Form_Decorator_Abstract
{
    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->getOption('width');
    }

    /**
     * Renders a form element decorating it with the Twitter's Bootstrap markup
     *
     * @param $content
     *
     * @return string
     */
    public function render($content)
    {
        switch ($this->getElement()->getType()) {
            case 'Twitter_Bootstrap_Form_Element_Submit':
            case 'Twitter_Bootstrap_Form_Element_Radio':
                $needPadding = true;
                break;
            default:
                $needPadding = false;
                break;
        }

        return '<div class="' . $this->getWidth() . ($needPadding ? ' col-md-offset-3' : '') . '">' . $content . '</div>';
    }
}
