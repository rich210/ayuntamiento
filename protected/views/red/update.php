<?php
/* @var $this RedController */
/* @var $model Red */
?>

<?php
$this->breadcrumbs=array(
	'Reds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Parques', 'url'=>array('index')),
	array('label'=>'Registrar Parque', 'url'=>array('create')),
	array('label'=>'Ver Parque', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Parques', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Parque <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>