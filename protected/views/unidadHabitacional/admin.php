<?php
/* @var $this UnidadHabitacionalController */
/* @var $model UnidadHabitacional */


$this->breadcrumbs=array(
	'Unidad Habitacionals'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Unidades Habitacionales', 'url'=>array('index')),
	array('label'=>'Registrar Unidad Habitacional', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unidad-habitacional-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Unidades Habitacionales</h1>

<p>
	También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
    
</p>

<?php echo CHtml::link('Búsqueda avanzzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'unidad-habitacional-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'codigo_postal',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
		'pais_id',
		'estado_id',
		'municipio_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>