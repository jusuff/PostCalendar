<?php 
/**
 *  $Id: admin.php,v 1.2 2003/10/31 00:02:29 rgasch Exp $
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

//=========================================================================
//  ok, here's the rest of the language defines
//=========================================================================

define('_PC_UPDATED',                   'Your PostCalendar configuration has been updated.');
define('_PC_UPDATED_DEFAULTS',          'Your PostCalendar configuration has been reset to use defaults.');
define('_POSTCALENDAR',                 'PostCalendar Administration');
define('_PC_ADMIN_GLOBAL_SETTINGS',     '<b>PostCalendar Global Settings</b>');
define('_PC_ADMIN_CATEGORY_SETTINGS',   '<b>PostCalendar Category Settings</b>');
define('_PC_APPROVED_ADMIN',            'Approved Events Administration');
define('_PC_HIDDEN_ADMIN',              'Hidden Events Administration');
define('_PC_QUEUED_ADMIN',              'Queued Events Administration');
define('_PC_NO_EVENT_SELECTED',         'Please select an event');
define('_EDIT_PC_CONFIG_GLOBAL',        'Settings');
define('_EDIT_PC_CONFIG_DEFAULT',       'Use Defaults');
define('_EDIT_PC_CONFIG_CATEGORIES',    'Categories');
define('_PC_CREATE_EVENT',              'Add');
define('_PC_VIEW_APPROVED',             'Approved');
define('_PC_VIEW_HIDDEN',               'Hidden');
define('_PC_VIEW_QUEUED',               'Queued');
define('_PC_SUBMISSION_ADMIN',          'Queued Submissions Administration');
define('_PC_NEW_SUBMISSIONS',           'New Submissions');
define('_PC_NO_SUBMISSIONS',            'There are no New Submissions');
define('_PC_SUNDAY',                    'Sunday');
define('_PC_MONDAY',                    'Monday');
define('_PC_SATURDAY',                  'Saturday');
define('_PC_ADMIN_SUBMIT',              'Commit Changes');
define('_PC_TIME24HOURS',               'Use 24 hour time format?');
define('_PC_TIME_INCREMENT',            'Time Increment for Add (minutes 1-60)');
define('_PC_EVENTS_IN_NEW_WINDOW',      'View events in a popup window?');
define('_PC_INTERNATIONAL_DATES',       'Use international date style?');
define('_PC_FIRST_DAY_OF_WEEK',         'First day of the week');
define('_PC_TIMES',                     'Times array (N/A)');
define('_PC_DAY_HIGHLIGHT_COLOR',       'Current day highlight color');
define('_PC_USE_JS_POPUPS',             'Show hovering event text on mouseover?');
define('_PC_ALLOW_DIRECT_SUBMIT',       'Allow submitted events to be made active instantly?');
define('_PC_ALLOW_SITEWIDE_SUBMIT',     'Allow users to publish Global Events');
define('_PC_ALLOW_USER_CALENDAR',     	'Allow users to publish Personal Calendars');
define('_PC_SHOW_EVENTS_IN_YEAR',       'Populate the year view with events? <i>[not recommended]</i>');
define('_PC_NUM_COLS_IN_YEAR_VIEW',     'Number of columns in year view.');
define('_PC_UPGRADE_TABLES',            'Insert old events into tables');
define('_PC_LIST_HOW_MANY',             'Show how many events on admin pages?');
define('_PC_USE_CACHE',             	'Cache template output?');
define('_PC_CACHE_LIFETIME',            'Cache Lifetime (in seconds)');
define('_PC_DISPLAY_TOPICS',            'Use topics?');
define('_PC_PERFORM_ACTION',            'Perform this action');
define('_PC_ADMIN_ACTION_APPROVE',      'Approve');
define('_PC_ADMIN_ACTION_HIDE',         'Hide');
define('_PC_ADMIN_ACTION_DELETE',       'Delete');
define('_PC_ADMIN_ACTION_EDIT',         'Edit');
define('_PC_ADMIN_ACTION_VIEW',         'View');
define('_PC_EVENTS',                    'Events');
define('_PC_NO_EVENTS',                 'No Events');
define('_PC_APPROVE_ARE_YOU_SURE',      'Are you sure you want to approve these events?');
define('_PC_HIDE_ARE_YOU_SURE',         'Are you sure you want to hide these events?');
define('_PC_VIEW_ARE_YOU_SURE',         'Are you sure you want to view these events?');
define('_PC_EDIT_ARE_YOU_SURE',         'Are you sure you want to edit these events?');
define('_PC_ADMIN_EVENTS_APPROVED',     'The event(s) have been approved.');
define('_PC_ADMIN_EVENTS_HIDDEN',       'The event(s) have been hidden.');
define('_PC_NEXT',                      'Next');
define('_PC_PREV',                      'Prev');
define('_PC_EVENT_DATE_FORMAT',         'Date Display Format <i>uses php <a href="http://php.net/strftime">strftime</a> format</i>');
define('_PC_CAT_DELETE',                'Delete');
define('_PC_CAT_NAME',                  'Category Name');
define('_PC_CAT_DESC',                  'Category Description');
define('_PC_CAT_COLOR',                 'Category Color');
define('_PC_CAT_NEW',                   'New =>');
define('_PC_ARE_YOU_SURE',              'Are you sure you\'d like to continue with these actions?');
define('_PC_DELETE_CATS',               'Delete Categories with ID(s) : ');
define('_PC_ADD_CAT',                   'Add new category : ');
define('_PC_MODIFY_CATS',               'Make modifications to current categories.');
define('_PC_CATS_CONFIRM',              'YES!');
define('_PC_DEFAULT_TEMPLATE',          'Default Template');
define('_PC_DEFAULT_VIEW',          	'Default Calendar View');
define('_PC_USE_SAFE_MODE',          	'Is PHP using Safe Mode?');
define('_PC_CLEAR_CACHE',          		'Clear Smarty Cache');
define('_PC_CACHE_CLEARED',          	'Smarty Cache has been cleared');
define('_PC_TEST_SYSTEM',          		'Test System');
define('_PC_SAFE_MODE_MESSAGE', 		'Make sure "'._PC_USE_SAFE_MODE.'" is CHECKED in PostCalendar Settings!');

// V4B SB START
define('_DATE_STARTMESSAGE', 'insert Startdate');
// V4B SB END
define('_PC_LOCALE','en_US');
//=========================================================================
//  Defines used in all files
//=========================================================================
// new in 3.9.9
define('_DATE_STARTMESSAGE', 'insert startdate');
define('_PC_NOTIFY_ADMIN',				'Notify Admin About Event Submission/Modification?');
define('_PC_NOTIFY_EMAIL',				'Admin Email Address');
define('_PC_NOTIFY_UPDATE_MSG', 		"The following calendar event has been modifed:\n\n");
define('_PC_NOTIFY_NEW_MSG', 			"The following calendar event has been added:\n\n");
define('_PC_NOTIFY_SUBJECT', 			'NOTICE:: PostCalendar Submission/Modification');
//...
define('_POSTCALENDARNOAUTH',			'Not authorised to access PostCalendar module');
define('_POSTCALENDAR_NOAUTH',			'Not authorised to access PostCalendar module');
define('_PC_CAN_NOT_EDIT',				'You are not allowed to edit this event');
define('_PC_CAN_NOT_DELETE',			'You are not allowed to delete this event');
define('_PC_DELETE_ARE_YOU_SURE',       'Are you sure you want to delete this event?');
define('_PC_ADMIN_YES',       			'Yes');
define('_PC_FILTER_USERS',				'Default/Global');
define('_PC_FILTER_USERS_ALL',			'All Users');
define('_PC_FILTER_CATEGORY',			'All Categories');
define('_PC_FILTER_TOPIC',				'All Topics');
define('_USER_BUSY_TITLE',				'Busy');
define('_USER_BUSY_MESSAGE',			'I am busy during this time.');
define('_PC_JUMP_MENU_SUBMIT',  		'go');
define('_PC_TPL_VIEW_SUBMIT', 			'change');
define('_PC_SUBMIT_TEXT', 				'Plain Text');
define('_PC_SUBMIT_HTML', 				'HTML');
define('_CALJAN',           			'January');
define('_CALFEB',           			'February');
define('_CALMAR',           			'March');
define('_CALAPR',           			'April');
define('_CALMAY',           			'May');
define('_CALJUN',           			'June');
define('_CALJUL',           			'July');
define('_CALAUG',           			'August');
define('_CALSEP',           			'September');
define('_CALOCT',           			'October');
define('_CALNOV',           			'November');
define('_CALDEC',           			'December');
define('_CALPREVIOUS',      			'Prev');
define('_CALNEXT',          			'Next');
define('_CALLONGFIRSTDAY',  			'Sunday');
define('_CALLONGSECONDDAY', 			'Monday');
define('_CALLONGTHIRDDAY',  			'Tuesday');
define('_CALLONGFOURTHDAY', 			'Wednesday');
define('_CALLONGFIFTHDAY',  			'Thurdsay');
define('_CALLONGSIXTHDAY',  			'Friday');
define('_CALLONGSEVENTHDAY',			'Saturday');
define('_CALMONDAYSHORT',   			'M');
define('_CALTUESDAYSHORT',  			'T');
define('_CALWEDNESDAYSHORT',			'W');
define('_CALTHURSDAYSHORT', 			'T');
define('_CALFRIDAYSHORT',   			'F');
define('_CALSATURDAYSHORT', 			'S');
define('_CALSUNDAYSHORT',   			'S');
define('_CALSUNDAY',        			'Sunday');
define('_CALMONDAY',        			'Monday');
define('_CALTUESDAY',       			'Tuesday');
define('_CALWEDNESDAY',     			'Wednesday');
define('_CALTHURSDAY',      			'Thursday');
define('_CALFRIDAY',        			'Friday');
define('_CALSATURDAY',      			'Saturday');
define('_CAL_DAYVIEW',      			'Day');
define('_CAL_WEEKVIEW',     			'Week');
define('_CAL_MONTHVIEW',    			'Month');
define('_CAL_YEARVIEW',     			'Year');
define('_PC_NEW_EVENT_HEADER',			'Event');
define('_PC_DATE_TIME', 				'Event Date');
define('_PC_ALLDAY_EVENT',				'All day event');
define('_PC_TIMED_EVENT',				'Timed event');
define('_PC_EVENT_TYPE',				'Event Category');
define('_PC_SHARING',					'Sharing');
define('_PC_EVENT_TOPIC',				'Topic');
define('_PC_SHARE_PRIVATE', 			'Private');
define('_PC_SHARE_PUBLIC',				'Public');
define('_PC_SHARE_SHOWBUSY',			'Show as Busy');
define('_PC_SHARE_GLOBAL',				'Global');
define('_PC_EVENT_STREET',				'Street');
define('_PC_EVENT_CITY',				'City');
define('_PC_EVENT_STATE',				'State');
define('_PC_EVENT_POSTAL',				'Postal');
define('_PC_EVENT_CONTACT', 			'Contact');
define('_PC_EVENT_PHONE',				'Phone');
define('_PC_EVENT_EMAIL',				'Email');
define('_PC_REPEATING_HEADER',			'Repeating');
define('_PC_NO_REPEAT', 				'does not repeat');
define('_PC_REPEAT',					'event repeats every');
define('_PC_REPEAT_ON', 				'event repeats on');
define('_PC_OF_THE_MONTH',				'of the month every');
define('_PC_END_DATE',					'End Date');
define('_PC_NO_END',					'no end date');
define('_PC_TIMED_DURATION',			'Duration');
define('_PC_TIMED_DURATION_HOURS',		'Hours');
define('_PC_TIMED_DURATION_MINUTES',	'Minutes');
define('_PC_EVERY', 					'Every');
define('_PC_EVERY_OTHER',				'Every Other');
define('_PC_EVERY_THIRD',				'Every Third');
define('_PC_EVERY_FOURTH',				'Every Fourth');
define('_PC_EVERY_1ST', 				'First');
define('_PC_EVERY_2ND', 				'Second');
define('_PC_EVERY_3RD', 				'Third');
define('_PC_EVERY_4TH', 				'Fourth');
define('_PC_EVERY_LAST',				'Last');
define('_PC_EVERY_SUN', 				'Sun');
define('_PC_EVERY_MON', 				'Mon');
define('_PC_EVERY_TUE', 				'Tue');
define('_PC_EVERY_WED', 				'Wed');
define('_PC_EVERY_THU', 				'Thu');
define('_PC_EVERY_FRI', 				'Fri');
define('_PC_EVERY_SAT', 				'Sat');
define('_PC_OF_EVERY_MONTH',			'month');
define('_PC_OF_EVERY_2MONTH',			'other month');
define('_PC_OF_EVERY_3MONTH',			'3 months');
define('_PC_OF_EVERY_4MONTH',			'4 months');
define('_PC_OF_EVERY_6MONTH',			'6 months');
define('_PC_OF_EVERY_YEAR', 			'year');
define('_PC_EVERY_DAY', 				'Day(s)');
define('_PC_EVERY_WEEK',				'Week(s)');
define('_PC_EVERY_MONTH',				'Month(s)');
define('_PC_MONTHS',					'Month(s)');
define('_PC_EVERY_YEAR',				'Year(s)');
define('_PC_EVERY_MWF', 				'Mon, Wed &amp; Fri');
define('_PC_EVERY_TR',					'Tues &amp; Thur');
define('_PC_EVERY_MF',					'Mon thru Fri');
define('_PC_EVERY_SS',					'Sat &amp; Sun');
define('_PC_EVENT_LOCATION',            'Event Location');
define('_PC_EVENT_CONTNAME',            'Contact Person');
define('_PC_EVENT_CONTTEL',             'Contact Phone Number');
define('_PC_EVENT_CONTEMAIL',           'Contact Email');
define('_PC_EVENT_WEBSITE',             'Event Website');
define('_PC_EVENT_FEE',                 'Event Fee');
define('_PC_EVENT_PREVIEW',             'Preview Event');
define('_PC_EVENT_SUBMIT',              'Submit Event');
define('_PC_EVENT_TITLE',               'Event Title');
define('_PC_EVENT_DESC',                'Event Description');
define('_PC_EVENT_CATEGORY',            'Event Category');
define('_PC_TOPIC',                     'Topic');
define('_PC_REQUIRED',                  '*Required');
define('_PC_AM',                        'AM');
define('_PC_PM',                        'PM');
define('_PC_EVENT_SUBMISSION_FAILED',   'Your submission failed.');
define('_PC_EVENT_SUBMISSION_SUCCESS',  'Your event has been submitted.');
define('_PC_EVENT_EDIT_SUCCESS',  		'Your event has been modified.');
define('_PC_SUBMIT_ERROR',              'There are errors with your submission.  These are outlined below.');
define('_PC_SUBMIT_ERROR1',             'Your start date is greater than your end date');
define('_PC_SUBMIT_ERROR2',             'Your start date is invalid');
define('_PC_SUBMIT_ERROR3',             'Your end date is invalid');
define('_PC_SUBMIT_ERROR4',             'is a required field.');
define('_PC_SUBMIT_ERROR5',             'Your repeating frequency must be at least 1.');
define('_PC_SUBMIT_ERROR6',             'Your repeating frequency must be an integer.');
define('_PC_ADMIN_EVENT_ERROR', 		'There was an error while processing your request.');
define('_PC_ADMIN_EVENTS_DELETED', 		'Your event has been deleted.');
define('_NO_DIRECT_ACCESS',            'You can not access this function directly.');
// V4B
define('_PC_MEETING_MAIL_TITLE', 		'v4b-Meeting - New event');
define('_PC_SHARE_HIDEDESC',  		    'Global, description private');

define('_CALSUBMITEVENT', 'Submit');
define('_CALSEARCHEVENT', 'Search');
define('_EVENTS_OPEN_IN_NEW_WINDOW', 'Events open in new window');

define('_CALMONDAYSHORT',   'M');
define('_CALTUESDAYSHORT',  'T');
define('_CALWEDNESDAYSHORT','W');
define('_CALTHURSDAYSHORT', 'T');
define('_CALFRIDAYSHORT',   'F');
define('_CALSATURDAYSHORT', 'S');
define('_CALSUNDAYSHORT',   'S');
define('_PC_CALENDAR_BLOCK_PREV','Prev');
define('_PC_CALENDAR_BLOCK_NEXT','Next');
define('_PC_BLOCK_TOPIC_DISPLAY','Display topic in block?');
define('_PC_BLOCK_EVENTS_DATE_DISPLAY','Display event dates in block?');
define('_PC_BLOCK_LOCATION_DISPLAY','Display location in block?');
define('_PC_BLOCK_EVENT_OVERVIEW','Display today\'s events in the block?');
define('_PC_BLOCK_EVENTS_DISPLAY_LIMIT','Display how many events?');
define('_PC_BLOCK_EVENTS_DISPLAY_RANGE','How many months ahead to query for upcoming events?');
define('_PC_BLOCK_SHOW_CALENDAR','Display the calendar?');
define('_PC_BLOCK_UPCOMING_EVENTS','Display upcoming events in block?');
define('_PC_BLOCK_USE_POPUPS','Show hovering event text on mouseover?');
define('_PC_SHOW_SS_LINKS','Show search/submit links in block?');
define('_PC_BLOCK_NO_EVENTS','No Events');
define('_PC_TODAYS_EVENTS','Today\'s Events');
define('_PC_UPCOMING_EVENTS','Upcoming Events');
define('_PC_SUBMIT_EVENT','Submit');
define('_PC_SEARCH_EVENT','Search');
define('_PC_AM','AM');
define('_PC_PM','PM');
define('_CREATETABLEFAILED', 'Table creation failed');
define('_UPDATETABLEFAILED', 'Table update failed');

define('_CALVIEWEVENT','Event Details');
define('_CALEVENTDATEPREVIEW','Event Date');
define('_CALSTARTTIME','Start');
define('_CALENDTIME','End');
define('_CALARTICLETEXT','Event Description');
define('_CALLOCATION','Location');
define('_CONTTEL','Phone Number');
define('_CONTNAME','Name');
define('_CONTEMAIL','Email');
define('_CONTWEBSITE','Website');
define('_FEE','Fee');
define('_CALPOSTEDBY','Submitted by');
define('_CALPOSTEDON','Posted on');
define('_PC_AM','AM');
define('_PC_PM','PM');
if (!defined('_POSTCALENDARNOAUTH')) {
	define('_POSTCALENDARNOAUTH','Not authorised to access PostCalendar module');
}
 
//=========================================================================
//  ok, here's the rest of the language defines
//=========================================================================
define('_GETFAILED',            'Items load failed');
define('_CALAPPOINTMENTS',      'Appointments');
define('_CALEVENTS',            'Events');
define('_CALMORNING',           'AM');
define('_CALEVENING',           'PM');
define('_PC_WEEK',              'week');
define('_PC_ADD_EVENT',         'add an event for ');
define('_CALVIEWEVENT',         'Event Details');
define('_CALEVENTDATEPREVIEW',  'Event Begins');
define('_CALENDDATEPREVIEW',    'Event Duration');
define('_CALSTARTTIME',         'Start');
define('_CALENDTIME',           'End');
define('_CALARTICLETEXT',       'Event Description');
define('_CALLOCATION',          'Location');
define('_CONTTEL',              'Phone Number');
define('_CONTNAME',             'Name');
define('_CONTEMAIL',            'Email');
define('_CONTWEBSITE',          'Website');
define('_FEE',                  'Fee');
define('_CALPOSTEDBY',          'Submitted by');
define('_CALPOSTEDON',          'Posted on');
define('_CALCLOSEWINDOW',       'close window');
define('_CALSAMEDAY',           'Same Day');
define('_CALALLDAY',            'All Day');
define('_PC_DUR_HOURS',         'h');
define('_PC_DUR_MINUTES',       'm');
define('_PC_OL_CLOSE',          'Close');
define('_PC_CLICK_FOR_MORE',    'click for more');

//=========================================================================
//  ok, here's the rest of the language defines
//=========================================================================
define('_POSTCALENDAR',         'Calendar');
define('_CALEVENTLINK',         'Create an Event');
define('_CALDAYLINK',           'Day View');
define('_CALWEEKLINK',          'Week View');
define('_CALMONTHLINK',         'Month View');
define('_CALYEARLINK',          'Year View');
define('_PC_LEGEND',            'Legend:');
define('_CALSUBMITEVENT',       'Submit');
define('_CALSEARCHEVENT',       'Search');
define('_PC_PREV_MONTH',        'Prev');
define('_PC_NEXT_MONTH',        'Next');
define('_PC_PREV_DAY',          'Prev');
define('_PC_NEXT_DAY',          'Next');
define('_PC_EVENTS',            '<b>Events for </b>');
define('_PC_SEARCH_FORM',       'Search the Events');
define('_PC_SEARCH_RESULTS',    'Search Results:');
define('_PC_SEARCH_KEYWORDS',   'Keywords');
define('_PC_SEARCH_PERFORM',    'Perform Search');
define('_PC_SEARCH_MAX',        'More than 50 results, please make your search more specific.');

define('_PC_DISPLAY_REPEATING', 'Display repeating options');
define('_PC_DISPLAY_MEETING',   'Display meeting options');
define('_PC_USE_ADDRESSBOOK',   'Use address book lookup');
define('_PC_COMPANY',           'Company');
define('_PC_BRANCH',            'Branch');
define('_PC_PASTE_IT',          'transfer');
define('_PC_CANCEL_IT',         'cancel');
?>