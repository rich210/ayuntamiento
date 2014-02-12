s<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Personas', 'url'=>array('index')),
	array('label'=>'Administrar Personas', 'url'=>array('admin')),
);
?>

<h1>Registrar Persona</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'usuario'=>$usuario)); ?>