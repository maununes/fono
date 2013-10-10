<?php
/* @var $this AvaliacaoController */
/* @var $data Avaliacao */
?>

<div class="view" onclick="location = (location.href+'/view/id/'+<?php echo $data->id;?>);" style="cursor: pointer;">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idade')); ?>:</b>
	<?php echo CHtml::encode($data->idade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacao')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridade')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipio')); ?>:</b>
	<?php echo CHtml::encode($data->municipio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('queixa_vocal')); ?>:</b>
	<?php echo CHtml::encode($data->queixa_vocal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('queixa_vocal_tempo')); ?>:</b>
	<?php echo CHtml::encode($data->queixa_vocal_tempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('queixa_vocal_frequencia')); ?>:</b>
	<?php echo CHtml::encode($data->queixa_vocal_frequencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rouquidao')); ?>:</b>
	<?php echo CHtml::encode($data->rouquidao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fadiga_vocal')); ?>:</b>
	<?php echo CHtml::encode($data->fadiga_vocal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tensao')); ?>:</b>
	<?php echo CHtml::encode($data->tensao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afonia')); ?>:</b>
	<?php echo CHtml::encode($data->afonia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pigarro')); ?>:</b>
	<?php echo CHtml::encode($data->pigarro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garganta_aperto')); ?>:</b>
	<?php echo CHtml::encode($data->garganta_aperto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garganta_arranhando')); ?>:</b>
	<?php echo CHtml::encode($data->garganta_arranhando); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garganta_ressecada')); ?>:</b>
	<?php echo CHtml::encode($data->garganta_ressecada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garganta_sensacao_corpo_estranho')); ?>:</b>
	<?php echo CHtml::encode($data->garganta_sensacao_corpo_estranho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tosse')); ?>:</b>
	<?php echo CHtml::encode($data->tosse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dor_ao_falar')); ?>:</b>
	<?php echo CHtml::encode($data->dor_ao_falar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dor_ao_deglutir')); ?>:</b>
	<?php echo CHtml::encode($data->dor_ao_deglutir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('falhas_na_voz')); ?>:</b>
	<?php echo CHtml::encode($data->falhas_na_voz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outros')); ?>:</b>
	<?php echo CHtml::encode($data->outros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habito_falar_alto')); ?>:</b>
	<?php echo CHtml::encode($data->habito_falar_alto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habito_gritar')); ?>:</b>
	<?php echo CHtml::encode($data->habito_gritar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumo')); ?>:</b>
	<?php echo CHtml::encode($data->fumo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumo_tempo_anos')); ?>:</b>
	<?php echo CHtml::encode($data->fumo_tempo_anos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumo_parou')); ?>:</b>
	<?php echo CHtml::encode($data->fumo_parou); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumo_parou_tempo_anos')); ?>:</b>
	<?php echo CHtml::encode($data->fumo_parou_tempo_anos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumo_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->fumo_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumo_quantidade_dia')); ?>:</b>
	<?php echo CHtml::encode($data->fumo_quantidade_dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumo_diariamente')); ?>:</b>
	<?php echo CHtml::encode($data->fumo_diariamente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alcool')); ?>:</b>
	<?php echo CHtml::encode($data->alcool); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cirurgia_cp')); ?>:</b>
	<?php echo CHtml::encode($data->cirurgia_cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rge')); ?>:</b>
	<?php echo CHtml::encode($data->rge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doenca_base')); ?>:</b>
	<?php echo CHtml::encode($data->doenca_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnostico_orl')); ?>:</b>
	<?php echo CHtml::encode($data->diagnostico_orl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grbasi_grau_geral')); ?>:</b>
	<?php echo CHtml::encode($data->grbasi_grau_geral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grbasi_rugosidade')); ?>:</b>
	<?php echo CHtml::encode($data->grbasi_rugosidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grbasi_soprosidade')); ?>:</b>
	<?php echo CHtml::encode($data->grbasi_soprosidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grbasi_tensao')); ?>:</b>
	<?php echo CHtml::encode($data->grbasi_tensao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grbasi_astenia')); ?>:</b>
	<?php echo CHtml::encode($data->grbasi_astenia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grbasi_instabilidade')); ?>:</b>
	<?php echo CHtml::encode($data->grbasi_instabilidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eav_grau_geral')); ?>:</b>
	<?php echo CHtml::encode($data->eav_grau_geral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eav_rugosidade')); ?>:</b>
	<?php echo CHtml::encode($data->eav_rugosidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eav_soprosidade')); ?>:</b>
	<?php echo CHtml::encode($data->eav_soprosidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eav_tensao')); ?>:</b>
	<?php echo CHtml::encode($data->eav_tensao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eav_astenia')); ?>:</b>
	<?php echo CHtml::encode($data->eav_astenia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eav_instabilidade')); ?>:</b>
	<?php echo CHtml::encode($data->eav_instabilidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_criacao')); ?>:</b>
	<?php echo CHtml::encode($data->data_criacao); ?>
	<br />

	*/ ?>

</div>