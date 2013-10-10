<?php

/**
 * This is the model class for table "cadastro".
 *
 * The followings are the available columns in table 'cadastro':
 * @property string $id
 * @property string $usuario
 * @property string $avaliacao
 * @property string $data_criacao
 *
 * The followings are the available model relations:
 * @property Usuario $usuario0
 * @property Avaliacao $avaliacao0
 */
class Cadastro extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cadastro the static model class
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
		return 'cadastro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, avaliacao', 'required'),
			array('usuario, avaliacao', 'length', 'max'=>20),
			array('data_criacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuario, avaliacao, data_criacao', 'safe', 'on'=>'search'),
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
			'usuario0' => array(self::BELONGS_TO, 'Usuario', 'usuario'),
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
			'usuario' => 'Usuario',
			'avaliacao' => 'Avaliacao',
			'data_criacao' => 'Data Criacao',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('avaliacao',$this->avaliacao,true);
		$criteria->compare('data_criacao',$this->data_criacao,true);
		$criteria->order = 'ID DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function data_criacao()
    {
		return $this->data_criacao = Yii::app()->dateFormatter->format('d/MM/yyyy HH:mm:ss', $this->data_criacao);
    }
}