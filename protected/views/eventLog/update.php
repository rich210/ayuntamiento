<?php
/* @var $this EventLogController */
/* @var $model EventLog */
?>

<?php
$this->breadcrumbs=array(
	'Event Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Event Log', 'url'=>array('index')),
	array('label'=>'Registrar Event Log', 'url'=>array('create')),
	array('label'=>'Ver Event Log', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Event Log', 'url'=>array('admin')),
);
?>

    <h1>Update EventLog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>