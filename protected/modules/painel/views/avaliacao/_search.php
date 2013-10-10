<?php
/* @var $this AvaliacaoController */
/* @var $model Avaliacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idade'); ?>
		<?php echo $form->textField($model,'idade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ocupacao'); ?>
		<?php echo $form->textField($model,'ocupacao',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'municipio'); ?>
		<?php echo $form->textField($model,'municipio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'queixa_vocal'); ?>
		<?php echo $form->textField($model,'queixa_vocal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'queixa_vocal_tempo'); ?>
		<?php echo $form->textField($model,'queixa_vocal_tempo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'queixa_vocal_frequencia'); ?>
		<?php echo $form->textField($model,'queixa_vocal_frequencia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rouquidao'); ?>
		<?php echo $form->textField($model,'rouquidao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fadiga_vocal'); ?>
		<?php echo $form->textField($model,'fadiga_vocal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tensao'); ?>
		<?php echo $form->textField($model,'tensao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afonia'); ?>
		<?php echo $form->textField($model,'afonia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pigarro'); ?>
		<?php echo $form->textField($model,'pigarro',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garganta_aperto'); ?>
		<?php echo $form->textField($model,'garganta_aperto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garganta_arranhando'); ?>
		<?php echo $form->textField($model,'garganta_arranhando',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garganta_ressecada'); ?>
		<?php echo $form->textField($model,'garganta_ressecada',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garganta_sensacao_corpo_estranho'); ?>
		<?php echo $form->textField($model,'garganta_sensacao_corpo_estranho',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tosse'); ?>
		<?php echo $form->textField($model,'tosse',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dor_ao_falar'); ?>
		<?php echo $form->textField($model,'dor_ao_falar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dor_ao_deglutir'); ?>
		<?php echo $form->textField($model,'dor_ao_deglutir',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'falhas_na_voz'); ?>
		<?php echo $form->textField($model,'falhas_na_voz',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outros'); ?>
		<?php echo $form->textArea($model,'outros',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habito_falar_alto'); ?>
		<?php echo $form->textField($model,'habito_falar_alto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habito_gritar'); ?>
		<?php echo $form->textField($model,'habito_gritar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumo'); ?>
		<?php echo $form->textField($model,'fumo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumo_tempo_anos'); ?>
		<?php echo $form->textField($model,'fumo_tempo_anos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumo_parou'); ?>
		<?php echo $form->textField($model,'fumo_parou',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumo_parou_tempo_anos'); ?>
		<?php echo $form->textField($model,'fumo_parou_tempo_anos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumo_tipo'); ?>
		<?php echo $form->textField($model,'fumo_tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumo_quantidade_dia'); ?>
		<?php echo $form->textField($model,'fumo_quantidade_dia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fumo_diariamente'); ?>
		<?php echo $form->textField($model,'fumo_diariamente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alcool'); ?>
		<?php echo $form->textField($model,'alcool',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cirurgia_cp'); ?>
		<?php echo $form->textField($model,'cirurgia_cp',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rge'); ?>
		<?php echo $form->textField($model,'rge',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doenca_base'); ?>
		<?php echo $form->textArea($model,'doenca_base',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diagnostico_orl'); ?>
		<?php echo $form->textArea($model,'diagnostico_orl',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grbasi_grau_geral'); ?>
		<?php echo $form->textField($model,'grbasi_grau_geral',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grbasi_rugosidade'); ?>
		<?php echo $form->textField($model,'grbasi_rugosidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grbasi_soprosidade'); ?>
		<?php echo $form->textField($model,'grbasi_soprosidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grbasi_tensao'); ?>
		<?php echo $form->textField($model,'grbasi_tensao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grbasi_astenia'); ?>
		<?php echo $form->textField($model,'grbasi_astenia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grbasi_instabilidade'); ?>
		<?php echo $form->textField($model,'grbasi_instabilidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eav_grau_geral'); ?>
		<?php echo $form->textField($model,'eav_grau_geral',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eav_rugosidade'); ?>
		<?php echo $form->textField($model,'eav_rugosidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eav_soprosidade'); ?>
		<?php echo $form->textField($model,'eav_soprosidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eav_tensao'); ?>
		<?php echo $form->textField($model,'eav_tensao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eav_astenia'); ?>
		<?php echo $form->textField($model,'eav_astenia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eav_instabilidade'); ?>
		<?php echo $form->textField($model,'eav_instabilidade',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_criacao'); ?>
		<?php echo $form->textField($model,'data_criacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->