<?php
/**
 * frontpage.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * Srbac main administration page
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem
 * @since 1.0.2
 */
 ?>
<div class="marginBottom">
  <div class="col-md-4">
    <?php echo CHtml::link('Administrador de roles', array('authitem/manage'), array('class'=>'btn'));?>
  </div>
  <div class="col-md-4">
  <?php echo CHtml::link('Asignar roles a usuarios', array('authitem/assign'), array('class'=>'btn'));?>
  </div>
  <div class="col-md-4">
    <?php echo CHtml::link('Ver permisos de usuario', array('authitem/assignments'), array('class'=>'btn'));?>
  </div>
  

  
  
    <div class="reset"></div>
</div>