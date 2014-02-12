<?php
	Yii::import('ext.gmap.*');
	
	$gMap = new EGMap();
	$gMap->zoom = 12;
	$gMap->width = '100%';
	$gMap->height = 500;
	$gMap->setContainerId("gmap"); 
	$mapTypeControlOptions = array(
	  'position'=> EGMapControlPosition::LEFT_BOTTOM,
	  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
	);
	 
	$gMap->mapTypeControlOptions= $mapTypeControlOptions;
	 
	$gMap->setCenter(20.967778, -89.621667);
	 
	
	$info_window_b = new EGMapInfoWindow('Hey! I am a marker with label!');
	
	
	 
	// Create marker with label
	if(isset($radio2))
	{
		$redes = Red::model()->findAll(array(
			'with' => array(
				'puntoAccesos',
		),));
		foreach($redes as $red)
		{
				$nRed=0;
				$lat=0;
				$lng=0;
				foreach ($red->puntoAccesos as $puntoAcceso) 
				{
					$nRed+=1;
					$lat+=$puntoAcceso->lat;
					$lng+=$puntoAcceso->lng;
						
				}
				$lat = $lat/$nRed;
				$lng = $lng/$nRed;
				$marker = new EGMapMarkerWithLabel(floatval($lat),floatval($lng), array('title' => $red->nombre));
				$label_options = array(
			  		'backgroundColor'=>'yellow',
			  		'opacity'=>'0.75',
			  		'width'=>'100px',
			  		'color'=>'blue'
				);
			 
				$marker->labelContent= $red->nombre;
				$marker->labelStyle=$label_options;
				$marker->draggable=false;
				$marker->labelClass='labels';
				$marker->raiseOnDrag= false;
				 
				$marker->setLabelAnchor(new EGMapPoint(22,0));
				 
				$marker->addHtmlInfoWindow($info_window_b);
				 
				$gMap->addMarker($marker);
			}
	}else
	{
		$markers = PuntoAcceso::model()->findAll();
		foreach($markers as $mark)
		{
			$marker = new EGMapMarkerWithLabel(floatval($mark->lat),floatval($mark->lng), array('title' => $mark->nombre));
			$label_options = array(
		  		'backgroundColor'=>'yellow',
		  		'opacity'=>'0.75',
		  		'width'=>'100px',
		  		'color'=>'blue'
			);
		 
			$marker->labelContent= $mark->nombre;
			$marker->labelStyle=$label_options;
			$marker->draggable=false;
			$marker->labelClass='labels';
			$marker->raiseOnDrag= false;
			 
			$marker->setLabelAnchor(new EGMapPoint(22,0));
			 
			$marker->addHtmlInfoWindow($info_window_b);
			 
			$gMap->addMarker($marker);
		}
	}
	
	 
	
	 
	// enabling marker clusterer just for fun
	// to view it zoom-out the map
	$gMap->enableMarkerClusterer(new EGMapMarkerClusterer());
	 
	$gMap->renderMap();
?>
<style type="text/css">
	.labels {
	   color: red;
	   background-color: white;
	   font-family: "Lucida Grande", "Arial", sans-serif;
	   font-size: 10px;
	   font-weight: bold;
	   text-align: center;
	   width: 40px;     
	   border: 2px solid black;
	   white-space: nowrap;
	}
</style>