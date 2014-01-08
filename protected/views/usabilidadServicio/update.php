<?php
/* @var $this UsabilidadServicioController */
/* @var $model UsabilidadServicio */
?>

<?php
$this->breadcrumbs=array(
	'Usabilidad Servicios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsabilidadServicio', 'url'=>array('index')),
	array('label'=>'Create UsabilidadServicio', 'url'=>array('create')),
	array('label'=>'View UsabilidadServicio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsabilidadServicio', 'url'=>array('admin')),
);
?>

    <h1>Update UsabilidadServicio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>