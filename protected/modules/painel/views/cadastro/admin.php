<?php
/* @var $this CadastroController */
/* @var $model Cadastro */

$this->breadcrumbs=array(
	'Cadastros'=>array('admin'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cadastro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Cadastros</h1>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cadastro-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('style'=>'text-align:center'),
	'filter'=>$model,
	'columns'=>array(
		array(
				'name'=>'usuario',
				'value'=>'$data->usuario0->nome',
			),
		array(
				'name'=>'avaliacao',
				'value'=>'$data->avaliacao0->codigo',
			),
		array(
				'name'=>'data_criacao',
				'value'=>'$data->data_criacao()',
			),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
