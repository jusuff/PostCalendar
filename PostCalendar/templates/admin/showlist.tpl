{*  $Id: postcalendar_admin_showlist.htm 612 2010-06-22 15:15:51Z craigh $  *}
{include file="admin/menu.tpl"}
<div class="z-admincontainer">
<div class="z-adminpageicon">{img modname='PostCalendar' src='admin.png'}</div>
<h2>{gt text="$title"}</h2>
{if empty($events)}
    {gt text='There are no %s events.' tag1=$functionname}
{else}
	<form class="z-adminform" action="{modurl modname="PostCalendar" type="admin" func="adminEvents"}" method="post" enctype="application/x-www-form-urlencoded">
		<div>
			<input type="hidden" name="authid" value="{generateauthkey module="PostCalendar"}" />
			<table class="z-admintable">
                <thead>
    				<tr>
    					<th>{gt text='Select'}</th>
    					<th><a href='{$title_sort_url|safetext}'>{gt text='Title'}</a></th>
    					<th><a href='{$time_sort_url|safetext}'>{gt text='Time stamp'}</a></th>
    				</tr>
                </thead>
                <tbody>
				{section name=event loop=$events}
					<tr class="{cycle values="z-odd,z-even"}">
						<td><input type="checkbox" value="{$events[event].eid}" id="events_{$events[event].eid}" name="events[]" /></td>
						<td><a href='{modurl modname="PostCalendar" type="event" func="edit" eid=$events[event].eid}' >{$events[event].title|safetext}</a></td>
						<td>{$events[event].time}</td>
					</tr>
				{/section}
                </tbody>
			</table>
			<div style='text-align: left;'>
				{html_options name=action options=$formactions selected=$actionselected}
				<input type="hidden" name="thelist" value="{$function}" />
				<input type="submit" value="{gt text="Perform this action"}" />
			</div>
			<div id="listmanipulator" style='text-align: center; background-color:#cccccc; padding:.5em; margin-top:.5em;'>
				{if !empty($prevlink)}
					<< <a href="{$prevlink|safetext}">{gt text="Previous"} {$offset_increment} {gt text="Events"}</a>
				{else}
					{gt text="Previous"}
				{/if}
				&nbsp;|&nbsp;
				{if !empty($nextlink)}
					<a href="{$nextlink|safetext}">{gt text="Next"} {$offset_increment} {gt text="Events"}</a> >>
				{else}
					{gt text="Next"}
				{/if}
			</div>
		</div>
	</form>
{/if}{* end if no events *}
</div><!-- /z-admincontainer -->