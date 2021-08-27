<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mesaj".
 *
 * @property int $id
 * @property string $gonderen
 * @property string $baslik
 * @property string $icerik
 * @property string $tarih
 * @property string $dosya
 */
class Mesaj extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mesaj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gonderen', 'baslik', 'icerik', 'dosya'], 'required'],
            [['icerik'], 'string'],
            [['tarih'], 'safe'],
            [['gonderen', 'baslik', 'dosya'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'gonderen' => Yii::t('app', 'Gonderen'),
            'baslik' => Yii::t('app', 'Baslik'),
            'icerik' => Yii::t('app', 'Icerik'),
            'tarih' => Yii::t('app', 'Tarih'),
            'dosya' => Yii::t('app', 'Dosya'),
        ];
    }
}
