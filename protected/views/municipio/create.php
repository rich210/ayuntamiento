<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
?>

<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Municipios', 'url'=>array('index')),
	array('label'=>'Administrar Municipios', 'url'=>array('admin')),
);
?>

<h1>Registrar Municipio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>