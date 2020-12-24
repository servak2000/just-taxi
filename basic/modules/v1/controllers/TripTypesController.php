<?php


namespace app\modules\v1\controllers;


use app\modules\v1\models\TripType;
use Yii;

class TripTypesController extends ApiController
{
    public function actionHome()
    {
        $trip_types = TripType::find()->all();

        return $trip_types;
    }

    public function actionCreate()
    {
        $model = new TripType();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }



}