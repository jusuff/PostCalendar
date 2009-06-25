<?php
/**
 *	SVN: $Id$
 *
 *  @package     PostCalendar
 *  @author      $Author$
 *  @link	     $HeadURL$
 *  @version     $Revision$
 *
 *  PostCalendar::Zikula Events Calendar Module
 *  Copyright (C) 2002  The PostCalendar Team
 *  http://postcalendar.tv
 *  Copyright (C) 2009  Sound Web Development
 *  Craig Heydenburg
 *  http://code.zikula.org/soundwebdevelopment/
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 *  To read the license please read the docs/license.txt or visit
 *  http://www.gnu.org/copyleft/gpl.html
 *
 */
function smarty_function_pc_form_nav_close($args = array())
{
    extract($args);
    unset($args);

    if (_SETTING_OPEN_NEW_WINDOW || isset($print)) $target = 'target="csCalendar"';
    else $target = '';

    if (!defined('_PC_FORM_DATE')) {
        $Date = postcalendar_getDate();
        echo '<input type="hidden" name="Date" value="' . $Date . '" />';
    }
    if (!defined('_PC_FORM_VIEW_TYPE')) {
        echo '<input type="hidden" name="viewtype" value="' . FormUtil::getPassedValue('viewtype') . '" />';
    }
    if (!defined('_PC_FORM_TEMPLATE')) {
        echo '<input type="hidden" name="tplview" value="' . FormUtil::getPassedValue('tplview') . '" />';
    }
    if (!defined('_PC_FORM_USERNAME')) {
        echo '<input type="hidden" name="pc_username" value="' . FormUtil::getPassedValue('pc_username') . '" />';
    }
    if (!defined('_PC_FORM_CATEGORY')) {
        echo '<input type="hidden" name="pc_category" value="' . FormUtil::getPassedValue('pc_category') . '" />';
    }
    if (!defined('_PC_FORM_TOPIC')) {
        echo '<input type="hidden" name="pc_topic" value="' . FormUtil::getPassedValue('pc_topic') . '" />';
    }

    echo '</form>';
}
