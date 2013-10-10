<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
    public function authenticate()
    {
        $record=Usuario::model()->findByAttributes(array('usuario'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->senha!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->id;
			$this->setState('nome', $record->nome);
			$this->setState('usuario_tipo', $record->usuario_tipo);
			$this->setState('ativo', $record->ativo);
			$this->setState('senha', $record->senha);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
	
	//Yii::app->user->getId();
    public function getId()
    {
        return $this->_id;
    }
}