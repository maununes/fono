<?php

class TesteVocalController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
	public function actions()
    {
        return array(
            'upload'=>array(
                'class'=>'xupload.actions.XUploadAction',
                'path' =>Yii::app() -> getBasePath() . "/../uploads",
                'publicPath' => Yii::app() -> getBaseUrl() . "/uploads",
            ),
        );
    }

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','minhas','gravar'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($avaliacao=null)
	{
		$model=new TesteVocal;
		$model->avaliacao=$avaliacao;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TesteVocal']))
		{
			$model->attributes=$_POST['TesteVocal'];
			$uploadedFile=CUploadedFile::getInstance($model,'arquivo');
			$model->arquivo = $uploadedFile;
			if($model->save()){
				$filename = $model->avaliacao0->codigo."_".$model->id.".wav";
				$model->arquivo = $filename;
				$uploadedFile->saveAs(Yii::app()->basePath . '../../files/'.$filename);
				$model->save();
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionGravar($avaliacao=null)
	{
		$model=new TesteVocal;
		$model->avaliacao=$avaliacao;
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		if(isset($_POST['TesteVocal']))
		{
			$model->attributes=$_POST['TesteVocal'];
			$uploadedFile=CUploadedFile::getInstance($model,'arquivo');
			$model->arquivo = $uploadedFile;
			if($model->save()){
				$filename = $model->avaliacao0->codigo."_".$model->id.".wav";
				$model->arquivo = $filename;
				$uploadedFile->saveAs(Yii::app()->basePath . '../../files/'.$filename);
				$model->save();
				$this->redirect(array('view','id'=>$model->id));
			}
		}
	
		$this->render('gravar',array(
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

		if(isset($_POST['TesteVocal']))
		{
			$model->attributes=$_POST['TesteVocal'];
			$uploadedFile=CUploadedFile::getInstance($model,'arquivo');
			$model->arquivo = $uploadedFile;
			if($model->save()){
				$filename = $model->avaliacao0->codigo."_".$model->id.".wav";
				$model->arquivo = $filename;
				$uploadedFile->saveAs(Yii::app()->basePath . '../../files/'.$filename);
				$model->save();
				$this->redirect(array('view','id'=>$model->id));
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
		$model = $this->loadModel($id);
		$avaliacao = $model->avaliacao0->id;
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/painel/avaliacao/view', 'id'=>$avaliacao));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TesteVocal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TesteVocal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TesteVocal']))
			$model->attributes=$_GET['TesteVocal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionMinhas()
	{
		$model=new TesteVocal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TesteVocal']))
			$model->attributes=$_GET['TesteVocal'];

			
		$dataProvider=new CActiveDataProvider('TesteVocal', array(
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
	 * @return TesteVocal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TesteVocal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TesteVocal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='teste-vocal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
