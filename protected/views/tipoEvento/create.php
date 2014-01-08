<?php
/* @var $this TipoEventoController */
/* @var $model TipoEvento */
?>

<?php
$this->breadcrumbs=array(
	'Tipo Eventos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoEvento', 'url'=>array('index')),
	array('label'=>'Manage TipoEvento', 'url'=>array('admin')),
);
?>

<h1>Create TipoEvento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>