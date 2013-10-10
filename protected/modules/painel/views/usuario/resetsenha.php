<h1>Alterar senha</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>
	
	<p>Digite sua senha atual:</p>

	<div class="row">
		<input type="password" value="" name="senhaatual" maxlength="45" size="45">
	</div>

	<p>Digite sua nova senha:</p>
	<div class="row">
		<input type="password" value="" name="senhanova" maxlength="45" size="45">
	</div>
	
	<p>Repita sua nova senha:</p>
	<div class="row">
		<input type="password" value="" name="senhaconfirm" maxlength="45" size="45">
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Alterar'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->