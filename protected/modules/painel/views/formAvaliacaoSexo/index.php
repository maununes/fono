<?php
/* @var $this FormAvaliacaoSexoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Avaliacao Sexos',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Form Avaliacao Sexos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
