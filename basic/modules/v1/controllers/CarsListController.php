<?php


namespace app\modules\v1\controllers;


class CarsListController extends ApiController
{
    public function actionCars()
    {
        $cars_properties = [
                    [
                        'model' => 'VAZ-2104',
                        'release_year' => 2010,
                        'mileage' => 10000
                    ],

                    [
                        'model' => 'VAZ-2101',
                        'release_year' => 2005,
                        'mileage' => 100000
                    ],

                    [
                        'model' => 'Mersedes GLA',
                        'release_year' => 2015,
                        'mileage' => 0
                    ],

                    [
                        'model' => 'BMW X5',
                        'release_year' => 2019,
                        'mileage' => 20000
                    ],

                    [
                        'model' => 'Lada Vesta',
                        'release_year' => 2016,
                        'mileage' => 15000
                    ],
                ];
                return $cars_properties;
    }
}