<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$avaliacaoDataProvider=new CActiveDataProvider('Avaliacao', array(
				'criteria'=>array(
						'condition'=>'',
						'order'=>'id DESC',
						'join'=>'INNER JOIN cadastro ON cadastro.avaliacao = t.id AND cadastro.usuario ='.Yii::app()->user->id,
				),
		));
		$this->render('index', array(
			'avaliacaoDataProvider'=>$avaliacaoDataProvider,
		));
	}
}