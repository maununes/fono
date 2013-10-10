<h3>Áudio</h3>
<?php
/* @var $this TesteVocalController */
/* @var $model TesteVocal */

$cadastro = Cadastro::model()->find('avaliacao = '. $model->avaliacao0->id);
if($cadastro->usuario == Yii::app()->user->id || Yii::app()->user->usuario_tipo != 2){
	$this->menu=array(
		array('label'=>'Atualizar', 'icon'=>'icon-pencil','url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Deletar', 'icon'=>'icon-remove', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja deletar esse item?')),
	);
	echo 'Cadastrado por: <b>mim</b>';
}else{
	echo 'Cadastrado por: <b>'.$cadastro->usuario0->nome.'</b>';
}
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'Codigo da avaliacao',
			'value'=>CHtml::link($model->avaliacao0->codigo, array('/painel/avaliacao/view', 'id'=>$model->avaliacao0->id)),
			'type'=>'raw'
		),
		'tipo',
		array(
			'name'=>'arquivo',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->arquivo), array("/files/".$model->arquivo))
		),
		array(
			'name'=>'data_criacao',
			'value'=>$model->data_criacao()
		)
	),
)); ?>

<br/>
<h3>Informações do áudio</h3>
<div>
<?php
	$filename = $model->arquivo;
	$filepath = Yii::app()->baseUrl.'/files/';
	$fullpath = $_SERVER["DOCUMENT_ROOT"].$filepath.$filename;

	$response =  file_get_contents('http://'.$_SERVER['HTTP_HOST'].''.Yii::app()->baseUrl.'/audio.php?filename='.$filename.'&filepath='.$filepath);
	echo $response;
?>
</div>
