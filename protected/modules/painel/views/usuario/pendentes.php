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

<h1>Usuários Pendentes</h1>

</div><!-- search-form -->

<?php
	
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('style'=>'text-align:center;'),
	'columns'=>array(
		'nome',
		'usuario',
		array(
			'name'=>'data_criacao',
			'value'=>'$data->data_criacao()',
		),
		array(
			'type'=>'raw',
			'value'=>'CHtml::link("aceitar",array("pendentes","acao"=>"aceitar", "id"=>$data->id))',
		),
		array(
			'type'=>'raw',
			'value'=>'CHtml::link("recusar",array("pendentes","acao"=>"recusar", "id"=>$data->id))',
		),
	),
)); ?>
