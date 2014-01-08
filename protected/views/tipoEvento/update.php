<?php
/* @var $this TipoEventoController */
/* @var $model TipoEvento */
?>

<?php
$this->breadcrumbs=array(
	'Tipo Eventos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoEvento', 'url'=>array('index')),
	array('label'=>'Create TipoEvento', 'url'=>array('create')),
	array('label'=>'View TipoEvento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoEvento', 'url'=>array('admin')),
);
?>

    <h1>Update TipoEvento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>