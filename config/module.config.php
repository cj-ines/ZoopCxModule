
<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ZoopCxModule\Controller\Index' => 'ZoopCxModule\Controller\IndexController',
            'ZoopCxModule\Controller\Notification' => 'ZoopCxModule\Controller\NotificationController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'cx' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'ZoopCxModule\Controller',
                        'controller'    => 'Notification',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'notification-interface' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => 'cx/notification[/:action]',
                            'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'controller' => 'notification',
                                'action' => 'index',
                            ),
                        ),
                    ),
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        ),
        'template_path_stack' => array(
            'ZoopCxModule' => __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
