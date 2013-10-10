<?php
/* @var $this AvaliacaoController */
/* @var $model Avaliacao */


echo '<h2>Avaliação</h2>';
//se é meu
$cadastro = Cadastro::model()->find('avaliacao = '. $model->id);
if($cadastro->usuario == Yii::app()->user->id || Yii::app()->user->usuario_tipo != 2){
	$this->menu=array(
		array('label'=>'Atualizar', 'icon'=>'icon-pencil','url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Deletar', 'url'=>'#', 'icon'=>'icon-remove', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja deletar esse item?')),
	);
	
	echo 'Cadastrado por: <b>mim</b>';
}else{
	echo 'Cadastrado por: <b>'.$cadastro->usuario0->nome.'</b>';
}
?>


<div id="thediv" class="reveal-closed">
<?php
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'idade',
		'sexo',
		'ocupacao',
		'escolaridade',
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
		'alcool_tempo_anos',
		'alcool_parou',
		'alcool_parou_tempo_anos',
		'alcool_tipo',
		'alcool_quantidade_dia',
		'alcool_diariamente',
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
		array(
			'name'=>'data_criacao',
			'value'=>$model->data_criacao(),
		)
	),
));
?>
</div>

<div style="background: none repeat scroll 0 0 #F5F5F5;
			border-collapse: collapse;
			margin: 0;
			width: 100%;
			text-align:center;">
	<h3><a href="#" id="divbutton">exibir tudo</a></h3>
</div>

<h3>Áudio</h3>
<?php

if($modelTesteVocal){
	$this->widget('bootstrap.widgets.TbButton',array(
	'label' => 'cadastrar novo áudio',
	'type' => 'primary',
	'size' => 'large',
	'url'  => array('/painel/testeVocal/create', 'avaliacao'=>$model->id),
	));

	$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'teste-vocal-grid',
		'type'=>'bordered',
		'dataProvider'=>$modelTesteVocal->search(),
		//'filter'=>$modelTesteVocal,
		'columns'=>array(
			'tipo',
			'arquivo',
			//'data_criacao',
			array(
				'name'=>'data_criacao',
				'value'=>'$data->data_criacao()',
			),
			array(
				'header'=>'ver detalhes',
				'type'=>'html',
				'value'=>'CHtml::link("<i class=\"icon-eye-open\"></i>", array("/painel/testeVocal/view", "id"=>$data->id))',
			),
			array(
				'header'=>'baixar',
				'type'=>'html',
				'value'=>'CHtml::link("<i class=\"icon-download\"></i>", array("/files/$data->arquivo"))',
			),
		),
		'htmlOptions'=>array('style'=>'text-align:center;'),
	));
}else{
	echo "Nenhum áudio cadastrado.<br/>";
	
	//se é meu
	if($cadastro->usuario == Yii::app()->user->id || Yii::app()->user->usuario_tipo != 2){
		$this->widget('bootstrap.widgets.TbButton',array(
		'label' => 'cadastrar novo áudio',
		'type' => 'primary',
		'size' => 'large',
		'url'  => array('/painel/testeVocal/create', 'avaliacao'=>$model->id),
		));
	}
}
?>

<script>
	//exibir tudo
	var div = $("#thediv");
	div.css('overflow','hidden').css('height','115px');
    $("#divbutton").click(function() {
		div.toggleClass("reveal-closed").toggleClass("reveal-open");
		if(div.hasClass("reveal-closed")){
			div.css('overflow','hidden').css('height','115px');
			$("#divbutton").html('exibir tudo');
		}else{
			div.css('overflow','auto').css('height','auto');
			$("#divbutton").remove();
		}
    });
	
	//menu position
	$('');
</script>