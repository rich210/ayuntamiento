<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public $layout = 'main';

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'error', 'contact','login','logout','start'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('general','ajaxGmapRadio','ajaxMenuRed','ajaxMenuPuntoAcceso','ajaxMenuZona'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$layout = Hotspot::model()->find("predeterminado=:predeterminado", array(":predeterminado"=>1));
		//var_dump($layout->html);
		
		$model= new Cliente;
		$login= new loginForm;
		if(isset($_GET["puntoAcceso"]))
		{
			$this->render('index',array(
				'model'=>$model,
				'puntoAcceso'=>$_GET["puntoAcceso"],
				'login'=>$login,
				));	
		}else{
			$this->render('index',array(
				'model'=>$model,
				'login'=>$login,
				));	
		}
		
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
			{
				 
				if(Yii::app()->user->checkAccess('Aplicacion'))
				{
					$this->redirect(Yii::app()->getBaseUrl().'/site/general');
				}
				else
				{
					$this->redirect('http://www.google.com');
				}
					
			}
				//$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionStart()
	{

		if(!isset(Yii::app()->request->cookies['siadipqiigam']))
		{

			
			$user_agent = $_SERVER['HTTP_USER_AGENT'];;
			$os_platform = "Unknown OS Platform";
			$os_array = array(
				'/windows nt 6.2/i'     =>  'Windows 8',
				'/windows nt 6.1/i'     =>  'Windows 7',
	            '/windows nt 6.0/i'     =>  'Windows Vista',
	            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
	            '/windows nt 5.1/i'     =>  'Windows XP',
	            '/windows xp/i'         =>  'Windows XP',
	            '/windows nt 5.0/i'     =>  'Windows 2000',
	            '/windows me/i'         =>  'Windows ME',
	            '/win98/i'              =>  'Windows 98',
	            '/win95/i'              =>  'Windows 95',
	            '/win16/i'              =>  'Windows 3.11',
	            '/macintosh|mac os x/i' =>  'Mac OS X',
	            '/mac_powerpc/i'        =>  'Mac OS 9',
	            '/linux/i'              =>  'Linux',
	            '/ubuntu/i'             =>  'Ubuntu',
	            '/iphone/i'             =>  'iPhone',
	            '/ipod/i'               =>  'iPod',
	            '/ipad/i'               =>  'iPad',
	            '/android/i'            =>  'Android',
	            '/blackberry/i'         =>  'BlackBerry',
	            '/webos/i'              =>  'Mobile'
	            );

		    foreach ($os_array as $regex => $value) 
		    { 

		        if (preg_match($regex, $user_agent)) 
		        {
		            $os_platform    =   $value;
		        }

		    } 
		    $cliente = new Cliente;
		    $sistema = SistemaOperativo::model()->find("nombre=?",array($os_platform));
		    $cliente->ip = $_SERVER['REMOTE_ADDR'];
		    $cliente->sistema_operativo_id = $sistema->id;

		    if($cliente->save())
		    {
		    	$puntoAcceso = $_GET["puntoAcceso"];
		    	$event = new EventLog;
			    $event->fecha = Date("Y-m-d H:i:s");
			    $event->punto_acceso_id = PuntoAcceso::model()->find("nombre=:nombre", array(":nombre"=>$puntoAcceso))->id;
			    $event->cliente_id = $cliente->id;
			    $event->tipo_evento_id = TipoEvento::model()->findByPk(1)->id;
			    $event->detalles = "inicio de sesion";
			    $event->validate();
			    if($event->save())
			    {
			    	$cookie = new CHttpCookie('siadipqiigam', $cliente->id);
					$cookie->expire = time()+(60*60*24*180); 
					Yii::app()->request->cookies['siadipqiigam'] = $cookie;
			    	$this->redirect('http://www.merida.gob.mx/municipio/sitiosphp/parques/php/inicio.php');	
			    }
		    	
		    }
		    
		}else
		{
			$idCliente = Yii::app()->request->cookies['siadipqiigam']->value;
			$idCliente = (int)$idCliente;
			$puntoAcceso = $_GET["puntoAcceso"];
			$event = new EventLog;
		    $event->fecha = Date("Y-m-d H:i:s");
		    $event->punto_acceso_id = PuntoAcceso::model()->find("nombre=:nombre", array(":nombre"=>$puntoAcceso))->id;
		    $event->cliente_id = Cliente::model()->findByPk($idCliente)->id;
		    $event->tipo_evento_id = TipoEvento::model()->findByPk(1)->id;
		    $event->detalles = "inicio de sesion";
		    $event->validate();
		    if($event->save())
		    {
		    	$cookie = Yii::app()->request->cookies['siadipqiigam'];
				$cookie->expire = time()+(60*60*24*180);
				Yii::app()->request->cookies['siadipqiigam']= $cookie;
				$this->redirect('http://www.merida.gob.mx/municipio/sitiosphp/parques/php/inicio.php');	
		    }
			
		}	
		
	}

	public function actionGeneral()
	{
		$this->layout='//layouts/ayuntamiento';
		$red=new Red('search');
		$red->unsetAttributes();  // clear any default values
		$this->render('general',array(
			'red'=>$red,
		));
		
	}

	public function actionAjaxGmapRadio()
	{
		
		$this->renderPartial('_gmap',array(
			'mapaSeleccionado' => $_POST['mapaSeleccionado'],
			'zonaSeleccionada' => $_POST['zonaSeleccionada'],
		));
		
	}

	public function actionAjaxMenuPuntoAcceso()
	{
		$puntoAcceso=new PuntoAcceso('search');
		$puntoAcceso->unsetAttributes();  // clear any default values
		$this->widget('bootstrap.widgets.TbGridView', array(
		   	'id'=>'grid',
		   	'type' => TbHtml::GRID_TYPE_STRIPED,
			'dataProvider'=>$puntoAcceso->search(),
			'filter'=>$puntoAcceso,
			'columns'=>array(
				'id',
				'status',
				'nombre',
				'descripcionProducto',
				'ipPublica',
				'codigoProducto',
				'mac',
				'modelo',
				'numeroSerial',
				'lanIp',
				'red_id',
				'lat',
				'lng',
				
			),
		));
	}
	public function actionAjaxMenuRed()
	{
		$red=new Red('search');
		$red->unsetAttributes();  // clear any default values
		$this->widget('bootstrap.widgets.TbGridView', array(
		   	'id'=>'grid',
		   	'type' => TbHtml::GRID_TYPE_STRIPED,
			'dataProvider'=>$red->search(),
			'filter'=>$red,
			'columns'=>array(
				'id',
				'nombre',
				'descripcion',
				'direccion',
				'fecha_creacion',
				'fecha_modificacion',
				/*
				'cancelado',
				'zona_id',
				*/
				
			),
		));
	}

	public function actionAjaxMenuZona()
	{
		$zona=new ZonaCiudad('search');
		$zona->unsetAttributes();  // clear any default values
		$this->widget('bootstrap.widgets.TbGridView', array(
		   	'id'=>'grid',
		   	'type' => TbHtml::GRID_TYPE_STRIPED,
			'dataProvider'=>$zona->search(),
			'filter'=>$zona,
			'columns'=>array(
				'id',
				'nombre',
				'descripcion',
				'fecha_creacion',
				'fecha_modificacion',
				'cancelado',
				
			),
		));
	}
}