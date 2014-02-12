<?php
/* @var $this EquipoConexionController */
/* @var $model EquipoConexion */
?>

<?php
$this->breadcrumbs=array(
	'Equipo de Conexión'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Equipos de Conexión', 'url'=>array('index')),
	array('label'=>'Administrar Equipos de Conexión', 'url'=>array('admin')),
);
?>

<h1>Registrar Equipo de Conexión</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>