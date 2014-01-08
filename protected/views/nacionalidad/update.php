<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
?>

<?php
$this->breadcrumbs=array(
	'Nacionalidads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nacionalidad', 'url'=>array('index')),
	array('label'=>'Create Nacionalidad', 'url'=>array('create')),
	array('label'=>'View Nacionalidad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nacionalidad', 'url'=>array('admin')),
);
?>

    <h1>Update Nacionalidad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>