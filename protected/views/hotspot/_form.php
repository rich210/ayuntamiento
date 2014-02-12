<?php
/* @var $this HotspotController */
/* @var $model Hotspot */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'hotspot-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'nombre',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'descripcion',array('span'=>5,'maxlength'=>100)); ?>

            <?php echo $form->textAreaControlGroup($model,'html',array('rows'=>6,'span'=>8)); ?>

            <?php echo $form->labelEx($model,'caducidad'); 
                $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                    "name"=>"Caducidad",
                    "attribute"=>"caducidad",
                    "model"=>$model,
                    "language"=>"es",
                    "options"=>array(
                        "dateFormat"=>"yy-mm-dd",
                        "changeMonth"=>true,
                        "minDate"=>"1d",
                    ),
                ));
            ?>
            <?php echo $form->error($model,'caducidad'); ?>

            <?php echo $form->dropDownListControlGroup(
                $model,
                'predeterminado',
                array('empty'=>'Seleccione', '1' => 'Si', '0' => 'No'),
                array(
                    'ajax' => array(
                        'type' => 'POST',
                        'url' => $this->createUrl('ajaxHotspotPredeterminado'),
                        'update' => '#Hotspot_red',
                    )
                )
                ); ?>

            <?php echo $form->dropDownListControlGroup(
                $model,
                'red',
                array('empty'=>'Seleccione')); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->