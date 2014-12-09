<?php
namespace ZoopCxModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DashboardController extends AbstractActionController
{
	public function indexAction()
	{
		$view = new ViewModel();
		
		$partGoals = new ViewModel();
		$partGoals->setTemplate('zoop-cx-module/dashboard/partial/goal.phtml');
		
		$partScore = new ViewModel();
		$partScore->setTemplate('zoop-cx-module/dashboard/partial/score.phtml');

		$partMeetings = new ViewModel();
		$partMeetings->setTemplate('zoop-cx-module/dashboard/partial/meeting.phtml');

		$partRating = new ViewModel();
		$partRating->setTemplate('zoop-cx-module/dashboard/partial/rating.phtml');
		
		$view->addChild($partGoals,'partGoals')
			->addChild($partMeetings,'partMeetings')
			->addChild($partRating,'partRating')
		;
		return $view;
	}
}