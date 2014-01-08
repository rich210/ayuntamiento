<?php
/* @var $this ZonaCiudadController */
/* @var $model ZonaCiudad */
?>

<?php
$this->breadcrumbs=array(
	'Zona Ciudads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ZonaCiudad', 'url'=>array('index')),
	array('label'=>'Manage ZonaCiudad', 'url'=>array('admin')),
);
?>

<h1>Create ZonaCiudad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>