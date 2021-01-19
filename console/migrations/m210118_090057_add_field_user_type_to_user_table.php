<?php

use yii\db\Migration;

/**
 * Class m210118_090057_add_field_user_type_to_user_table
 */
class m210118_090057_add_field_user_type_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'user_type', $this->integer()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'user_type');
    }
}
