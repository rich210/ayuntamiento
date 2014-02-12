<?php
/* @var $this InteresController */
/* @var $model Interes */
?>

<?php
$this->breadcrumbs=array(
	'Interes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Intereses', 'url'=>array('index')),
	array('label'=>'Registrar Interes', 'url'=>array('create')),
	array('label'=>'Ver Interes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Intereses', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Interes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>