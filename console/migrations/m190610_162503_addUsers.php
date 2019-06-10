<?php

use yii\db\Migration;

/**
 * Class m190610_162503_addUsers
 */
class m190610_162503_addUsers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            \common\models\User::tableName(),
            ['id','username', 'auth_key', 'password_hash', 'email', 'created_at','updated_at'],
            [
                [
                    '1',
                    'admin',
                    Yii::$app->security->generateRandomString(32),
                    Yii::$app->security->generatePasswordHash('admin'),
                    'admin@email.ru',
                    time(),
                    time(),
                ],
                [
                    '2',
                    'moder',
                    Yii::$app->security->generateRandomString(32),
                    Yii::$app->security->generatePasswordHash('moder'),
                    'moder@email.ru',
                    time(),
                    time(),
                ],
                [
                    '3',
                    'oleg',
                    Yii::$app->security->generateRandomString(32),
                    Yii::$app->security->generatePasswordHash('oleg'),
                    'oleg@email.ru',
                    time(),
                    time(),
                ],
                [
                    '4',
                    'anna',
                    Yii::$app->security->generateRandomString(32),
                    Yii::$app->security->generatePasswordHash('anna'),
                    'anna@email.ru',
                    time(),
                    time(),
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete(\common\models\User::tableName());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190610_162503_addUsers cannot be reverted.\n";

        return false;
    }
    */
}
