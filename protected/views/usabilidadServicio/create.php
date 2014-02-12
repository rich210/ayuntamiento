<?php
/* @var $this UsabilidadServicioController */
/* @var $model UsabilidadServicio */
?>

<?php
$this->breadcrumbs=array(
	'Usabilidad Servicios'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Usos del Servicio', 'url'=>array('index')),
	array('label'=>'Administrar Usos del Servicio', 'url'=>array('admin')),
);
?>

<h1>Registrar Uso Servicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>