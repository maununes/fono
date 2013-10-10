<?php
/* @var $this FormAvaliacaoEscolaridadeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Avaliacao Escolaridades',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Form Avaliacao Escolaridades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
