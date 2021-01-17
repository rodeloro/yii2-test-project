<?php

use yii\db\Migration;

/**
 * Class m210117_152116_new_fileds_for_user
 */
class m210117_152116_new_fileds_for_user extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'incorrect_tries', $this->integer()->defaultValue(0));
        $this->addColumn('{{%user}}', 'blocked_to_date', $this->integer()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'incorrect_tries');
        $this->dropColumn('{{%user}}', 'blocked_to_date');
    }
}
