<?php

namespace app\controllers;

use yii\web\Controller;

class QrController extends Controller {
    public function actionIndex(){

        $attributes = [
            'label' => 'Menü',
            'mode' => 'label',
            'fill' => 'navy',
            'text' => 'Merhaba',
            'rounded' => 50,
            'ecLevel' => 'M',
            'crisp' => false,
            'mSize' => 20,
            'options'=>['style'=>'display:inline']
        ];

        return $this->render('index', ['attributes' => $attributes]);
    }
}