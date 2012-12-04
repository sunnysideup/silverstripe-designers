<% if Designers %>
<ul id="Designers">
	<% control Designers %>
	<li class="$FirstLast">
		<h3>$Name, $Location, $Rate</h3>
		<% if Notes %><p>$Notes</p><% end_if %>
		<% if Sample1 %><a href="$Sample1.Link" rel="prettyPhoto[$Name]"><img src="$Sample1.Link" alt="$Sample1.Title" class="first" /></a><% end_if %>
		<% if Sample2 %><a href="$Sample2.Link" rel="prettyPhoto[$Name]"><img src="$Sample2.Link" alt="$Sample2.Title" /></a><% end_if %>
		<% if Sample3 %><a href="$Sample3.Link" rel="prettyPhoto[$Name]"><img src="$Sample3.Link" alt="$Sample3.Title"  class="last" /></a><% end_if %>
		<hr />
	</li>
	<% end_control %>
</ul>
<% end_if %>
