<?php

/**
 * This is the model class for table "teste_vocal".
 *
 * The followings are the available columns in table 'teste_vocal':
 * @property string $id
 * @property string $avaliacao
 * @property string $tipo
 * @property string $arquivo
 * @property string $data_criacao
 *
 * The followings are the available model relations:
 * @property Avaliacao $avaliacao0
 */
class TesteVocal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TesteVocal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teste_vocal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('avaliacao, tipo, arquivo', 'required'),
			array('arquivo', 'file', 'types'=>'wav', 'maxSize'=>1024 * 1024 * 2, 'tooLarge'=>'Seu arquivo precisa ser menor que 2MB'),
			array('avaliacao', 'length', 'max'=>20),
			array('tipo, arquivo', 'length', 'max'=>255),
			array('data_criacao, arquivo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, avaliacao, tipo, arquivo, data_criacao', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'avaliacao0' => array(self::BELONGS_TO, 'Avaliacao', 'avaliacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'avaliacao' => 'Avaliação',
			'tipo' => 'Tipo',
			'arquivo' => 'Arquivo',
			'data_criacao' => 'Data Criação',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('t.id',$this->id,true);
		$criteria->compare('t.avaliacao',$this->avaliacao,true);
		$criteria->compare('t.tipo',$this->tipo,true);
		$criteria->compare('t.arquivo',$this->arquivo,true);
		$criteria->compare('t.data_criacao',$this->data_criacao,true);
		//if(Yii::app()->user->usuario_tipo == 2){//cadastrador
		//	$criteria->join ='INNER JOIN cadastro ON cadastro.avaliacao = t.avaliacao AND cadastro.usuario ='.Yii::app()->user->id;
		//}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function data_criacao()
    {
		return Yii::app()->dateFormatter->format('d/MM/yyyy HH:mm:ss', $this->data_criacao);
    }
}