<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependentes".
 *
 * @property int $id_dep
 * @property string $nome
 * @property int $id_usuario
 *
 * @property Usuario $usuario
 */
class Dependentes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dependentes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'id_usuario'], 'required'],
            [['id_usuario'], 'default', 'value' => null],
            [['id_usuario'], 'integer'],
            [['nome'], 'string', 'max' => 35],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['id_usuario' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dep' => 'Id Dep',
            'nome' => 'Nome',
            'id_usuario' => 'Id Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id_user' => 'id_usuario']);
    }
}
