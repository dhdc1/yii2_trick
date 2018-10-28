<?php

namespace app\modules\pjax\controllers;

use yii\web\Controller;

class DefaultController extends Controller {
    public function actionSubmitForm() {
        $data = \Yii::$app->request->post('data');
        return $this->render('submit-form', [
                    'data' => $data,
                    'time' => date('H:i:s')
        ]);
    } 
}
