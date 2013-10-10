<?php
/* @var $this TesteVocalController */
/* @var $model TesteVocal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teste-vocal-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php
			if($model->avaliacao){
				echo "<b>Código da avaliação:<b> ".CHtml::link(CHtml::encode($model->avaliacao0->codigo),
						array("/painel/avaliacao/view", "id"=>$model->avaliacao));
			}else{
				echo $form->labelEx($model,'avaliacao');
				echo $form->textField($model,'avaliacao',array('size'=>20,'maxlength'=>20));
				echo $form->error($model,'avaliacao'); 
			}
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php 
			echo $form->dropDownList(
									$model,
									'tipo',
									CHtml::listData(FormTesteVocalTipo::model()->findAll(), 'tipo', 'tipo')
									); 
	    ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php 
		echo $form->labelEx($model,'arquivo'); 
		echo $form->fileField($model,'arquivo')."tamanho máximo: 2MB";
		echo $form->error($model,'arquivo');
		?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->