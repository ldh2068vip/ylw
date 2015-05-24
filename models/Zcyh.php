<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%zcyh}}".
 *
 * @property integer $id
 * @property string $uname
 * @property string $passwd
 * @property string $kickname
 * @property string $gavar
 * @property string $sex
 * @property string $birthday
 * @property string $email
 * @property string $hover
 * @property string $mz
 * @property string $addres
 * @property string $question
 * @property string $answer
 */
class Zcyh extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%zcyh}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['birthday'], 'safe'],
            [['uname', 'passwd', 'kickname', 'gavar', 'email', 'addres'], 'string', 'max' => 255],
            [['sex', 'mz'], 'string', 'max' => 8],
            [['hover', 'question', 'answer'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uname' => '用户名',
            'passwd' => '密码',
            'kickname' => '昵称',
            'gavar' => '头像地址',
            'sex' => '性别',
            'birthday' => '生日',
            'email' => '邮箱',
            'hover' => '爱好',
            'mz' => '民族',
            'addres' => '地址',
            'question' => '密码提示问题',
            'answer' => '密码问题答案',
        ];
    }
    /**
     * @inheritdoc
     * @return ZcyhQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ZcyhQuery(get_called_class());
    }
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
//     public static function findByUsername($username)
//     {
//     	foreach (self::$users as $user) {
//     		if (strcasecmp($user['uname'], $username) === 0) {
//     			return new static($user);
//     		}
//     	}
    
//     	return null;
//     }
    public static function findByUsername($username) {
    	$user = Zcyh::find()->where(array('uname' => $username))->one();
    	if ($user) {
    		return new static($user);
    	}
    
    	return null;
    }
    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
    	return $this->passwd === $password;
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
//     	return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    	return static::findOne($id);
    	
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
//     	foreach (self::$users as $user) {
//     		if ($user['accessToken'] === $token) {
//     			return new static($user);
//     		}
//     	}
    
//     	return null;
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
    	return $this->id;
    }
    
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
//     	return $this->authKey;
    }
    
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
//     	return $this->authKey === $authKey;
    }
}
