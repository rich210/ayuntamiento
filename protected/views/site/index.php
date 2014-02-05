<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h3>Inicio de Sesión</h3>

<div class= "col-md-7">
	<div class="form">
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'login-form',
		'action'=>$this->createUrl("site/login"),
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

		
			<?php echo $form->textFieldControlGroup($login,'username'); ?>
		
			<?php echo $form->passwordFieldControlGroup($login,'password'); ?>
		

		<div class="row rememberMe">
			<?php echo $form->checkBox($login,'rememberMe'); ?>
			<?php echo $form->label($login,'rememberMe'); ?>
			<?php echo $form->error($login,'rememberMe'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Iniciar sesión',array(
			'class'=>"btn-success btn",
			)); ?>
			<?php echo TbHtml::link('Registrarse',$this->createUrl("persona/create"),array(
			'class' => 'btn-info btn'
			)); ?>
		</div>

	<?php $this->endWidget(); ?>
	</div><!-- form -->
</div>
<div class="col-md-5 text-center">
	<h4>Obtenga beneficios registrandosé</h4>
	<?php echo TbHtml::popover('Click aqui para informes', 'Beneficios', 'Tendra atencion personalizada, asi como informacion de interes', array(
    'class' => 'btn btn-warning',
	)); ?>
</div>





<div class="form text-right col-md-12">
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'cliente-form',
	'action'=>isset($puntoAcceso)? $this->createUrl("site/start", array('puntoAcceso'=>$puntoAcceso)) : $this->createUrl("site/start"),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	)); ?>

    <?php echo TbHtml::submitButton("Continuar sin registro",array(
	    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
	    'size'=>TbHtml::BUTTON_SIZE_LARGE,
	    
	)); ?>
	<?php $this->endWidget(); ?>
</div>


