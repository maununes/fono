<?php
/* @var $this AvaliacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Avaliacaos',
);

$this->menu=array(
	array('label'=>'Create Avaliacao', 'url'=>array('create')),
	array('label'=>'Manage Avaliacao', 'url'=>array('admin')),
);
?>

<h1>Avaliações</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<script>
$('.items .view').mouseover(function(){
	$(this).css('background','#F0F0F0');
});
$('.items .view').mouseout(function(){
	$(this).css('background','#FFFFFF');
});
</script>