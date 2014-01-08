<?php
/* @var $this PersonaController */
/* @var $model Persona */


$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#persona-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personas</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'persona-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'titulo',
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'fecha_nacimiento',
		/*
		'direccion',
		'telefono',
		'email',
		'genero',
		'bloqueo',
		'fecha_creacion',
		'fecha_modificacion',
		'nivel_estudios_id',
		'ocupacion_id',
		'estado_civil_id',
		'nacionalidad_id',
		'equipo_conexion_id',
		'usabilidad_servicio_id',
		'pais_id',
		'estado_id',
		'municipio_id',
		'poblacion_id',
		'unidad_habitacional_id',
		'usuario_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>