<?php
/* @var $this UsabilidadServicioController */
/* @var $model UsabilidadServicio */
?>

<?php
$this->breadcrumbs=array(
	'Usabilidad Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsabilidadServicio', 'url'=>array('index')),
	array('label'=>'Manage UsabilidadServicio', 'url'=>array('admin')),
);
?>

<h1>Create UsabilidadServicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>