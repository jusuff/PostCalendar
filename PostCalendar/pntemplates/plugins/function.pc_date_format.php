<?php
/**
 *  $Id: function.pc_date_format.php,v 1.6 2004/08/02 12:28:27 rgasch Exp $
 *
 *  PostCalendar::PostNuke Events Calendar Module
 *  Copyright (C) 2002  The PostCalendar Team
 *  http://postcalendar.tv
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
function smarty_function_pc_date_format($args) 
{
    extract($args); unset($args);
    setlocale(LC_TIME, _PC_LOCALE);
    if(!isset($format)) {
        $format = _SETTING_DATE_FORMAT;
    }
    if(isset($date)) {
        echo strftime($format,smarty_make_timestamp($date));
    } else {
        echo strftime($format,time());
    }
}
?>