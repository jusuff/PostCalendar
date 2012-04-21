<?php

/**
 * Copyright Zikula Foundation 2012 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula_View
 * @subpackage Template_Plugins
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * Inject the jQuery Datepicker plugin to the template.
 * @see http://jqueryui.com/demos/datepicker/
 *
 * Available attributes:
 *  - see inline docblocks of each parameter
 *
 * Examples:
 *
 *  Displays the datepicker with the current date as default:
 *
 *  <samp>{jquery_datepicker displayelement='date'}</samp>
 *
 * @param array       $params All attributes passed to this function from the template.
 * @param Zikula_View $view   Reference to the {@link Zikula_View} object.
 *
 * @return string the html and javascript required to render the datepicker
 */
function smarty_function_jquery_datepicker($params, Zikula_View $view)
{
    /**
     * defaultdate
     * php DateTime object
     * The initial date selected and displayed (default: now)
     */
    $defaultDate = (isset($params['defaultdate']) && ($params['defaultdate'] instanceof DateTime)) ? $params['defaultdate'] : new DateTime();
    /**
     * displayelement
     * string (do not include the '#' character)
     * (required) The id text of the html element where the datepicker displays the selection 
     */
    $displayElement = (isset($params['displayelement'])) ? $params['displayelement'] : null;
    /**
     * displayformat_datetime
     * string
     * (optional) The php Date format used for the display element (default: 'j F Y')
     */
    $displayFormat_dateTime = (isset($params['displayformat_datetime'])) ? $params['displayformat_datetime'] : 'j F Y';
    /**
     * displayformat_javascript
     * string
     * (optional) The javascript date format used for display (should mirror the dateTime version) (default: 'd MM yy')
     * @see http://docs.jquery.com/UI/Datepicker/formatDate
     */
    $displayFormat_javascript = (isset($params['displayformat_javascript'])) ? $params['displayformat_javascript'] : 'd MM yy';
    /**
     * valuestorageelement
     * string (do not include the '#' character)
     * (optional) the id text of the html element where the selected date will be stored (default null)
     */
    $valueStorageElement = (isset($params['valuestorageelement'])) ? $params['valuestorageelement'] : null;
    /**
     * valuestorageformat
     * string
     * (optional) the php Date format used for the date passed to the Form (default: 'Y-m-d') 
     */
    $valueStorageFormat_dateTime = (isset($params['valuestorageformat'])) ? $params['valuestorageformat'] : 'Y-m-d';
    /**
     * valuestorageformat_javascript
     * string
     * (optional) the javascript date format used for the storage element (should mirror the dateTime version) (default: computed from valuestorageformat)
     * @see http://docs.jquery.com/UI/Datepicker/formatDate
     */
    $valueStorageFormat_javascript = (isset($params['valuestorageformat_javascript'])) ? $params['valuestorageformat_javascript'] : str_replace(array('Y', 'm', 'd'), array('yy', 'mm', 'dd'), $valueStorageFormat_dateTime);
    /**
     * onselectcallback
     * string
     * (optional) javascript to perform onSelect event (default: null) 
     */
    $onSelectCallback = (isset($params['onselectcallback'])) ? $params['onselectcallback'] : null;
    /**
     * readonly
     * boolean
     * (optional) whether the display field is readonly of active (default: (boolean)true - IS readonly) 
     */
    $readOnly = (isset($params['readonly'])) ? $params['readonly'] : true;
    /**
     * object
     * string
     * (optional) object name for html element names. e.g. name='myObjectName[myVariable]' (default: null) 
     */
    $object = (isset($params['object'])) ? $params['object'] : null;
    /**
     * mindate
     * mixed (php DateTime object or string formatted in same manner as display object
     * (optional) minimum date allowed to be selected in datepicker (default: null - choose any date)
     */
    $minDate = (isset($params['mindate'])) ? $params['mindate'] : null;
    /**
     * maxdate
     * mixed (php DateTime object or string formatted in same manner as display object
     * (optional) maximum date allowed to be selected in datepicker (default: null - choose any date) 
     */
    $maxDate = (isset($params['maxdate'])) ? $params['maxdate'] : null;
    /**
     * autosize
     * sstring (not boolean!)
     * (optional) resize the display field to match the length of the text (default: (string)true) 
     */
    $autoSize = (isset($params['autosize'])) ? $params['autosize'] : 'true';
    /**
     * theme
     * string
     * (optional) which jquery theme to use for this plugin. Uses JQueryUtil::loadTheme() (default: 'base')
     */
    $jQueryTheme = (isset($params['theme'])) ? $params['theme'] : 'base';
    /**
     * lang
     * string
     * (optional) language of datepicker (default: current system language)
     */
    $lang = (isset($params['lang'])) ? $params['lang'] : ZLanguage::getLanguageCode();

    // check required params
    if (!isset($displayElement)) {
        $view->trigger_error(__f('Error! in %1$s: the %2$s parameter must be specified.', array('jquery_datepicker', 'displayelement')));
        return false;
    }

    $minDateValue = ($minDate instanceof DateTime) ? $minDate->format($displayFormat_dateTime) : $minDate;
    $maxDateValue = ($maxDate instanceof DateTime) ? $maxDate->format($displayFormat_dateTime) : $maxDate;

    // load required javascripts
    PageUtil::addVar("javascript", "jquery-ui");
    if (!empty($lang) && ($lang <> 'en')) {
        PageUtil::addVar("javascript", "javascript/jquery-ui/i18n/jquery.ui.datepicker-$lang.js");
    }
    JQueryUtil::loadTheme($jQueryTheme);

    // build the datepicker
    $javascript = "
        jQuery(document).ready(function() {
            jQuery('#$displayElement').datepicker({
                dateFormat: '$displayFormat_javascript',
                defaultDate: '{$defaultDate->format($displayFormat_dateTime)}',";
    if (isset($valueStorageElement)) {
        $javascript .="
                altField: '#$valueStorageElement',
                altFormat: '$valueStorageFormat_javascript',";
    }
    if (isset($minDate)) {
        $javascript .= "
                minDate: '$minDateValue',";
    }
    if (isset($maxDate)) {
        $javascript .= "
                maxDate: '$maxDateValue',";
    }
    if (isset($onSelectCallback)) {
        $javascript .= "
                onSelect: function(dateText, inst) {" . $onSelectCallback . "},";
    }
    $javascript .= "
                autoSize: $autoSize
            });
        });";
    PageUtil::addVar("footer", "<script type='text/javascript'>$javascript</script>");

    $readOnlyHtml = ($readOnly) ? " readonly='readonly'" : "";

    $name = isset($object) ? "{$object}[{$displayElement}]" : $displayElement;
    $html = "<input type='text'{$readOnlyHtml} id='$displayElement' name='$name' value='{$defaultDate->format($displayFormat_dateTime)}' />\n";
    if (isset($valueStorageElement)) {
        $name = isset($object) ? "{$object}[{$valueStorageElement}]" : $valueStorageElement;
        $html .= "<input type='hidden' id='$valueStorageElement' name='$name' value='{$defaultDate->format($valueStorageFormat_dateTime)}' />";
    }

    return $html;
}