<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=> "News",

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.widgets.header.*',

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
        'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1321',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),


	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'class'=>'CWebUser',
			'allowAutoLogin'=>true,
            'loginUrl'=>array('/admin/user/login'),
		),

		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'rules'=>array(
			    '' => 'site/index' ,
//                'admin' => 'admin/user/login',
//                'admin/login' => 'admin/default/index',
                'news/<slug:[a-z0-9_\-]+>' => 'news/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

			),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'authManager' => array(
		    'class' => 'CPhpAuthManager',
//            'connectionID' => 'db'
        ),


		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : '/site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
        'month'   => [
            'January' => 'Yanvar',
            'February' => 'Fevral',
            'March' => 'Mart',
            'April' => 'Aprel',
            'May' => 'May',
            'June' => 'Iyun',
            'July' => 'Iyul',
            'August' => 'Avgust',
            'September' => 'Sentabr',
            'October' => 'Oktyabr',
            'November' => 'Noyabr',
            'December' => 'Dekabr'
        ],

        'status' => [
            '0' => 0,
            '1' => 1,
        ],

        'menu_position' => [
            '0' => 'TOP HEADER',
            '1' => 'HEADER',
            '2' => 'FOOTER',
        ],
	),


);
