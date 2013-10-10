<?php
/* @var $this FormAvaliacaoSexoController */
/* @var $model FormAvaliacaoSexo */

$this->breadcrumbs=array(
	'Form Avaliacao Sexos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Create FormAvaliacaoSexo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>