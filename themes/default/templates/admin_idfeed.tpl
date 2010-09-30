{literal}<script language="JavaScript" type='text/javascript'>
function checkAll(checkname, exby)
{
	var elements = document.getElementsByName(checkname);
	for (i = 0; i < elements.length; i++) elements[i].checked = exby.checked? true:false
}
</script>{/literal}
{if $results}{$results}{/if}
<form id="options" name="options" method="post" action="?a=admin_idfeedsyndication">
	<div class='block-header2'>Feeds</div>
	<table>
		<tr style='text-align: left;'>
			<th>Feed URL</th>
			<th>Last Kill</th>
			<th>Trusted</th>
			<th>Fetch</th>
			<th>Delete</th>
		</tr>
{foreach from=$rows key=key item=i}
		<tr>
			<td>
				<input type='text' name='{$i.name}' size='50' class='password' value="{$i.uri}" />
			</td>
			<td>
				<input type='text' name='lastkill{$i.name}' class='lastkill' size='10' value='{$i.lastkill}' />
			</td>
			<td>
				<input type='checkbox' name='trusted[]' class='trusted' value='{$i.name}' {if $i.trusted}checked="checked"{/if} />
			</td>
			<td>
				<input type='checkbox' name='fetch_feed[]' class='fetch' value='{$i.name}' {if $i.fetch}checked="checked"{/if} />
			</td>
			<td>
				<input type='checkbox' name='delete[]' class='delete' value='{$i.name}' />
			</td>
		</tr>
{/foreach}
		<tr>
			<td colspan='2'>
				<i>Example: http://killboard.domain.com/?a=idfeed</i>
			</td>
			<td>
				<input type='checkbox' name='allt' onclick='checkAll("trusted[]",this)' />
				<i>all/none</i>
			</td>
			<td>
				<input type='checkbox' name='allf' onclick='checkAll("fetch_feed[]",this)' />
				<i>all/none</i>
			</td>
			<td>
			</td>
		</tr>
	</table>
	<br />
	<br />
	<br />
	<input type='submit' id='submitFetch' name='fetch' value="Fetch!" />
	<br />
	<br />
	<div class='block-header2'>Options</div>
	<table>
		<tr>
			<td height='50' width='150'>
				<b>Comment for automatically parsed killmails?</b>
			</td>
			<td>
				<input type='text' size='50' class='password' name='fetch_comment' id='fetch_comment' value="{$comment}" />
				<br />
				<i> (leave blank for none)</i>
				<br />
			</td>
		</tr>
	</table>
	<br />
	<br />
	<input type='submit' id='submitOptions' name='submit' value="Save" />
</form>