<?php

namespace frontend\controllers;

use Yii;
use frontend\models\User;
use frontend\models\UserProfile;
use frontend\models\profile\ResetPasswordForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * UserController implements the CRUD actions for User model.
 */
class ProfileController extends Controller
{

    public function actionIndex()
    {
        $model = new UserProfile();

        $user = User::find()
        ->where(['username' => Yii::$app->user->identity->username])
        ->one();

        $model->name = $user->first_name;
        $model->second_name = $user->second_name;
        $model->surname = $user->surname;
        $model->gender = $user->gender;
        $model->date_of_birth = $user->date_of_birth;

        //$this->user;
        return $this->render('index',[
            'model' => $model,
        ]);
    }

    public function actionResetPassword()
    {
        //$this->user;
        $model = new ResetPasswordForm(Yii::$app->user->identity->id);
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Password was changed.');
            return $this->goBack();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}