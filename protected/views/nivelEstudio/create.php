<?php
/* @var $this NivelEstudioController */
/* @var $model NivelEstudio */
?>

<?php
$this->breadcrumbs=array(
	'Nivel Estudios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NivelEstudio', 'url'=>array('index')),
	array('label'=>'Manage NivelEstudio', 'url'=>array('admin')),
);
?>

<h1>Create NivelEstudio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>