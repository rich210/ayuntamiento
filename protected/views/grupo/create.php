<?php
/* @var $this GrupoController */
/* @var $model Grupo */
?>

<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grupo', 'url'=>array('index')),
	array('label'=>'Manage Grupo', 'url'=>array('admin')),
);
?>

<h1>Create Grupo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>