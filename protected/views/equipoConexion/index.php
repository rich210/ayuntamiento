<?php
/* @var $this EquipoConexionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Equipos de Conexión',
);

$this->menu=array(
	array('label'=>'Registrar Equipo de Conexión','url'=>array('create')),
	array('label'=>'Administrar Equipos de Conexión','url'=>array('admin')),
);
?>

<h1>Equipos de Conexión</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>