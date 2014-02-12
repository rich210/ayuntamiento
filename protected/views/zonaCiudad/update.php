<?php
/* @var $this ZonaCiudadController */
/* @var $model ZonaCiudad */
?>

<?php
$this->breadcrumbs=array(
	'Zona Ciudads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Zonas de la Ciudad', 'url'=>array('index')),
	array('label'=>'Registrar Zona de la Ciudad', 'url'=>array('create')),
	array('label'=>'Ver Zona de la Ciudad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Zonas de la Ciudad', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Zona de la Ciudad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>