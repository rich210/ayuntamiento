<?php
/* @var $this EquipoConexionController */
/* @var $model EquipoConexion */
?>

<?php
$this->breadcrumbs=array(
	'Equipo de Conexión'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Equipos de Conexión', 'url'=>array('index')),
	array('label'=>'Registrar Equipo de Conexión', 'url'=>array('create')),
	array('label'=>'Ver Equipo de Conexión', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Equipos de Conexión', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Equipo de Conexión <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>