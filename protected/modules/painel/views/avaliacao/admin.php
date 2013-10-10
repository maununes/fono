<?php
/* @var $this AvaliacaoController */
/* @var $model Avaliacao */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#avaliacao-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Avaliações</h1>

<p>
Você pode usar os operadores de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no começo de cada campo para buscar.
</p>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'avaliacao-grid',
	'dataProvider'=>$model->search(),
	'type'=>'bordered',
	'filter'=>$model,
	'htmlOptions'=>array('style'=>'text-align:center;'),
	'columns'=>array(
		array(
			'header'=>'Cadastrado por',
			'value'=>'Cadastro::model()->find("avaliacao = ".$data->id)->usuario0->usuario',
		),
		'codigo',
		'idade',
		'sexo',
		'ocupacao',
		/*
		'municipio',
		'queixa_vocal',
		'queixa_vocal_tempo',
		'queixa_vocal_frequencia',
		'rouquidao',
		'fadiga_vocal',
		'tensao',
		'afonia',
		'pigarro',
		'garganta_aperto',
		'garganta_arranhando',
		'garganta_ressecada',
		'garganta_sensacao_corpo_estranho',
		'tosse',
		'dor_ao_falar',
		'dor_ao_deglutir',
		'falhas_na_voz',
		'outros',
		'habito_falar_alto',
		'habito_gritar',
		'fumo',
		'fumo_tempo_anos',
		'fumo_parou',
		'fumo_parou_tempo_anos',
		'fumo_tipo',
		'fumo_quantidade_dia',
		'fumo_diariamente',
		'alcool',
		'cirurgia_cp',
		'rge',
		'doenca_base',
		'diagnostico_orl',
		'grbasi_grau_geral',
		'grbasi_rugosidade',
		'grbasi_soprosidade',
		'grbasi_tensao',
		'grbasi_astenia',
		'grbasi_instabilidade',
		'eav_grau_geral',
		'eav_rugosidade',
		'eav_soprosidade',
		'eav_tensao',
		'eav_astenia',
		'eav_instabilidade',
		*/
		array(
				'name'=>'data_criacao',
				'value'=>'$data->data_criacao()',
			),
		array(
				'type'=>'raw',
				'header'=>'Ver',
				'value'=>'CHtml::link("<span class=\"icon-eye-open\"></span>", array("/painel/avaliacao/view", "id"=>$data->id))',
			),
	),
)); ?>
