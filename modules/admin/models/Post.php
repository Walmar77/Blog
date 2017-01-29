<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $excerpt
 * @property string $text
 * @property string $keywords
 * @property string $discription
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'excerpt', 'text'], 'required'],
            [['text'], 'string'],
            [['title', 'excerpt', 'keywords', 'discription'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'text' => 'Text',
            'keywords' => 'Keywords',
            'discription' => 'Discription',
        ];
    }
}
