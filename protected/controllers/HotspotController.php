<?php

class HotspotController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/ayuntamiento';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','ajaxHotspotPredeterminado'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Hotspot;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		$model->html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="es">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="language" content="en" />

				<!-- blueprint CSS framework -->
				<link rel="stylesheet" type="text/css" href="ayuntamiento/css/screen.css" media="screen, projection" />
				<link rel="stylesheet" type="text/css" href="ayuntamiento/css/print.css" media="print" />
				<!--[if lt IE 8]>
				<link rel="stylesheet" type="text/css" href="ayuntamiento/css/ie.css" media="screen, projection" />
				<![endif]-->

				<link rel="stylesheet" type="text/css" href="ayuntamiento/css/main.css" />
				<link rel="stylesheet" type="text/css" href="ayuntamiento/css/form.css" />
				<!-- Agregar CSS para nuevas paginas -->

				<title>Parque Merida</title>
			</head>

			<body>

			<div class="container" id="page">

				<div id="header">
				</div><!-- Cabecera -->
				
				%condenido%//No Eliminar, el contenido de toda la pagina
				
				<div class="clear"></div>

				<div id="footer">
				</div><!-- Pie de Pagina -->
			</div><!-- Pagina -->
			</body>
			</html>';
		if (isset($_POST['Hotspot'])) {
			$model->attributes=$_POST['Hotspot'];
			$model->fecha_creacion= Date("Y-m-d H:i:s");
			$model->fecha_modificacion= Date("Y-m-d H:i:s");
			if($model->red!='empty')
			{
				if ($model->save()) {
					if($model->red!='0')
					{
						$redHotspot= new RedHotspot;
						$redHotspot->hotspot_id= $model->id;
						$redHotspot->red_id = $model->red;
						if($redHotspot->save())
							$this->redirect(array('view','id'=>$model->id));
					}else
						$this->redirect(array('view','id'=>$model->id));
						
					
				}	
			}
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Hotspot'])) {
			$model->attributes=$_POST['Hotspot'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Hotspot');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Hotspot('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Hotspot'])) {
			$model->attributes=$_GET['Hotspot'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Hotspot the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Hotspot::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Hotspot $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='hotspot-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionAjaxHotspotPredeterminado()
	{
		if(isset($_POST['Hotspot']['predeterminado']))
		{
			
			if($_POST['Hotspot']['predeterminado']=='0')
			{
				$list= CHtml::listData(
                    Red::model()->findAll(),
                    'id',
                    'nombre'
                    );
				foreach($list as $id=>$nombre)
		      	{
		      		echo CHtml::tag(
							'option',
							array('value'=>$id),
							CHtml::encode($nombre),
							true
						);

		      	}

			}
			elseif ($_POST['Hotspot']['predeterminado']=='empty')
			{
				echo CHtml::tag(
						'option',
						array('value'=>'empty'),
						CHtml::encode('Seleccione'),
						true
					);
			}
			else
			{
				echo CHtml::tag(
					'option',
					array('value'=>'0'),
					CHtml::encode('Todos'),
					true
				);
				
			}
		}
		
		
	}
}