<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\pjax\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php
    $form = ActiveForm::begin([
                'id' => 'form-pjax',
                'options' => [
                    'data-pjax' => TRUE
                ]
    ]);
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'autocomplete' => 'off']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
