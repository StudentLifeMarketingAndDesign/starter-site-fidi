<?php
class StaffHolder extends Page {
	static $db = array(
	);
	static $has_one = array(
	);
	
	static $allowed_children = array('StaffPage');
	static $icon = "framework/docs/en/tutorials/_images/treeicons/news-file.gif";
}
class StaffHolder_Controller extends Page_Controller {
}