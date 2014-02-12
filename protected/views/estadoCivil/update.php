<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */
?>

<?php
$this->breadcrumbs=array(
	'Estado Civils'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Estados Civiles', 'url'=>array('index')),
	array('label'=>'Registrar Estado Civil', 'url'=>array('create')),
	array('label'=>'Ver Estados Civiles', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Estados Civiles', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Estados Civiles <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>