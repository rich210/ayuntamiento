<?php
/* @var $this ZonaCiudadController */
/* @var $model ZonaCiudad */
?>

<?php
$this->breadcrumbs=array(
	'Zona Ciudads'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Zonas de la Ciudad', 'url'=>array('index')),
	array('label'=>'Administrar Zonas de la Ciudad', 'url'=>array('admin')),
);
?>

<h1>Registrar Zona de la Ciudad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>