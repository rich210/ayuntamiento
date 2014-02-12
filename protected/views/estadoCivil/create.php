<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */
?>

<?php
$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Estados Civiles', 'url'=>array('index')),
	array('label'=>'Administrar Estados Civiles', 'url'=>array('admin')),
);
?>

<h1>Registrar Estado Civil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>