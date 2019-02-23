<?php
/**
 * @link https://entero.co.in/
 * @copyright Copyright (c) 2012 Entero Software Solutions Pvt.Ltd
 * @license https://entero.co.in/license/
 * @author Jomon Johnson <jomon@entero.in>
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \codexten\yii\admin\models\LoginForm */

$this->title = Yii::t('entero:admin', 'Sign In');
?>

<div class="logo">

    <a href="<?= Url::to(['/']) ?>">

        <?= Html::img('/img/logo.png', ['alt' => Yii::$app->name, 'class' => 'logo-default',]) ?>

    </a>

</div>
<div class="content">

    <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'login-form']]); ?>

    <h3 class="form-title font-green">

        <?= Yii::t('entero:admin', 'Sign In') ?>

    </h3>

    <?= $form->field($model, 'username')
        ->textInput(['placeholder' => $model->getAttributeLabel('username')])->label(false) ?>

    <?= $form->field($model, 'password')
        ->passwordInput(['placeholder' => $model->getAttributeLabel('Password')])->label(false) ?>

    <div class="form-actions">

        <?= Html::submitButton(Yii::t('entero:admin', 'Login'), ['class' => 'btn green uppercase']) ?>

        <label class="rememberme check mt-checkbox mt-checkbox-outline">

            <?= Html::checkbox(Html::getInputName($model, 'rememberMe')) ?>

            Remember <span></span>

        </label>

        <a href="<?= Url::to(['/sign-in/request-password-reset']) ?>" class="forget-password">Forgot Password?</a>

    </div>

    <?php ActiveForm::end(); ?>

</div>
<div class="copyright">

    <?= asDate(time(), 'Y') ?> &copy; <?= Yii::$app->name ?>

</div>
