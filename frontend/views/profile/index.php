<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabinet-index">
    <h1><?= Html::beginForm(['/site/logout'], 'post').
            Html::encode($this->title).
            Html::encode(': ').
            Html::encode(Yii::$app->user->identity->username).
            Html::endForm() ?></h1>

    <div class="row">
        <div class="col-lg-7">
            <?php $form = ActiveForm::begin(['id' => 'form-cabinet']); ?>
                <div class="card">
                    <h2><b>User info</b></h2>

                    <p><b>Name:</b> <?= Html::encode($model->name)?></p>

                    <p><b>Second name:</b> <?= Html::encode($model->second_name)?></p>

                    <p><b>Surname:</b> <?= Html::encode($model->surname)?></p>

                    <p><b>Gender:</b> <?= Html::encode($model->getGender())?></p>

                    <p><b>Date of birth:</b> <?= Html::encode($model->getDateOfBirth())?></p>
                </div>
                
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-cabinet']); ?>
                <div class="card">
                    <h2><b>Security</b></h2>
                    <div class="row">
                        <p class="col-lg-9"><b>Password :</b> ********</p>
                        <p class="col-lg-1"><?=  Html::a('Change',['/profile/reset-password'], ['class' => 'btn btn-primary']) ?></p>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>