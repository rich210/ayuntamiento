<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'usuario',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'contrasena',array('span'=>5,'maxlength'=>80)); ?>

                    <?php echo $form->textFieldControlGroup($model,'cancelado',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_creacion',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_modificacion',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Buscar',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->