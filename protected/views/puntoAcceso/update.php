Antenas<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */
?>

<?php
$this->breadcrumbs=array(
	'Punto Accesos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Antenas', 'url'=>array('index')),
	array('label'=>'Registrar Antena', 'url'=>array('create')),
	array('label'=>'Ver Antena', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Antenas', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Antena <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>