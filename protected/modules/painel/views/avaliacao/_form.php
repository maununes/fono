<?php
/* @var $this AvaliacaoController */
/* @var $model Avaliacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 

	/*
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'avaliacao-form',
		'enableAjaxValidation'=>false,
	)); 
	*/
	
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id'=>'avaliacao-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>false,
		));

	//opçoes dos dropdowns
	$sexo = array('masculino'=>'masculino', 'feminino'=>'feminino');
	$bool = array('sim'=>'sim', 'não'=>'não', 'não informado'=>'não informado');
	$grbasi = array('0'=>'0', '1'=>'1', '2'=>'2', '3'=>'3');
	$consistencia = array('não informado'=>'não informado' ,'consistente'=>'consistente', 'inconsistente' => 'inconsistente');
	$frequencia_queixa = array('não apresenta'=>'não apresenta' ,'frequente'=>'frequente', 'esporádico' => 'esporádico');
?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php
			if(Yii::app()->controller->action->id == 'create'){
				echo '<label for="Avaliacao_codigo">Prefixo do código *</label>'; 
			}else{
				echo $form->labelEx($model,'codigo');
			}
		?>
		<?php echo $form->textField($model,'codigo',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<hr/>
	
	<?php
		$info = 
					$form->textFieldRow($model,'idade', array('maxlength'=>3)).
					
					$form->dropDownListRow($model,'sexo',$sexo).

					$form->textFieldRow($model,'ocupacao',array('size'=>60,'maxlength'=>255)).

					$form->textFieldRow($model,'escolaridade',array('size'=>60,'maxlength'=>255)).

					$form->textFieldRow($model,'municipio',array('size'=>60,'maxlength'=>255, 'hint'=>'município, estado'));
				
		$sinais =
					$form->radioButtonListRow($model,'queixa_vocal',$bool).
					
					'<div class="control-group ">'.
					$form->labelEx($model,'queixa_vocal_tempo', array('class'=>'control-label', 'style'=>'padding-right: 20px;')).
					$form->textField($model,'queixa_vocal_tempo',array('size'=>45,'maxlength'=>45, 'class'=>'queixa'))." ".
					$form->error($model,'queixa_vocal_tempo').
					CHtml::dropDownList('Avaliacao[queixa_vocal_tempo_unidade]', $model->queixa_vocal_tempo_unidade,array('meses' => 'meses', 'dias' => 'dias'), array('class'=>'queixa')).
					'</div>'.
					
					$form->dropDownListRow($model, 'queixa_vocal_frequencia',$frequencia_queixa, array('class'=>'queixa')).

					$form->radioButtonListRow($model,'rouquidao',$bool).
						
					$form->radioButtonListRow($model,'fadiga_vocal',$bool).

					$form->radioButtonListRow($model,'tensao',$bool).

					$form->radioButtonListRow($model,'afonia',$bool).

					$form->radioButtonListRow($model,'pigarro',$bool).

					$form->radioButtonListRow($model,'garganta_aperto',$bool).

					$form->radioButtonListRow($model,'garganta_arranhando',$bool).

					$form->radioButtonListRow($model,'garganta_ressecada',$bool).

					$form->radioButtonListRow($model,'garganta_sensacao_corpo_estranho',$bool).

					$form->radioButtonListRow($model,'tosse',$bool).

					$form->radioButtonListRow($model,'dor_ao_falar',$bool).

					$form->radioButtonListRow($model,'dor_ao_deglutir',$bool).

					$form->radioButtonListRow($model,'falhas_na_voz',$bool).

					$form->radioButtonListRow($model,'rge',$bool).

					$form->textAreaRow($model,'outros',array('rows'=>6, 'cols'=>50, 'maxlegth'=>255));
	
		$habitos = 
					$form->radioButtonListRow($model,'habito_falar_alto',$bool).

					$form->radioButtonListRow($model,'habito_gritar',$bool).

					$form->radioButtonListRow($model,'fumo',$bool).

					$form->textFieldRow($model,'fumo_tempo_anos', array('class'=>'fumo')).

					$form->radioButtonListRow($model,'fumo_parou',$bool, array('class'=>'fumo')).

					$form->textFieldRow($model,'fumo_parou_tempo_anos', array('class'=>'fumo')).

					$form->textFieldRow($model,'fumo_tipo',array('size'=>45,'maxlength'=>45, 'class'=>'fumo')).
					
					$form->textFieldRow($model,'fumo_quantidade_dia',array('size'=>45,'maxlength'=>45, 'class'=>'fumo')).

					$form->radioButtonListRow($model,'fumo_diariamente',$bool, array('class'=>'fumo')).

					$form->radioButtonListRow($model,'alcool',$bool).

					$form->textFieldRow($model,'alcool_tempo_anos', array('class'=>'alcool')).

					$form->radioButtonListRow($model,'alcool_parou',$bool, array('class'=>'alcool')).

					$form->textFieldRow($model,'alcool_parou_tempo_anos', array('class'=>'alcool')).

					$form->textFieldRow($model, 'alcool_tipo', array('class'=>'alcool')).

					$form->textFieldRow($model,'alcool_quantidade_dia',array('size'=>45,'maxlength'=>45, 'class'=>'alcool')).

					$form->radioButtonListRow($model,'alcool_diariamente',$bool, array('class'=>'alcool'));
				
		$historia =
					$form->radioButtonListRow($model,'cirurgia_cp',$bool).

					$form->textAreaRow($model,'doenca_base',array('rows'=>6, 'cols'=>50)).

					$form->textAreaRow($model,'diagnostico_orl',array('rows'=>6, 'cols'=>50));
					
		$avaliacao =
					$form->radioButtonListRow($model,'grbasi_grau_geral',$grbasi).
					
					$form->radioButtonListRow($model,'grbasi_rugosidade',$grbasi).
					
					$form->radioButtonListRow($model,'grbasi_soprosidade',$grbasi).
				
					$form->radioButtonListRow($model,'grbasi_tensao',$grbasi).
					
					$form->radioButtonListRow($model,'grbasi_astenia',$grbasi).
					
					$form->radioButtonListRow($model,'grbasi_instabilidade',$grbasi).
					
					'<div class="control-group ">'.
					$form->labelEx($model,'eav_grau_geral', array('class'=>'control-label', 'style'=>'padding-right: 20px;')).
					$form->textField($model,'eav_grau_geral',array('size'=>45,'maxlength'=>45)).
					CHtml::dropDownList('Avaliacao[eav_grau_geral_consistencia]', $model->eav_grau_geral_consistencia,$consistencia).
					$form->error($model,'eav_grau_geral').
					'</div>'.
					
					'<div class="control-group ">'.
					$form->labelEx($model,'eav_rugosidade', array('class'=>'control-label', 'style'=>'padding-right: 20px;')).
					$form->textField($model,'eav_rugosidade',array('size'=>45,'maxlength'=>45)).
					CHtml::dropDownList('Avaliacao[eav_rugosidade_consistencia]', $model->eav_rugosidade_consistencia,$consistencia).
					$form->error($model,'eav_rugosidade').
					'</div>'.
					
					'<div class="control-group ">'.
					$form->labelEx($model,'eav_soprosidade', array('class'=>'control-label', 'style'=>'padding-right: 20px;')).
					$form->textField($model,'eav_soprosidade',array('size'=>45,'maxlength'=>45)).
					CHtml::dropDownList('Avaliacao[eav_soprosidade_consistencia]', $model->eav_soprosidade_consistencia,$consistencia).
					$form->error($model,'eav_soprosidade').
					'</div>'.
					
					'<div class="control-group ">'.
					$form->labelEx($model,'eav_tensao', array('class'=>'control-label', 'style'=>'padding-right: 20px;')).
					$form->textField($model,'eav_tensao',array('size'=>45,'maxlength'=>45)).
					CHtml::dropDownList('Avaliacao[eav_tensao_consistencia]', $model->eav_tensao_consistencia,$consistencia).
					$form->error($model,'eav_tensao').
					'</div>'.
					
					'<div class="control-group ">'.
					$form->labelEx($model,'eav_astenia', array('class'=>'control-label', 'style'=>'padding-right: 20px;')).
					$form->textField($model,'eav_astenia',array('size'=>45,'maxlength'=>45)).
					CHtml::dropDownList('Avaliacao[eav_astenia_consistencia]', $model->eav_astenia_consistencia,$consistencia).
					$form->error($model,'eav_astenia').
					'</div>'.
					
					'<div class="control-group ">'.
					$form->labelEx($model,'eav_instabilidade', array('class'=>'control-label', 'style'=>'padding-right: 20px;')).
					$form->textField($model,'eav_instabilidade',array('size'=>45,'maxlength'=>45)).
					CHtml::dropDownList('Avaliacao[eav_instabilidade_consistencia]', $model->eav_instabilidade_consistencia,$consistencia).
					$form->error($model,'eav_instabilidade').
					'</div>';
		
		$this->widget('bootstrap.widgets.TbTabs', array(
			'type'=>'tabs', // 'tabs' or 'pills'
			'tabs'=>array(
			array('label'=>'Informações Pessoais', 'content'=>$info, 'active'=>true),
			array('label'=>'Sinais e Sintomas', 'content'=>$sinais),
			array('label'=>'Hábitos', 'content'=>$habitos),
			array('label'=>'História Clínica', 'content'=>$historia),
			array('label'=>'Avaliação Perceptivo Auditiva', 'content'=>$avaliacao),
			),
		));

	?>
	
	<hr/>
	<a href="#">Voltar ao topo &uarr;</a>
	<hr/>
	<?php echo $form->textAreaRow($model,'info_complementares',array('rows'=>6, 'cols'=>50)); ?>
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Criar' : 'Atualizar')); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->
<script>
	
	var size = $('.control-label').length;

	for(var count = 0; count <= size; count++){
		//if(count != 0){
			$('.control-label').eq(count).prepend('<b>'+(count+1)+'. ').append('</b>');
		//}

	}
	
	$('#Avaliacao_queixa_vocal_0').click(function(){
		$('.queixa').show();
	});
	$('#Avaliacao_queixa_vocal_1').click(function(){
		$('.queixa').hide();
	});
	$('.queixa').hide();
	
	$('#Avaliacao_fumo_0').click(function(){
		$('.fumo').show();
	});
	$('#Avaliacao_fumo_1').click(function(){
		$('.fumo').hide();
	});
	$('.fumo').hide();
	
	$('#Avaliacao_alcool_0').click(function(){
		$('.alcool').show();
	});
	$('#Avaliacao_alcool_1').click(function(){
		$('.alcool').hide();
	});
	$('.alcool').hide();
	
</script>