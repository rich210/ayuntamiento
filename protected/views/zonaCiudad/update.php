<?php
/* @var $this ZonaCiudadController */
/* @var $model ZonaCiudad */
?>

<?php
$this->breadcrumbs=array(
	'Zona Ciudads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ZonaCiudad', 'url'=>array('index')),
	array('label'=>'Create ZonaCiudad', 'url'=>array('create')),
	array('label'=>'View ZonaCiudad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ZonaCiudad', 'url'=>array('admin')),
);
?>

    <h1>Update ZonaCiudad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>