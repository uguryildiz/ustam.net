<?php

namespace app\controllers;

use yii\rest\ActiveController;

class MessageController extends ActiveController
{
    public $modelClass = 'app\models\Mesaj';

    public function behaviors()
    {
        // remove rateLimiter which requires an authenticated user to work
        $behaviors = parent::behaviors();
        unset($behaviors['rateLimiter']);
        return $behaviors;
    }
}