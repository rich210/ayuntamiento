<?php
/* @var $this SiteController */
Yii::import('ext.gmap.*');
$gMap = new EGMap();
Yii::app()->clientScript->registerScript(
	'PuntoRed',
	'$("input[name=mapaSeleccionado]:radio").change(function(){
		$.ajax({
			url:"'.$this->createUrl("site/ajaxGmapRadio").'",
			type: "POST",
			data: { mapaSeleccionado: $("input[name=mapaSeleccionado]:checked").val(), zonaSeleccionada: $("select[name=zonaSeleccionada]").val() },
			cache: false,
			success:function(html){$("#gmapCont").html(html)}
		})
	})'

);
Yii::app()->clientScript->registerScript(
	'MenuPuntoAcceso',
	'$("#puntoAcceso").click(function(){
		$.ajax({
			url:"'.$this->createUrl("/site/ajaxMenuPuntoAcceso").'",
			type: "POST",
			cache: false,
			success:function(html){$("#grid").html(html)}
		});
		$("#puntoAcceso").addClass("btn-primary");
		$("#red").removeClass("btn-primary");
		$("#zona").removeClass("btn-primary");
	})'

);
Yii::app()->clientScript->registerScript(
	'MenuZona',
	'$("#zona").click(function(){
		$.ajax({
			url:"'.$this->createUrl("/site/ajaxMenuZona").'",
			type: "POST",
			cache: false,
			success:function(html){$("#grid").html(html)}
		});
		$("#zona").addClass("btn-primary");
		$("#puntoAcceso").removeClass("btn-primary");
		$("#red").removeClass("btn-primary");
	})'

);
Yii::app()->clientScript->registerScript(
	'MenuRed',
	'$("#red").click(function(){
		$.ajax({
			url:"'.$this->createUrl("/site/ajaxMenuRed").'",
			type: "POST",
			cache: false,
			success:function(html){$("#grid").html(html)}
		});
		$("#red").addClass("btn-primary");
		$("#puntoAcceso").removeClass("btn-primary");
		$("#zona").removeClass("btn-primary");
	})'

);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
$this->pageTitle=Yii::app()->name;
?>

<h3>Vista General</h3>

<div class="row">
	<div class= "col-md-12">
		<div class="radio-inline col-md-6">
			<?php echo CHtml::radioButtonList(
				"mapaSeleccionado",
				"0", 
				array("0" => "Puntos de acceso", "1" => "Redes"), 
				array(
					"class"=>"radio-inline",
					'separator'=> "", 
					'baseID'=>'radio',
				)
			); ?>
		</div>
		<div class="col-md-6">
			<?php echo CHtml::dropDownList(
				"zonaSeleccionada",
				"Todas", 
				array(0=>"Todas")+
				CHtml::listData(
					ZonaCiudad::model()->findAll(
						"cancelado=:cancelado",
						array(":cancelado"=>0)
					),
					"id",
					"nombre"
				)
			); ?>
		</div>
		
	</div>
	<div class="col-md-12" id='gmapCont' style="height: 500px; width: 100%;">

		<?php $this->renderPartial('_gmap'); ?>
		

	</div>
	<div class='btn-group btn-group-justified col-md-12 menuZonaRedPunto'>
		<div class="btn-group">
		    <button type="button" class="btn btn-primary" id='red'>Red</button>
		</div>
		<div class="btn-group">
			<button type="button" class="btn " id='puntoAcceso'>Punto Acceso</button>
		</div>
	  	<div class="btn-group">
		    <button type="button" class="btn" id='zona'>Zona</button>
	  	</div>  
	</div>
	<div class="col-md-12">
		<?php $this->widget('bootstrap.widgets.TbGridView', array(
		   	'id'=>'grid',
		   	'type' => TbHtml::GRID_TYPE_STRIPED,
			'dataProvider'=>$red->search(),
			'filter'=>$red,
			'columns'=>array(
				'id',
				'nombre',
				'descripcion',
				'direccion',
				'fecha_creacion',
				'fecha_modificacion',
				/*
				'cancelado',
				'zona_id',
				*/

				
			),
		)); ?>
	</div>
	
</div>








