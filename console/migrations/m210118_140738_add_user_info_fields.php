<?php

use yii\db\Migration;

/**
 * Class m210118_140738_add_user_info_fields
 */
class m210118_140738_add_user_info_fields extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'first_name', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'second_name', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'surname', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'gender', $this->integer()->defaultValue(null));
        $this->addColumn('{{%user}}', 'date_of_birth', $this->integer()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'first_name');
        $this->dropColumn('{{%user}}', 'second_name');
        $this->dropColumn('{{%user}}', 'surname');
        $this->dropColumn('{{%user}}', 'gender');
        $this->dropColumn('{{%user}}', 'date_of_birth');
    }
}
