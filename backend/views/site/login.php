<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="az-signin-wrapper">
    <div class="az-card-signin">
        <h1 class="az-logo">Yii<span>S</span>pace</h1>
        <div class="az-signin-header">
            <h2>Welcome back!</h2>
            <h4>Please sign in to continue</h4>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="form-group">
                <?= $form->field($model, 'username')->textInput(['autofocus' => false, "placeholder" => "Username"]) ?>
            </div><!-- form-group -->
            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(["placeholder" => "Password"]) ?>
            </div><!-- form-group -->
            <?= Html::submitButton('Login', ['class' => 'btn btn-az-primary btn-block', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
        </div><!-- az-signin-header -->
    </div><!-- az-card-signin -->
</div><!-- az-signin-wrapper -->
