<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;


/**
 * This is the model class for table "food".
 *
 * @property int $id
 * @property string|null $name_ar
 * @property string|null $name_an
 * @property string|null $type
 * @property float|null $price
 * @property string|null $picture
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Food extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['name_ar'], 'string', 'max' => 255],
            [['name_an', 'type', 'picture'], 'string', 'max' => 512],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ar' => 'Name Ar',
            'name_an' => 'Name An',
            'type' => 'Type',
            'price' => 'Price',
            'picture' => 'Picture',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FoodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FoodQuery(get_called_class());
    }
}
