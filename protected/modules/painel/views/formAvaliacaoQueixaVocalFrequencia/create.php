<?php
/* @var $this FormAvaliacaoQueixaVocalFrequenciaController */
/* @var $model FormAvaliacaoQueixaVocalFrequencia */

$this->breadcrumbs=array(
	'Form Avaliacao Queixa Vocal Frequencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Create FormAvaliacaoQueixaVocalFrequencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>