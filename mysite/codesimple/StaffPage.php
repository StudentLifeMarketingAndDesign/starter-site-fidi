<?php
class StaffPage extends Page {
	static $db = array (
	);
	static $has_one = array (
		'Photo' => 'Image'
	);
	
	public function getCMSFields(){
		$fields = parent::getCMSFields();
		
		$fields->addFieldToTab("Root.Images", new UploadField('Photo'));
		
		return $fields;
	}
	static $icon = "framework/docs/en/tutorials/_images/treeicons/news-file.gif";
}
class StaffPage_Controller extends Page_Controller {
}