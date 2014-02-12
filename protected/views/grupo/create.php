<?php
/* @var $this GrupoController */
/* @var $model Grupo */
?>

<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Grupos', 'url'=>array('index')),
	array('label'=>'Administrar Grupos', 'url'=>array('admin')),
);
?>

<h1>Registrar Grupo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>