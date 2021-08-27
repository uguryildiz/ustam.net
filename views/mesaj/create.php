<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mesaj */

$this->title = Yii::t('app', 'Create Mesaj');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mesajs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mesaj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
