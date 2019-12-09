<?php

namespace app\controllers;

use app\models\Addit_for_auto;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Ads;
use app\models\Addit;
use app\models\AddForm;
use app\models\Brand_model_connect;
use Yii;
use yii\web\UploadedFile;
use app\models\UploadForm;


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

        $auto = $query->orderBy('id DESC')
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
    public function actionAdd()
    {
        $m = new AddForm();
        $mo = new UploadForm();
        $querry = Brand_model_connect::find();
        $additions = Addit::find();
        $BMC = $querry->orderBy('id')->all();
        $additions = $additions->orderBy('id')->all();

        if ($m->load(Yii::$app->request->post()) && $m->validate()) {






            if (Yii::$app->request->isPost) {
                $mo->imageFile = UploadedFile::getInstances($mo, 'imageFile');
                if ($mo->upload()) {

                    $count = count($mo->imageFile);
                    return $this->render('add-confirm', ['m' => $m,
                        'count' => $count,
                        ]);
                }
            }
        } else {

            return $this->render('add',
                [
                    'm' => $m,
                    'BMC' => $BMC,
                    'additions' => $additions,
                    'mo' => $mo,
                ]
            );
        }

    }




}