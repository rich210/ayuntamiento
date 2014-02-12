<?php
/* @var $this GrupoController */
/* @var $model Grupo */
?>

<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Grupos', 'url'=>array('index')),
	array('label'=>'Registrar Grupo', 'url'=>array('create')),
	array('label'=>'Ver Grupos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Grupo', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Grupo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>