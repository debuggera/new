<?php

namespace app\controllers;

use app\models\Addit_for_auto;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Ads;
use app\models\Addit;


class AutoController extends Controller
{
    public function actionIndex()
    {
        $query = Ads::find();

        $pagination = new Pagination(
            [
                'defaultPageSize' => 5,
                'totalCount' => $query->count(),
            ]
        );

        $auto = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',
            [
                'auto' => $auto,
                'pagination' => $pagination,
            ]
        );
    }

    public function actionAd($id)
    {
        $id_auto = Ads::findOne($id);
        $additions = Addit::find();
        $addit_for_auto = Addit_for_auto::find();

        $pagination = new Pagination(
            [
                'defaultPageSize' => 5,
                'totalCount' => $additions->count(),
            ]
        );


        $additions = $additions->orderBy('id')
            ->all();

        $addit_for_auto = $addit_for_auto->orderBy('id')
            ->all();

        return $this->render('ad',
        [
            'id_auto' => $id_auto,
            'additions' => $additions,
            'addit_for_auto' => $addit_for_auto,
            ]
        );


    }
}