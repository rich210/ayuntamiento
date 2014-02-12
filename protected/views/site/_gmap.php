<?php
	if(empty($mapaSeleccionado) or $mapaSeleccionado!=='1')
	{
		$puntoAccesos = $markers = PuntoAcceso::model()->findAll();
	}else if(isset($mapaSeleccionado) && $mapaSeleccionado=='1')
	{
		$redes = Red::model()->findAll(array(
		'with' => array(
			'puntoAccesos',
		),));	
	}
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script type="text/javascript">


function initialize() {
  var myLatlng = new google.maps.LatLng(20.967778, -89.621667);
  var mapOptions = {
    zoom: 12,
    center: myLatlng,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
    },
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL
    }
    
  }
  var map = new google.maps.Map(document.getElementById('gmapCont'), mapOptions);
	<?php if(isset($redes)):?>
	  	<?php foreach($redes as $red): ?>
			<?php
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
			  ?>
			  var red<?php echo $red->id; ?> = new google.maps.Marker({
			  	position: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>),
			  	map: map,
			  	title: '<?php echo $red->nombre; ?>'
		  	});
	  	<?php endforeach; ?>
	<?php elseif(isset($puntoAccesos)): ?>
		<?php foreach ($puntoAccesos as $puntoAcceso):?>
			var puntoAcceso<?php echo $puntoAcceso->id; ?> = new google.maps.Marker({
		  	position: new google.maps.LatLng(<?php echo $puntoAcceso->lat; ?>, <?php echo $puntoAcceso->lng; ?>),
		  	map: map,
		  	title: '<?php echo $puntoAcceso->nombre; ?>'
		  });
		<?php endforeach;?>
	<?php endif; ?>
}

initialize();


</script>