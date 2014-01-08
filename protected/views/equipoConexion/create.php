<?php
/* @var $this EquipoConexionController */
/* @var $model EquipoConexion */
?>

<?php
$this->breadcrumbs=array(
	'Equipo Conexions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EquipoConexion', 'url'=>array('index')),
	array('label'=>'Manage EquipoConexion', 'url'=>array('admin')),
);
?>

<h1>Create EquipoConexion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>