<?php
/* @var $this EquipoConexionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Equipo Conexions',
);

$this->menu=array(
	array('label'=>'Create EquipoConexion','url'=>array('create')),
	array('label'=>'Manage EquipoConexion','url'=>array('admin')),
);
?>

<h1>Equipo Conexions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>