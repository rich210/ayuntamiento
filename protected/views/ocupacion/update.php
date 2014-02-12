<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */
?>

<?php
$this->breadcrumbs=array(
	'Ocupaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Ocupaciones', 'url'=>array('index')),
	array('label'=>'Registrar Ocupacion', 'url'=>array('create')),
	array('label'=>'Ver Ocupacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Ocupaciones', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Ocupación <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>