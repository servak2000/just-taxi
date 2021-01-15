<?php


namespace app\modules\v1\controllers;

use app\modules\v1\models\Car;
use Yii;
use yii\web\NotFoundHttpException;

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

    public function actionInfo($url)
    {
        $car = Car::find()
            ->where(['url' => $url])
            ->one();

        if ($car === null) {
            throw new NotFoundHttpException('Автомобиль не найден');
        }

        return $car;
    }

}