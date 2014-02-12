<?php
/* @var $this RedController */
/* @var $model Red */
?>

<?php
$this->breadcrumbs=array(
	'Reds'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Parques', 'url'=>array('index')),
	array('label'=>'Administrar Parques', 'url'=>array('admin')),
);
?>

<h1>Registrar Parque</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>