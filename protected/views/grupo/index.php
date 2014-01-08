<?php
/* @var $this GrupoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Grupos',
);

$this->menu=array(
	array('label'=>'Create Grupo','url'=>array('create')),
	array('label'=>'Manage Grupo','url'=>array('admin')),
);
?>

<h1>Grupos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>