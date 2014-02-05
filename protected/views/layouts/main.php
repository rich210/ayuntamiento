<?php Yii::app()->bootstrap->register(); /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ayuntamiento.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class= "cuerpo">
	<div class ="fecha row" >
		<?php echo "<p class='text-right'>".date('l').", ".date('d')." de ".date('F'). " de ". date('Y')."</p>" ; ?>
	</div>
	<div class = "logos row">
		<div class="logo parque col-md-8 "><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/parques_logo.png" alt="logo parques en linea"></div>
	  	<div class="logo ayuntamiento col-md-4 text-center"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ayuntamiento.png" alt="logo ayuntamiento"></div>
	</div>
	<div class="contenido row" >

		<div class="col-md-4 col-xs-12 col-sm-4">
		</div>
		<div class="col-md-4" id="page">
			<?php echo $content; ?>
		</div>
		<div class="col-md-4"></div>
		

		<div class="clear"></div>

		

	</div><!-- page -->

	<div id="footer" class= "row ">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pie de pagina.png" alt="pie de pagina">
	</div><!-- footer -->

</div>

</body>
</html>
