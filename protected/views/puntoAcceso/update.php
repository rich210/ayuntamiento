<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */
?>

<?php
$this->breadcrumbs=array(
	'Punto Accesos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PuntoAcceso', 'url'=>array('index')),
	array('label'=>'Create PuntoAcceso', 'url'=>array('create')),
	array('label'=>'View PuntoAcceso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PuntoAcceso', 'url'=>array('admin')),
);
?>

    <h1>Update PuntoAcceso <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>