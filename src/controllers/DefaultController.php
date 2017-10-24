<?php

namespace maksclub\parser\controllers;

use maksclub\parser\search\VideoSearch;
use yii\web\Controller;
use Yii;

/**
 * Class DefaultController
 * @package maksclub\parser\controllers
 */
class DefaultController extends Controller
{
    /**
     * Lists all Video models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VideoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
