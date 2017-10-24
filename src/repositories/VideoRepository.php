<?php

namespace maksclub\parser\repositories;

use maksclub\parser\entities\Video;
use maksclub\parser\repositories\NotFoundException;

/**
 * Class VideoRepository
 * @package maksclub\parser\repositories
 */
class VideoRepository
{


    /**
     * @param $id
     * @return Video
     */
    public function get($id): Video
    {
        if (!$video = Video::findOne($id)) {
            throw new NotFoundException('Video is not found.');
        }
        return $video;
    }



    /* TODO:: разобраться с ошибкой типа :void*/
    /**
     * @param Video $video
     * @return Video
     */
    public function save(Video $video)
    {
        if (!$video->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }



    /**
     * @param Video $video
     * @return Video
     */
    public function remove(Video $video): void
    {
        if (!$video->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }
}