
<div class="content-container unit size3of4 lastUnit">
	<article>
		<div id = "Banner">
			<img src = "http://www.silverstripe.org/themes/silverstripe/images/sslogo.png" alt = "Homepage image" />
		</div>
		<div class="content">$Content</div>
	</article>
		$Form
		$PageComments
		<% loop $LatestNews %>
			<% include ArticleTeaser %>
		<% end_loop %>
</div>