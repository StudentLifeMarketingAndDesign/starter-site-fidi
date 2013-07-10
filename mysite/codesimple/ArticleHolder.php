<?php
class ArticleHolder extends Page {
	static $allowed_children = array('ArticlePage');
	static $icon = "framework/docs/en/tutorials/_images/treeicons/news-file.gif";
}
class ArticleHolder_Controller extends Page_Controller {
	public function rss() {
    $rss = new RSSFeed($this->Children(), $this->Link(), "The coolest news around");
    return $rss->outputToBrowser();
    }
    public function init() {
    RSSFeed::linkToFeed($this->Link() . "rss");    
    parent::init();
    }	
}