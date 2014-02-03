<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h3>Vista General</h3>
<div class="row">
	<div class="col-md-12 gmap">
		<?php
			//
			// ext is your protected.extensions folder
			// gmaps means the subfolder name under your protected.extensions folder
			//  
			Yii::import('ext.gmap.*');
			 
			$gMap = new EGMap();
			$gMap->zoom = 12;
			$gMap->width = '100%';
			$gMap->height = 500;
			$mapTypeControlOptions = array(
			  'position'=> EGMapControlPosition::LEFT_BOTTOM,
			  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
			);
			 
			$gMap->mapTypeControlOptions= $mapTypeControlOptions;
			 
			$gMap->setCenter(20.967778, -89.621667);
			 
			// Create GMapInfoWindows
			$info_window_b = new EGMapInfoWindow('Hey! I am a marker with label!');
			
			
			 
			// Create marker with label
			$marker = new EGMapMarkerWithLabel(20.967778, -89.621667, array('title' => 'Marker With Label'));
			 
			$label_options = array(
			  'backgroundColor'=>'yellow',
			  'opacity'=>'0.75',
			  'width'=>'100px',
			  'color'=>'blue'
			);
			 
			/*
			// Two ways of setting options
			// ONE WAY:
			$marker_options = array(
			  'labelContent'=>'$9393K',
			  'labelStyle'=>$label_options,
			  'draggable'=>true,
			  // check the style ID 
			  // afterwards!!!
			  'labelClass'=>'labels',
			  'labelAnchor'=>new EGMapPoint(22,2),
			  'raiseOnDrag'=>true
			);
			 
			$marker->setOptions($marker_options);
			*/
			 
			// SECOND WAY:
			$marker->labelContent= 'Prueba';
			$marker->labelStyle=$label_options;
			$marker->draggable=true;
			$marker->labelClass='labels';
			$marker->raiseOnDrag= true;
			 
			$marker->setLabelAnchor(new EGMapPoint(22,0));
			 
			$marker->addHtmlInfoWindow($info_window_b);
			 
			$gMap->addMarker($marker);
			 
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
		
		

	</div>
</div>








