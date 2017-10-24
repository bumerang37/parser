<?php

use yii\db\Migration;

/**
 * Class m171021_124825_create_video_table
 */
class m171021_124825_create_video_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%video}}', [
            'id' => $this->primaryKey(),
            'video_id' => $this->string(),
            'service' => $this->string(),
            'title' => $this->string(),
            'body' => $this->text(),
            'embed_code' => $this->text(),
            'url' => $this->string(),
            'large_thumbnail' => $this->string(),
            'small_thumbnail' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('video');
    }
}
