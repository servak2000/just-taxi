<?php


namespace app\modules\v1\controllers;


class TripTypesController extends ApiController
{
    public function actionHome()
    {
        $trip_types =  [
            [
                'id' => 1,
                'name' => 'Эконом',
                'max_price' => 200,
                'description' => ['Выгодная цена', 'Ожидание не более 5 минут', 'Нет детского кресла']
            ],
            [
                'id' => 2,
                'name' => 'Стандарт',
                'max_price' => 500,
                'description' => ['Гибкие цены', 'В наличии детское кресло', 'Ожидание до 15 мин.']
            ],
            [
                'id' => 3,
                'name' => 'VIP',
                'max_price' => 1000,
                'description' => ['В наличии детское кресло', 'Ожидание до 30 мин.', 'Возможность выбрать водителя']
            ]
        ];
        return $trip_types;
    }
}