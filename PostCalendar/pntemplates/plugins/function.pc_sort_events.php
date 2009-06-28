<?php
/**
 * SVN: $Id$
 *
 * @package     PostCalendar
 * @author      $Author$
 * @link        $HeadURL$
 * @version     $Revision$
 *
 * PostCalendar::Zikula Events Calendar Module
 * Copyright (C) 2002  The PostCalendar Team
 * http://postcalendar.tv
 * Copyright (C) 2009  Sound Web Development
 * Craig Heydenburg
 * http://code.zikula.org/soundwebdevelopment/
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * To read the license please read the docs/license.txt or visit
 * http://www.gnu.org/copyleft/gpl.html
 *
 */
function smarty_function_pc_sort_events($params, &$smarty)
{
    if (!array_key_exists('var', $params) || empty($params['var'])) {
        $smarty->trigger_error("pc_sort_events: missing or empty 'var' parameter");
        return;
    }

    if (!array_key_exists('value', $params) || !is_array($params['value'])) {
        $smarty->trigger_error("pc_sort_events: missing or invalid 'value' parameter");
        return;
    }

    if (!array_key_exists('sort', $params)) {
        $smarty->trigger_error("pc_sort_events: missing 'sort' parameter");
        return;
    }

    $order = array_key_exists('order', $params) ? $params['order'] : 'asc';

    switch ($params['sort']) {
        case 'category':
            if (strtolower($order) == 'asc') $function = 'sort_byCategoryA';
            if (strtolower($order) == 'desc') $function = 'sort_byCategoryD';
            break;

        case 'title':
            if (strtolower($order) == 'asc') $function = 'sort_byTitleA';
            if (strtolower($order) == 'desc') $function = 'sort_byTitleD';
            break;

        case 'time':
            if (strtolower($order) == 'asc') $function = 'sort_byTimeA';
            if (strtolower($order) == 'desc') $function = 'sort_byTimeD';
            break;
    }

    $newArray = array();
    foreach ($params['value'] as $date => $events) {
        usort($events, $function);
        $newArray[$date] = $events;
    }

    $smarty->assign_by_ref($params['var'], $newArray);
}
/**
 * Sorting Functions
 **/

function sort_byCategoryA($a, $b)
{
    if ($a['catname'] < $b['catname']) return -1;
    elseif ($a['catname'] > $b['catname']) return 1;
    else return 0;
}
function sort_byCategoryD($a, $b)
{
    if ($a['catname'] < $b['catname']) return 1;
    elseif ($a['catname'] > $b['catname']) return -1;
    else return 0;
}
function sort_byTitleA($a, $b)
{
    if ($a['title'] < $b['title']) return -1;
    elseif ($a['title'] > $b['title']) return 1;
    else return 0;
}
function sort_byTitleD($a, $b)
{
    if ($a['title'] < $b['title']) return 1;
    elseif ($a['title'] > $b['title']) return -1;
    else return 0;
}
function sort_byTimeA($a, $b)
{
    if ($a['startTime'] < $b['startTime']) return -1;
    elseif ($a['startTime'] > $b['startTime']) return 1;
    else return 0;
}
function sort_byTimeD($a, $b)
{
    if ($a['startTime'] < $b['startTime']) return 1;
    elseif ($a['startTime'] > $b['startTime']) return -1;
    else return 0;
}