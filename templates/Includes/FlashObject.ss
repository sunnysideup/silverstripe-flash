<% if FlashObjectData %><% control FlashObjectData %>

	<div id="wrapperFor-{$ID}" style="<% if Height %>height: {$Height}px!important;<% end_if %><% if Width %> width: {$Width}px!important;<% end_if %>">
	<% if UseDynamicInsert %>
		<div id="$ID" style="<% if Height %>height: {$Height}px!important;<% end_if %><% if Width %> width: {$Width}px!important;<% end_if %>">
			<p class="FlashAlternativeContent" style="display: none;">$AlternativeContent</p>
		</div>
	<% else %>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"<% if Width %> width="$Width"<% end_if %><% if Height %> height="$Height" id="$ID"<% end_if %>>
			<param name="movie" value="$FileName" />
			$Parameters
			<!--[if !IE]>-->
			<object type="application/x-shockwave-flash" data="$FileName" width="$Width" height="$Height">
				$Parameters
			<!--<![endif]-->
				<p class="FlashAlternativeContent" style="display: none;">$AlternativeContent</p>
			<!--[if !IE]>-->
			</object>
			<!--<![endif]-->
		</object>
	<% end_if %>
	</div>

<% end_control %><% end_if %>
