<?php
/* @var $this PaisController */
/* @var $model Pais */
?>

<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Países', 'url'=>array('index')),
	array('label'=>'Administrar Países', 'url'=>array('admin')),
);
?>

<h1>Registrar País</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>