<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */


$this->breadcrumbs=array(
	'Punto Accesos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Antenas', 'url'=>array('index')),
	array('label'=>'Registrar Antena', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#punto-acceso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Antenas</h1>

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
	'id'=>'punto-acceso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'status',
		'nombre',
		'descripcionProducto',
		'ipPublica',
		'codigoProducto',
		/*
		'mac',
		'modelo',
		'numeroSerial',
		'lanIp',
		'red_id',
		'lat',
		'lng',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>