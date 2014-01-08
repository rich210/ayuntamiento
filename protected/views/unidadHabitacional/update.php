<?php
/* @var $this UnidadHabitacionalController */
/* @var $model UnidadHabitacional */
?>

<?php
$this->breadcrumbs=array(
	'Unidad Habitacionals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnidadHabitacional', 'url'=>array('index')),
	array('label'=>'Create UnidadHabitacional', 'url'=>array('create')),
	array('label'=>'View UnidadHabitacional', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UnidadHabitacional', 'url'=>array('admin')),
);
?>

    <h1>Update UnidadHabitacional <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>