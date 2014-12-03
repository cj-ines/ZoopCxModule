<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZoopCxModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class NotificationController extends AbstractActionController
{
    public function redFlagAction()
    {
        $sample_data = array();
        $sample_data[] = array(
            'id' => '002',
            'flag' => '0',
        	'Client Name' => 'Mr. Bob Jones',
        	'Avatar' => 'avatar-1.jpg',
        	'Service' => 'Oil Change',
        	'Vehicle' => 'Red Mustang',
        	'Audio' => 'bob-jones.mp3',
        	'Complaint Details' => 'I am a very dissatisfied customer, and will not give out any recommendations for the Midas location on Mutual Way in Appleton.  Here is what I experienced on 11/6/14.

Brought in our vehicle at 4:00 p.m for an appointment which we had for out Expedition to get warranty brake pad work.  We were told ½ hour to 1 hour time for this service job.  When we got to the counter the person behind the counter seemed to be under the influence of some sort of drug or alcohol, he was talking slow, slurring and did not even look at us.  He (Mike) also had his entire family in some back room and was going back there off and on to deal with them, wife and kids it appeared to be.  The kids were yelling and screaming, not sure how you run this business but this is the last thing I would want to hear when waiting for a vehicle.  We were told that it would take an hour, left the building at 4:18 and came back at 5:20 and I was told it was almost done.  Then 45 minutes later I was told they were having problems getting a wheel back on – seriously???  So, 2 hours later I finally was given our vehicle back.  Meanwhile, the tech and Mike were in the shop working on
  what appeared to be a buddy or co-workers family vehicle.  I am embarrassed for whoever runs this Midas because the clown show you had working last night represents your business very poorly
',
        	'Status' => 0,
            'Comments' => array(
               array (
                    'name' => 'Jim Armstrong',
                    'comment_text' => 'Will contact her!',
                    'timestamp' => '2014-12-11 10:24:24',
                ),
            ),
        );

       /* $sample_data[] = array(
            'id' => '001',
        	'Client Name' => 'Miss Amelia Baker',
        	'Avatar' => 'female-placeholder.png',
        	'Service' => 'Tires',
        	'Vehicle' => 'Gray AE \'86',
        	'Audio' => '',
        	'Complaint Details' => 'Price too high.',
        	'Status' => 1,
            'Comments' => array(
                array (
                    'name' => 'Marcus Jack',
                    'comment_text' => 'I will contact her.',
                    'timestamp' => '2014-12-11 10:24:24',
                ),
                array (
                    'name' => 'Marcus Jack',
                    'comment_text' => 'She is now happy.',
                    'timestamp' => '2014-12-11 10:24:24',
                ),
                 array (
                    'name' => 'Jim Armstrong',
                    'comment_text' => 'Thanks for handling this.',
                    'timestamp' => '2014-12-11 10:24:24',
                ),
            ),
        );
*/
        $list = new ViewModel(array(
        	'client_data' => $sample_data,
        ));
        $list->setTemplate('zoop-cx-module/notification/partial/flag-tiles.phtml');
        $view = new ViewModel();
        $view->addChild($list,'listTiles');
        return $view;
    }
    
    public function viewAction()
    {
    	$view = new ViewModel();
    	return $view;
    }

    public function greenFlagAction()
    {
    	$sample_data = array();
        $sample_data[] = array(
            'id' => '003',
            'flag' => 1,
            'Client Name' => 'Ms. Tiffany Coller',
            'Avatar' => 'avatar-2.jpg',
            'Service' => 'Oil Change',
            'Vehicle' => 'Yellow Mini Cooper',
            'Audio' => 'tiffany.mp3',
            'Complaint Details' => 'I was here yesterday and service was amazing! I am a person that don\'t know much about cars so here\'s what happened. I called in at 11am and asked if I can get an oil change to day and I saw a coupon online. They said just come in  and we will get you started. I asked if i need to print the coupon and he said just say you saw one online . I got there about 12:30. They told me that they will take about 30-45 mins. I went for a walk and came back, it was 1:15pm. They said give them 5 mins. So I just watched then and thats when I remember that my windshield solution was low so I ask them to refill it and they were pouring it while I was asking. They checked my tires and adjusted my tire pressure. They were super nice and I did get my car within the time frame. Super happy with the service and will for sure come back for my next old change!',
            'Status' => 0,
            'Comments' => array(
               array (
                    'name' => 'Jim Armstrong',
                    'comment_text' => 'Will contact her!',
                    'timestamp' => '2014-12-11 10:24:24',
                ),
            ),
        );
        $list = new ViewModel(array(
            'client_data' => $sample_data,
        ));
        $list->setTemplate('zoop-cx-module/notification/partial/flag-tiles.phtml');
        $view = new ViewModel();
        $view->addChild($list,'listTiles');
        return $view;
    }
}
