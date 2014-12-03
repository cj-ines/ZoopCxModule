<?php
/**
*/
namespace ZoopCxModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function viewAction()
    {
    	$view = new ViewModel();
    	return $view;
    }
}
