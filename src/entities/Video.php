<?php

namespace maksclub\parser\entities;

use Yii;

/**
 * This is the model class for table "{{%video}}".
 *
 * @property int $id
 * @property string $title
 * @property string $service
 * @property string $video_id
 * @property string $body
 * @property string $embed_code
 * @property string $url
 * @property string $large_thumbnail
 */
class Video extends \yii\db\ActiveRecord
{

    /**
     * @param $title
     * @param $service
     * @param $video_id
     * @param $body
     * @param $embed_code
     * @param $url
     * @param $large_thumbnail
     * @return Video
     */
    public static function create($title, $service,  $video_id, $body, $embed_code, $url, $large_thumbnail): self
    {
        $video = new static();
        $video->title = $title;
        $video->service = $service;
        $video->video_id = $video_id;
        $video->body = $body;
        $video->embed_code = $embed_code;
        $video->url = $url;
        $video->large_thumbnail = $large_thumbnail;

        return $video;
    }



    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{%video}}';
    }



    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'video_id' => 'Video ID',
            'service' => 'Видеохостинг',
            'title' => 'Название',
            'body' => 'Описание',
            'embed_code' => 'Iframe',
            'url' => 'Ссылка',
            'large_thumbnail' => 'Картинка',
        ];
    }

}
