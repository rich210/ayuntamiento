<?php
/* @var $this InteresController */
/* @var $model Interes */
?>

<?php
$this->breadcrumbs=array(
	'Interes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Interes', 'url'=>array('index')),
	array('label'=>'Create Interes', 'url'=>array('create')),
	array('label'=>'View Interes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Interes', 'url'=>array('admin')),
);
?>

    <h1>Update Interes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>