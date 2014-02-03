<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'punto-acceso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->dropDownListControlGroup($model,'status',array("Encendido","Apagado","Mal Funcionamiento"),array("empty"=>"Seleccione")); ?>

            <?php echo $form->textFieldControlGroup($model,'nombre',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'descripcionProducto',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'ipPublica',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->textFieldControlGroup($model,'codigoProducto',array('span'=>5,'maxlength'=>30)); ?>

            <?php echo $form->textFieldControlGroup($model,'mac',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->textFieldControlGroup($model,'modelo',array('span'=>5,'maxlength'=>10)); ?>

            <?php echo $form->textFieldControlGroup($model,'numeroSerial',array('span'=>5,'maxlength'=>15)); ?>

            <?php echo $form->textFieldControlGroup($model,'lanIp',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->dropDownListControlGroup(
                $model,
                'red_id',
                CHtml::encodeArray(
                    CHtml::listData(
                        Red::model()->findAll("cancelado=:cancelado",array(":cancelado"=>0)),
                        'id',
                        'nombre'
                    )
                ),
                array( "empty" => 'Seleccione' )
            ); ?>

        <?php 
            Yii::import('ext.gmap.*');
            $gMap = new EGMap();
            $gMap->width= "100%";
            $gMap->setHeight(500);
            $gMap->zoom = 12;
            $mapTypeControlOptions = array(
              'position' => EGMapControlPosition::RIGHT_TOP,
              'style' => EGMap::MAPTYPECONTROL_STYLE_DEFAULT
            );
             
            $gMap->mapTypeId = EGMap::TYPE_ROADMAP;
            $gMap->mapTypeControlOptions = $mapTypeControlOptions;
             
            // Preparing InfoWindow with information about our marker.
            $info_window_a = new EGMapInfoWindow("<div class='gmaps-label' style='color: #000;'>Hi! I'm your marker!</div>");
             
            // Setting up an icon for marker.
            $icon = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/car.png");
             
            $icon->setSize(32, 37);
            $icon->setAnchor(16, 16.5);
            $icon->setOrigin(0, 0);
             
            // Saving coordinates after user dragged our marker.
            $dragevent = new EGMapEvent(
                'dragend', 
                "function (event) 
                { 
                    $.ajax({
                        'type':'POST',
                        'url':'".$this->createUrl('puntoAcceso/create')."',
                        'data':({ 'lat' : event.latLng.lat(),  'lng' : event.latLng.lng()}),
                        'cache':false,
                    }).done(function( data ) {
                        alert( 'Sample of data:', data )
                    });
                }", 
                false, 
                EGMapEvent::TYPE_EVENT_DEFAULT
            );
             
            // If we have already created marker - show it
            if ($model->lat and $model->lng) 
            {
                $marker = new EGMapMarker(
                    $model->lat, 
                    $model->lng, 
                    array('title' => 'googleMaps',
                        'icon'=>$icon, 
                        'draggable'=>true), 
                    'marker', 
                    array('dragevent'=>$dragevent));
                $marker->addHtmlInfoWindow($info_window_a);
                $gMap->addMarker($marker);
                $gMap->setCenter($model->lat, $model->lng);
                $gMap->zoom = 16;
             
            // If we don't have marker in database - make sure user can create one
            } else {
                $gMap->setCenter(20.967778, -89.621667);
             
                // Setting up new event for user click on map, so marker will be created on place and respectful event added.
                $gMap->addEvent(new EGMapEvent(
                    'click',
                    'function (event) 
                    {
                        var marker = new google.maps.Marker({
                        position: event.latLng, 
                        map: '.$gMap->getJsName().',
                            draggable: true, 
                            icon: '.$icon->toJs().'
                        }); 
                        '.$gMap->getJsName().'.setCenter(event.latLng); 
                        var dragevent = '.$dragevent->toJs('marker').'; 
                        $.ajax({'.
                            '"type":"POST",'.
                            '"url":"'.$this->createUrl('puntoAcceso/create').'",'.
                            '"dataType": "text",'.
                            '"data":({ "lat" : event.latLng.lat(),  "lng" : event.latLng.lng()}),'.
                            '"cache":false,'.
                        '}).done(function( data ) {
                            if ( console && console.log ) {
                              console.log( "Sample of data:", data );
                            }
                        }); 
                    }', 
                    false, 
                    EGMapEvent::TYPE_EVENT_DEFAULT_ONCE));
            }
            $gMap->renderMap(array(), Yii::app()->language);

                
        ?>
        <?php 
        var_dump($_POST);

        ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->