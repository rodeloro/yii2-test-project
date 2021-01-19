<?php
namespace frontend\models\profile;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    private $_user;

    public $password;
    public $new_password;
    public $new_password_confirm;

    public function __construct($id, $config = [])
    {
        
        $this->_user = User::findIdentity($id);
        if (!$this->_user) {
            throw new InvalidArgumentException('Undefined user.');
        }
       
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['password','new_password','new_password_confirm'], 'required'],
            [['password','new_password','new_password_confirm'], 'string', 'min' => 8],
            [['password','new_password','new_password_confirm'], 'string', 'max' => 255],
        ];
    }

    public function resetPassword()
    {
        $user = $this->_user;

        if(!Yii::$app->security->validatePassword($this->password, $user->password_hash)){
            $this->addError('password', 'Wrong password!');
            return false;
        }
        if($this->new_password!=$this->new_password_confirm){   
            $this->addError('new_password_confirm', 'Password confirm not equal password!');
            return false;
        }

        $user->setPassword($this->new_password);
        $user->removePasswordResetToken();

        return  $user->save(false);
    }
}