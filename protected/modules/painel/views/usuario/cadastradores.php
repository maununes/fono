<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Usuários Cadastradores</h1>

</div><!-- search-form -->

<?php
	function ativar($ativo){
		if($ativo){ return 'desativar';}
		else{return 'ativar';}
	}
	
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('style'=>'text-align:center;'),
	'columns'=>array(
		'nome',
		'usuario',
		array(
			'name'=>'ativo',
			'value'=>'$data->ativo()',
		),
		array(
			'name'=>'data_criacao',
			'value'=>'$data->data_criacao()',
		),
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(ativar($data->ativo),array("cadastradores", "id"=>$data->id))',
		),
	),
)); ?>
