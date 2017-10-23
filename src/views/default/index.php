<?php

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel maksclub\parser\search\VideoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
?>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'title',
        'embed_code',
        'service',
        'url:url',
        'large_thumbnail',
        //'video_id',
        //'id',
        //'body:ntext',
        //'small_thumbnail',
    ],
]); ?>
