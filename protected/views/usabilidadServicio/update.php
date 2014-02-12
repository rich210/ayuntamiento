<?php
/* @var $this UsabilidadServicioController */
/* @var $model UsabilidadServicio */
?>

<?php
$this->breadcrumbs=array(
	'Usabilidad Servicios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Usos del Servicio', 'url'=>array('index')),
	array('label'=>'Registrar Uso del Servicio', 'url'=>array('create')),
	array('label'=>'Ver Uso del Servicio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usos del Servicio', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Uso del Servicio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>