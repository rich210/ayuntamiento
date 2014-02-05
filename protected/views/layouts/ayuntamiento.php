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
		<div class="col-md-8">
			<div class="col-md-2 logo">
				<img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/arbolColores.png" alt="logo">
			</div>
			<div class="col-md-10 text-center titulo">
				<?php echo "<h5>".CHtml::encode(Yii::app()->name)."</h5>"; ?>
			</div>
			
		</div>
		<div class="col-md-3 usuario">
			<?php echo "<h4 class='text-center' id='usuario'>".Yii::app()->user->name."</h4>" ?>
			<?php echo "<p class='text-right'>".date('l').", ".date('d')." de ".date('F'). " de ". date('Y')."</p>" ; ?>
		</div>
		
	</div>
	<div class="contenido row" >

		<div class="col-md-2 col-xs-12 col-sm-3">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Vista General', 'url'=>array('/site/general')),
					array('label'=>'Estado', 'url'=>array('/estado/index')),
					array('label'=>'Hotspot', 'url'=>array('/hotspot/index')),
					array(
						'label'=>'Punto de Acceso', 
						'url'=>array('/puntoAcceso/index'), 
					),
					array('label'=>'Roles', 'url'=>array('/srbac'), 'itemOptions'=> array('class'=> $this->getModule() ? 'active': '' )),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
				'htmlOptions'=>array(
					'class'=>'nav nav-pills nav-stacked',
				),
			)); ?>
		</div>
		<div class="col-md-10 col-sm-9" id="page">
			<?php if($this->getModule()==null):?>
				<div class="col-md-12 last">
					<div id="sidebar">
					<?php
						$this->beginWidget('zii.widgets.CPortlet', array(
							'title'=>'Operaciones',
						));
						$this->widget('zii.widgets.CMenu', array(
							'items'=>$this->menu,
							'htmlOptions'=>array('class'=>'nav nav-pills'),
						));
						$this->endWidget();
					?>
					</div><!-- sidebar -->
				</div>
			<?php endif?>	
			<div class="col-md-12">
				<?php echo $content; ?>
			</div>
			
		</div>
		
		

		<div class="clear"></div>

		

	</div><!-- page -->

	<div id="footer" class= "row ">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pie de pagina.png" alt="pie de pagina">
	</div><!-- footer -->

</div>

</body>
</html>
