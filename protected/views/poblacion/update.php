<?php
/* @var $this PoblacionController */
/* @var $model Poblacion */
?>

<?php
$this->breadcrumbs=array(
	'Poblacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Poblacion', 'url'=>array('index')),
	array('label'=>'Create Poblacion', 'url'=>array('create')),
	array('label'=>'View Poblacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Poblacion', 'url'=>array('admin')),
);
?>

    <h1>Update Poblacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>