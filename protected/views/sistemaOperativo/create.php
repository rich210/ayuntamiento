<?php
/* @var $this SistemaOperativoController */
/* @var $model SistemaOperativo */
?>

<?php
$this->breadcrumbs=array(
	'Sistema Operativos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Sistemas Operativos', 'url'=>array('index')),
	array('label'=>'Administrar Sistemas Operativos', 'url'=>array('admin')),
);
?>

<h1>Registrar Sistema Operativo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>