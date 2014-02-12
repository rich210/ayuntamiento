<?php
/* @var $this SistemaOperativoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Sistema Operativos',
);

$this->menu=array(
	array('label'=>'Registrar Sistema Operativo','url'=>array('create')),
	array('label'=>'Administrar Sistemas Operativos','url'=>array('admin')),
);
?>

<h1>Sistemas Operativos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>