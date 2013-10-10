<?php

/**
 * This is the model class for table "usuario_tipo".
 *
 * The followings are the available columns in table 'usuario_tipo':
 * @property string $id
 * @property string $tipo
 * @property string $descricao
 *
 * The followings are the available model relations:
 * @property Usuario[] $usuarios
 * @property UsuarioTipoPermissao[] $usuarioTipoPermissaos
 */
class UsuarioTipo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UsuarioTipo the static model class
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
		return 'usuario_tipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo', 'required'),
			array('tipo', 'length', 'max'=>45),
			array('descricao', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo, descricao', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'usuario_tipo'),
			'usuarioTipoPermissaos' => array(self::HAS_MANY, 'UsuarioTipoPermissao', 'usuario_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo' => 'Tipo',
			'descricao' => 'Descricao',
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
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('descricao',$this->descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}