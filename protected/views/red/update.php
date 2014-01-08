<?php
/* @var $this RedController */
/* @var $model Red */
?>

<?php
$this->breadcrumbs=array(
	'Reds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Red', 'url'=>array('index')),
	array('label'=>'Create Red', 'url'=>array('create')),
	array('label'=>'View Red', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Red', 'url'=>array('admin')),
);
?>

    <h1>Update Red <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>