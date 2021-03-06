<?php

class UnidadHabitacionalController extends Controller
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
				'actions'=>array('create','update','estadosDePaises','municipiosDeEstados'),
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
		$model=new UnidadHabitacional;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['UnidadHabitacional'])) {
			$model->attributes=$_POST['UnidadHabitacional'];
			$model->fecha_creacion= Date("Y-m-d H:i:s");
			$model->fecha_modificacion= Date("Y-m-d H:i:s");
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
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

		if (isset($_POST['UnidadHabitacional'])) {
			$model->attributes=$_POST['UnidadHabitacional'];
			$model->fecha_modificacion= Date("Y-m-d H:i:s");
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
		$dataProvider=new CActiveDataProvider('UnidadHabitacional');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UnidadHabitacional('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['UnidadHabitacional'])) {
			$model->attributes=$_GET['UnidadHabitacional'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UnidadHabitacional the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UnidadHabitacional::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UnidadHabitacional $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='unidad-habitacional-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionEstadosDePaises ()
	{
		if(isset($_POST["UnidadHabitacional"]["pais_id"]))
		{
			$list = CHtml::listData(
				Estado::model()->findAll(
					"pais_id=:pais_id AND cancelado=:cancelado",
					array(
						":pais_id"=>$_POST["UnidadHabitacional"]["pais_id"],
						":cancelado"=>0
					)
				),
				"id","nombre"
				
			);
			
					
		  	echo CHtml::tag(
					'option',
					array('value'=>'empty'),
					CHtml::encode('Seleccionar'),
					true
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
		}else{
			echo CHtml::tag(
					'option',
					array('value'=>'empty'),
					CHtml::encode('No entro'),
					true
				);
		}
	
	
	}
	
	
	public function actionMunicipiosDeEstados ()
	{
		if(isset($_POST["UnidadHabitacional"]["estado_id"]))
		{
			$list = CHtml::listData(
				Municipio::model()->findAll(
					"estado_id=:estado_id AND cancelado=:cancelado",
					array(
						":estado_id"=>$_POST["UnidadHabitacional"]["estado_id"],
						":cancelado"=>0
					)
				),
				"id","nombre"
				
			);
			
					
		  	echo CHtml::tag(
					'option',
					array('value'=>'empty'),
					CHtml::encode('Seleccionar'),
					true
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
		}else{
			echo CHtml::tag(
					'option',
					array('value'=>'empty'),
					CHtml::encode('No entro'),
					true
				);
		}
	  	
	



		
	
	}
	
}