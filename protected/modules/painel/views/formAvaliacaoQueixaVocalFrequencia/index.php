<?php
/* @var $this FormAvaliacaoQueixaVocalFrequenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Avaliacao Queixa Vocal Frequencias',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Form Avaliacao Queixa Vocal Frequencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
