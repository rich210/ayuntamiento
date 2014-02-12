<?php
/* @var $this EventLogController */
/* @var $model EventLog */
?>

<?php
$this->breadcrumbs=array(
	'Event Logs'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Event Log', 'url'=>array('index')),
	array('label'=>'Administrar Event Log', 'url'=>array('admin')),
);
?>

<h1>Create EventLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>