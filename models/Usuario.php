<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id_user
 * @property string $nome
 * @property string $login_u
 * @property string $senha
 * @property string $email
 * @property string $latitude
 * @property string $longitude
 *
 * @property Dependentes[] $dependentes
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user','nome', 'login_u', 'senha', 'email', 'latitude', 'longitude'], 'required'],
            [['id_user'],'integer'],
            [['senha'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['nome'], 'string', 'max' => 35],
            [['login_u'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id',
            'nome' => 'Nome do usuário',
            'login_u' => 'Login',
            'senha' => 'Senha',
            'email' => 'Email',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependentes()
    {
        return $this->hasOne(Dependentes::className(), ['id_usuario' => 'id_user']);
    }
}
