<?php
namespace maksclub\parser\forms;
use maksclub\parser\entities\Video;

/*
 * @property int $id
 * @property string $video_id
 * @property string $service
 * @property string $title
 * @property string $body
 * @property string $embed_code
 * @property string $url
 * @property string $large_thumbnail
 */

class VideoForm extends Video
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['video_id', 'service', 'title', 'embed_code', 'url', 'large_thumbnail'], 'string', 'max' => 255],
            ['video_id', 'unique'],
        ];
    }
}