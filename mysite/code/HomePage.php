<?php
class HomePage extends Page {
static $icon = "framework/docs/en/tutorials/_images/treeicons/home-file.gif";
}
class HomePage_Controller extends Page_Controller {
	public function LatestNews($num=5) {
    	$holder = ArticleHolder::get()->First();
    	return ($holder) ? ArticlePage::get()->filter('ParentID', $holder->ID)->sort('Date DESC')->limit($num) : false;
    	}
}