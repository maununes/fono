<?php
/* @var $this FormTesteVocalTipoController */
/* @var $model FormTesteVocalTipo */

$this->breadcrumbs=array(
	'Form Teste Vocal Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Update FormTesteVocalTipo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>