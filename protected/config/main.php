<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistema integral para la administración de información en parques públicos con internet inalámbrico gratuito del Ayuntamiento de Mérida',
	'language'=>'es',
	'sourceLanguage'=>'es',
	'charset'=>'utf-8',
	'timeZone'=>'America/Mexico_City',
	'layout' => 'column2',

	// preloading 'log' component
	'preload'=>array('log'),
	'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'bootstrap.helpers.TbHtml',
		'application.modules.srbac.controllers.SBaseController',
		
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'QLszj5FKwwzSpYJn',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths' => array('bootstrap.gii'),
		),
		'srbac' => array(
			'userclass'=>'Usuario', //default: User
			'userid'=>'id', //default: userid
			'username'=>'usuario', //default:username
			'delimeter'=>'@', //default:-
			'debug'=>true, //default :false
			'pageSize'=>10, // default : 15
			'superUser' =>'Admin', //default: Authorizer
			'css'=>'srbac.css', //default: srbac.css
			'layout'=>'application.views.layouts.ayuntamiento', //default: application.views.layouts.main,
			//must be an existing alias
			'notAuthorizedView'=> 'srbac.views.authitem.unauthorized', // default:
			//srbac.views.authitem.unauthorized, must be an existing alias
			'alwaysAllowed'=>array(
			 	//default: array()
				'SiteLogin',
				'SiteLogout',
				'SiteIndex',
				'SiteAdmin',
				'SiteError', 
				'SiteContact'
			),
			'userActions'=>array(
				'Show',
				'View',
				'List'
			), //default: array()
			'listBoxNumberOfLines' => 15, //default : 10 'imagesPath' => 'srbac.images', // default: srbac.images 'imagesPack'=>'noia', //default: noia 'iconText'=>true, // default : false 'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,
			//must be an existing alias 'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
			//must be an existing alias 'showHeader'=>true, // default: false 'showFooter'=>true, // default: false
			'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
			// must be an existing alias 
			),
		
		
	),

	// application components
	'components'=>array(
		'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		
		),
		'authManager'=>array(
			// Path to SDbAuthManager in srbac module if you want to use case insensitive
			//access checking (or CDbAuthManager for case sensitive access checking)
			'class'=>'CDbAuthManager',
			'defaultRoles'=>array('authenticated', 'Admin'),
			// The database component used
			'connectionID'=>'db',
			// The itemTable name (default:authitem)
			'itemTable'=>'AuthItems',
			// The assignmentTable name (default:authassignment)
			'assignmentTable'=>'AuthAssignments',
			// The itemChildTable name (default:authitemchild)
			'itemChildTable'=>'AuthItemChildren',
		),
		
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ayuntamiento',
			'emulatePrepare' => true,
			'username' => 'ayuntamiento',
			'password' => 'QLszj5FKwwzSpYJn',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
		'adminEmail'=>'richespsan.210@gmail.com',
	),
);