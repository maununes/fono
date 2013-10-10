<?php
/* @var $this TesteVocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Áudios',
);

$this->menu=array(
	array('label'=>'Create TesteVocal', 'url'=>array('create')),
	array('label'=>'Manage TesteVocal', 'url'=>array('admin')),
);
?>

<h1>Áudios</h1>

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
