<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_tipo'); ?>
		<?php 
			echo $form->dropDownList(
									$model,
									'usuario_tipo',
									CHtml::listData(UsuarioTipo::model()->findAll(), 'id', 'tipo')
									); 
	    ?>
		<?php echo $form->error($model,'usuario_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ativo'); ?>
		<?php 
			echo $form->dropDownList(
									$model,
									'ativo',
									array('0'=>'não','1'=>'sim')
									); 
	    ?>
		<?php echo $form->error($model,'ativo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->