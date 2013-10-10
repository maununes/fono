<?php
/* @var $this FormTesteVocalTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Form Teste Vocal Tipos',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Form Teste Vocal Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
