<?php

/**
 * This is the model class for table "usuario_tipo_permissao".
 *
 * The followings are the available columns in table 'usuario_tipo_permissao':
 * @property string $id
 * @property string $usuario_tipo
 * @property string $usuario_permissao
 * @property string $usuario
 * @property string $data_criacao
 *
 * The followings are the available model relations:
 * @property UsuarioTipo $usuarioTipo
 * @property UsuarioPermissao $usuarioPermissao
 * @property Usuario $usuario0
 */
class UsuarioTipoPermissao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UsuarioTipoPermissao the static model class
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
		return 'usuario_tipo_permissao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_tipo, usuario_permissao, usuario', 'required'),
			array('usuario_tipo, usuario_permissao, usuario', 'length', 'max'=>20),
			array('data_criacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuario_tipo, usuario_permissao, usuario, data_criacao', 'safe', 'on'=>'search'),
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
			'usuarioTipo' => array(self::BELONGS_TO, 'UsuarioTipo', 'usuario_tipo'),
			'usuarioPermissao' => array(self::BELONGS_TO, 'UsuarioPermissao', 'usuario_permissao'),
			'usuario0' => array(self::BELONGS_TO, 'Usuario', 'usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuario_tipo' => 'Usuario Tipo',
			'usuario_permissao' => 'Usuario Permissao',
			'usuario' => 'Usuario',
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
		$criteria->compare('usuario_tipo',$this->usuario_tipo,true);
		$criteria->compare('usuario_permissao',$this->usuario_permissao,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('data_criacao',$this->data_criacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}