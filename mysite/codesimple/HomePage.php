<?php
class HomePage extends Page {
static $icon = "framework/docs/en/tutorials/_images/treeicons/home-file.gif";
}

class HomePage_Controller extends Page_Controller {
	static $allowed_actions = array('BrowserPollForm');
	
	public function LatestNews($num=5) {
    	$holder = ArticleHolder::get()->First();
    	return ($holder) ? ArticlePage::get()->filter('ParentID', $holder->ID)->sort('Date DESC')->limit($num) : false;
    }
	
	public function BrowserPollForm() {
		if(Session::get('BrowserPollVoted')) return false; 
		$fields = new FieldList (
		new TextField('Name'),
		new OptionsetField('Browser', 'Your Favorite Browser', 
			array(
				'Firefox' => 'Firefox',
				'Chrome' => 'Chrome',
				'Internet Explorer' => 'Internet Explorer',
				'Safari' => 'Safari',
				'Opera' => 'Opera',
				'Lynx' => 'Lynx'
				))
            );
	
            $actions = new FieldList(
            	new FormAction('doBrowserPoll', 'Submit')
            );
            $validator = new RequiredFields('Name', 'Browser');
            return new Form($this, 'BrowserPollForm', $fields,$actions, $validator);
	
	}
    
    public function doBrowserPoll($data, $form) {
        $submission = new BrowserPollSubmission();
        $form->saveInto($submission);
        $submission->write();
        Session::set('BrowserPollVoted', true);
        return $this->redirectBack();
    }
    
    public function BrowserPollResults() {
	    $submissions = new GroupedList(BrowserPollSubmission::get());
	    $total = $submissions->Count();
	    
	    $list = new ArrayList();
	    foreach($submissions ->groupBy('Browser') as $browserName => $browserSubmissions) {
		    $percentage = (int) ($browserSubmissions->Count() / $total * 100);
		    $list->push(new ArrayData(array(
            	'Browser' => $browserName,
            	'Percentage' => $percentage
            )));
	    }
	    return $list; 
    }
 
}
