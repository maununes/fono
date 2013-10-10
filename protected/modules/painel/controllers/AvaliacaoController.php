<?php

class AvaliacaoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','admin','delete','minhas', 'relatorio'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$modelTesteVocal = TesteVocal::model()->find('avaliacao='.$model->id);
		$this->render('view',array(
			'model'=>$model,
			'modelTesteVocal'=>$modelTesteVocal,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Avaliacao;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Avaliacao'])){
			$model->attributes=$_POST['Avaliacao'];
			if(trim($model->queixa_vocal_tempo) != "" || $model->queixa_vocal_tempo != null){
				$model->queixa_vocal_tempo = $model->queixa_vocal_tempo." ".$_POST['Avaliacao']['queixa_vocal_tempo_unidade'];
			}
			$model->eav_grau_geral = (trim($_POST['Avaliacao']['eav_grau_geral_consistencia']) <> 'não informado' ?
				$model->eav_grau_geral." ".$_POST['Avaliacao']['eav_grau_geral_consistencia'] : null);
			$model->eav_rugosidade = (trim($_POST['Avaliacao']['eav_rugosidade_consistencia']) <> 'não informado' ?
				$model->eav_rugosidade." ".$_POST['Avaliacao']['eav_rugosidade_consistencia'] : null);
			$model->eav_soprosidade = (trim($_POST['Avaliacao']['eav_soprosidade_consistencia']) <> 'não informado' ?
				$model->eav_soprosidade." ".$_POST['Avaliacao']['eav_soprosidade_consistencia'] : null);
			$model->eav_tensao = (trim($_POST['Avaliacao']['eav_tensao_consistencia']) <> 'não informado' ?
				$model->eav_tensao." ".$_POST['Avaliacao']['eav_tensao_consistencia'] : null);
			$model->eav_astenia = (trim($_POST['Avaliacao']['eav_astenia_consistencia']) <> 'não informado' ?
				$model->eav_astenia." ".$_POST['Avaliacao']['eav_astenia_consistencia'] : null);
			$model->eav_instabilidade = (trim($_POST['Avaliacao']['eav_instabilidade_consistencia']) <> 'não informado' ?
				$model->eav_instabilidade." ".$_POST['Avaliacao']['eav_instabilidade_consistencia'] : null);

			
			if($model->save()){
				$model->codigo = $model->codigo.$model->id.substr($model->sexo, 0,1).date('dmy');
				$model->save();
			
				$modelCadastro = new Cadastro();
				$modelCadastro->avaliacao = $model->id;
				$modelCadastro->usuario = Yii::app()->user->id;
				if($modelCadastro->save())
					$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Avaliacao']))
		{
			$model->attributes=$_POST['Avaliacao'];
			if(trim($model->queixa_vocal_tempo) != "" || $model->queixa_vocal_tempo != null){
				$model->queixa_vocal_tempo = $model->queixa_vocal_tempo." ".$_POST['Avaliacao']['queixa_vocal_tempo_unidade'];
			}
			$model->eav_grau_geral = (trim($_POST['Avaliacao']['eav_grau_geral_consistencia']) <> 'não informado' ?
				$model->eav_grau_geral." ".$_POST['Avaliacao']['eav_grau_geral_consistencia'] : null);
			$model->eav_rugosidade = (trim($_POST['Avaliacao']['eav_rugosidade_consistencia']) <> 'não informado' ?
				$model->eav_rugosidade." ".$_POST['Avaliacao']['eav_rugosidade_consistencia'] : null);
			$model->eav_soprosidade = (trim($_POST['Avaliacao']['eav_soprosidade_consistencia']) <> 'não informado' ?
				$model->eav_soprosidade." ".$_POST['Avaliacao']['eav_soprosidade_consistencia'] : null);
			$model->eav_tensao = (trim($_POST['Avaliacao']['eav_tensao_consistencia']) <> 'não informado' ?
				$model->eav_tensao." ".$_POST['Avaliacao']['eav_tensao_consistencia'] : null);
			$model->eav_astenia = (trim($_POST['Avaliacao']['eav_astenia_consistencia']) <> 'não informado' ?
				$model->eav_astenia." ".$_POST['Avaliacao']['eav_astenia_consistencia'] : null);
			$model->eav_instabilidade = (trim($_POST['Avaliacao']['eav_instabilidade_consistencia']) <> 'não informado' ?
				$model->eav_instabilidade." ".$_POST['Avaliacao']['eav_instabilidade_consistencia'] : null);

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}else{
			$array = explode(" ", $model->queixa_vocal_tempo);
			if(count($array) > 1){
				$model->queixa_vocal_tempo = $array[0];
				$model->queixa_vocal_tempo_unidade = $array[1];
			}
			
			$array = explode(" ", $model->eav_grau_geral);
			if(count($array) > 1){
				$model->eav_grau_geral = $array[0];
				$model->eav_grau_geral_consistencia = $array[1];
			}
			
			$array = explode(" ", $model->eav_rugosidade);
			if(count($array) > 1){
				$model->eav_rugosidade = $array[0];
				$model->eav_rugosidade_consistencia = $array[1];
			}
			
			$array = explode(" ", $model->eav_soprosidade);
			if(count($array) > 1){
				$model->eav_soprosidade = $array[0];
				$model->eav_soprosidade_consistencia = $array[1];
			}
			
			$array = explode(" ", $model->eav_tensao);
			if(count($array) > 1){
				$model->eav_tensao = $array[0];
				$model->eav_tensao_consistencia = $array[1];
			}
			
			$array = explode(" ", $model->eav_astenia);
			if(count($array) > 1){
				$model->eav_astenia = $array[0];
				$model->eav_astenia_consistencia = $array[1];
			}
			
			$array = explode(" ", $model->eav_instabilidade);
			if(count($array) > 1){
				$model->eav_instabilidade = $array[0];
				$model->eav_instabilidade_consistencia = $array[1];
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model  = $this->loadModel($id);
		Yii::app()->db->createCommand('DELETE FROM teste_vocal WHERE teste_vocal.avaliacao ='.$model->id)->query();
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Avaliacao');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionRelatorio()
	{
		$dataProvider=new CActiveDataProvider('Avaliacao');
		$this->render('relatorio',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Avaliacao('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Avaliacao']))
			$model->attributes=$_GET['Avaliacao'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionMinhas()
	{
		$model=new Avaliacao('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Avaliacao']))
			$model->attributes=$_GET['Avaliacao'];

		$dataProvider=new CActiveDataProvider('Avaliacao', array(
				'criteria'=>array(
						'condition'=>'',
						'order'=>'id DESC',
						'join'=>'INNER JOIN cadastro ON cadastro.avaliacao = t.id AND cadastro.usuario ='.Yii::app()->user->id,
				),
		));
		$this->render('minhas',array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Avaliacao the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Avaliacao::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Avaliacao $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='avaliacao-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
