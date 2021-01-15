<?php


namespace app\modules\v1\controllers;


use app\modules\v1\models\Review;

class ReviewController extends ApiController
{
    public function actionFeedback()
    {
        $reviews = Review::find()->all();

        return $reviews;
    }
}