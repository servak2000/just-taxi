<?php


namespace app\modules\v1\controllers;

use app\modules\v1\models\Car;
use Yii;

class CarsListController extends ApiController
{
    public function actionCars()
    {
        $cars_properties = Car::find()->all();

        return $cars_properties;
    }

    public function actionCreate()
    {
        $model = new Car();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}