<?php
/* @var $this SistemaOperativoController */
/* @var $model SistemaOperativo */
?>

<?php
$this->breadcrumbs=array(
	'Sistema Operativos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SistemaOperativo', 'url'=>array('index')),
	array('label'=>'Create SistemaOperativo', 'url'=>array('create')),
	array('label'=>'View SistemaOperativo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SistemaOperativo', 'url'=>array('admin')),
);
?>

    <h1>Update SistemaOperativo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>