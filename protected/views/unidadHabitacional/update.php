<?php
/* @var $this UnidadHabitacionalController */
/* @var $model UnidadHabitacional */
?>

<?php
$this->breadcrumbs=array(
	'Unidad Habitacionals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Unidades Habitacionales', 'url'=>array('index')),
	array('label'=>'Registrar Unidad Habitacional', 'url'=>array('create')),
	array('label'=>'Ver Unidad Habitacional', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Unidades Habitacionales', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Unidad Habitacional <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>