<?php

namespace maksclub\parser\services;

use maksclub\parser\entities\Video;
use maksclub\parser\forms\VideoForm;
use maksclub\parser\repositories\VideoRepository;
use RicardoFiorani\Matcher\VideoServiceMatcher;


class VideoManageService
{
    private $video;
    private $matcher;

    public function __construct(VideoRepository $video, VideoServiceMatcher $matcher)
    {
        $this->video = $video;
        $this->matcher = $matcher;
    }

    public function create(VideoForm $form): Video
    {

        /*
         * Match video by URL in form
         */
        $match = $this->matcher->parse($form->url);



        /*
         * Create video fields
         */
        $video = Video::create(
            $form->title = $match->getTitle(),
            $form->service = $match->getServiceName(),
            $form->video_id = $match->videoId,
            $form->body = '',
            $form->embed_code = $match->getEmbedCode(200, 200),
            $form->url = $match->rawUrl,
            $form->large_thumbnail =$match->getLargeThumbnail()
        );

        $this->video->save($video);
        return $video;
    }

}