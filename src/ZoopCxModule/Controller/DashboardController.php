<?php
namespace ZoopCxModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DashboardController extends AbstractActionController
{
	public function indexAction()
	{
		$view = new ViewModel();
		
		$partNotification = new ViewModel();
		$partNotification->setTemplate('zoop-cx-module/dashboard/partial/notification.phtml');
		
		$partScore = new ViewModel();
		$partScore->setTemplate('zoop-cx-module/dashboard/partial/score.phtml');

		$partRating = new ViewModel();
		$partRating->setTemplate('zoop-cx-module/dashboard/partial/rating.phtml');
		
		$view->addChild($partNotification,'partNotification')
			->addChild($partScore,'partScore')
			->addChild($partRating,'partRating')
		;
		return $view;
	}
}