<?php
namespace app\controllers;

use yii\web\Controller as WebController;

class MesajController extends WebController {

    public function actionSoyle($kelime = "Merhaba"){
        return $this->render('soyle',['kelime' => $kelime]);
    }
}