<?php
/* @var $this SistemaOperativoController */
/* @var $model SistemaOperativo */
?>

<?php
$this->breadcrumbs=array(
	'Sistema Operativos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SistemaOperativo', 'url'=>array('index')),
	array('label'=>'Manage SistemaOperativo', 'url'=>array('admin')),
);
?>

<h1>Create SistemaOperativo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>