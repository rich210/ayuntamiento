<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
?>

<?php
$this->breadcrumbs=array(
	'Nacionalidades'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Nacionalidades', 'url'=>array('index')),
	array('label'=>'Administrar Nacionalidades', 'url'=>array('admin')),
);
?>

<h1>Registrar Nacionalidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>