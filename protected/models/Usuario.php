<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $id
 * @property string $nome
 * @property string $usuario
 * @property string $senha
 * @property string $usuario_tipo
 * @property integer $ativo
 * @property string $data_criacao
 *
 * The followings are the available model relations:
 * @property Cadastro[] $cadastros
 * @property UsuarioTipo $usuarioTipo
 * @property UsuarioTipoPermissao[] $usuarioTipoPermissaos
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, usuario, senha, usuario_tipo', 'required'),
			array('ativo', 'numerical', 'integerOnly'=>true),
			array('nome, usuario, senha', 'length', 'max'=>45),
			array('usuario_tipo', 'length', 'max'=>20),
			array('data_criacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, usuario, senha, usuario_tipo, ativo, data_criacao', 'safe', 'on'=>'search'),
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
			'cadastros' => array(self::HAS_MANY, 'Cadastro', 'usuario'),
			'usuarioTipo' => array(self::BELONGS_TO, 'UsuarioTipo', 'usuario_tipo'),
			'usuarioTipoPermissaos' => array(self::HAS_MANY, 'UsuarioTipoPermissao', 'usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome e sobrenome',
			'usuario' => 'Nome de usuário',
			'senha' => 'Senha',
			'usuario_tipo' => 'Usuario Tipo',
			'ativo' => 'Ativo',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('usuario_tipo',$this->usuario_tipo,true);
		$criteria->compare('ativo',$this->ativo);
		$criteria->compare('data_criacao',$this->data_criacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}