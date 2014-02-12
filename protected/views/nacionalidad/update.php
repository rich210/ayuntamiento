<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
?>

<?php
$this->breadcrumbs=array(
	'Nacionalidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Nacionalidades', 'url'=>array('index')),
	array('label'=>'Registrar Nacionalidad', 'url'=>array('create')),
	array('label'=>'Ver Nacionalidad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Nacionalidad', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Nacionalidad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>