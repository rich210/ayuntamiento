<?php
/* @var $this TipoEventoController */
/* @var $model TipoEvento */
?>

<?php
$this->breadcrumbs=array(
	'Tipo Eventos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipos de Eventos', 'url'=>array('index')),
	array('label'=>'Create Tipo de Evento', 'url'=>array('create')),
	array('label'=>'View Tipo de Evento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Tipos de Eventos', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Tipo de Evento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>