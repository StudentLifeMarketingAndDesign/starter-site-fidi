<!DOCTYPE html>
<html lang="en">
<head>
	<% base_tag %>
	<title>$Title</title>
	$MetaTags(false)
	
	<% require themedCSS('typography') %>
	<% require themedCSS('form') %>
	<% require themedCSS('layout') %>
	<% require themedCSS('editor') %>
	
</head>

<body>
<div class = "Container">
	<%include header %>

	<div id = "Layout">
		$Layout
	</div>
	<footer class = "footer">
		<p> Copyright $Now.Year - Michael Nagy</p>
	</footer>
</div>
</body>
</html>