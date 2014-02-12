<?php
/* @var $this NivelEstudioController */
/* @var $model NivelEstudio */
?>

<?php
$this->breadcrumbs=array(
	'Niveles de Estudios'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Niveles de Estudios', 'url'=>array('index')),
	array('label'=>'Administrar Niveles de Estudios', 'url'=>array('admin')),
);
?>

<h1>Registrar Nivel de Estudio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>