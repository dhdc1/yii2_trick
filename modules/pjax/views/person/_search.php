<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\pjax\models\PersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>[
            'data-pjax'=>TRUE
        ]
    ]); ?>

    

    <?= $form->field($model, 'name') ?>


    <?php ActiveForm::end(); ?>

</div>
