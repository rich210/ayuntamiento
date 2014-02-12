<?php
/* @var $this TipoEventoController */
/* @var $model TipoEvento */
?>

<?php
$this->breadcrumbs=array(
	'Tipo Eventos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Tipos de Eventos', 'url'=>array('index')),
	array('label'=>'Administrar Tipos de Eventos', 'url'=>array('admin')),
);
?>

<h1>Registrar Tipo de Evento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>