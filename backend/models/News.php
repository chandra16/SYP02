<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $judul
 * @property string $jenis
 * @property string $isi
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul'], 'required'],
            [['isi'], 'string'],
            [['judul', 'jenis'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'jenis' => 'Jenis',
            'isi' => 'Isi',
        ];
    }
}
