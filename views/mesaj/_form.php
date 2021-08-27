<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mesaj */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mesaj-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gonderen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baslik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icerik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tarih')->textInput() ?>

    <?= $form->field($model, 'dosya')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
