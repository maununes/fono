<?php
/* @var $this TesteVocalController */
/* @var $model TesteVocal */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#teste-vocal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Áudios</h1>

<p>
Você pode usar os operadores de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no começo de cada campo para buscar.</p>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'teste-vocal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>'bordered',
	'htmlOptions'=>array('style'=>'text-align:center;'),
	'columns'=>array(
		array(
			'header'=>'Cadastrado por',
			'value'=>'Cadastro::model()->find("avaliacao = ".$data->avaliacao)->usuario0->usuario',
		),
		array(
				'name'=>'avaliacao',
				'type'=>'html',
				'value'=>'CHtml::link(CHtml::encode($data->avaliacao0->codigo), array("/painel/avaliacao/view", "id"=>$data->avaliacao0->id))',
			),
		'tipo',
		array(
				'name'=>'arquivo',
				'type'=>'html',
				'value'=>'CHtml::link(CHtml::encode($data->arquivo), array("/files/$data->arquivo"))',
			),
		array(
				'name'=>'data_criacao',
				'value'=>'$data->data_criacao()',
			),
		array(
				'type'=>'raw',
				'header'=>'Ver',
				'value'=>'CHtml::link("<span class=\"icon-eye-open\"></span>", array("/painel/testevocal/view", "id"=>$data->id))',
			),
	),
)); ?>
