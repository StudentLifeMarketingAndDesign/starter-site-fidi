<!DOCTYPE html>
<html lang="en">
<head>
	<% base_tag %>
	$MetaTags(false)
	<title>Basic Site | $Title</title>
</head>

<body>
<div id = "Container">
	<div id = "Header">
		<h1> Basic Site </h1>
	</div>
	
	<div id = "Navigation">
		<% if $Menu(1) %>
		<ul>
			<% loop $Menu(1) %>   
			<li>
				<a href="$Link" title="Go to the $Title page" class="$LinkingMode">$MenuTitle
				</a>
			</li>
		<% end_loop %>
      	</ul>
    <% end_if %>
	</div>
	
	<div id = "Layout">
		$Layout
	</div>
	
	<div id = "Footer">
		<p> Copyright $Now.Year - My New Site.</p>
		
	</div>
</div>
</body>
</html>