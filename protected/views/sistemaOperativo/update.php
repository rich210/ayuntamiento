<?php
/* @var $this SistemaOperativoController */
/* @var $model SistemaOperativo */
?>

<?php
$this->breadcrumbs=array(
	'Sistema Operativos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Sistemas Operativos', 'url'=>array('index')),
	array('label'=>'Registrar Sistema Operativo', 'url'=>array('create')),
	array('label'=>'Ver Sistema Operativo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Sistemas Operativos', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Sistema Operativo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>