<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\pjax\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">






    <?php
    Pjax::begin(['id' => 'pjax-div','enablePushState'=>FALSE]);
    ?>
    <?=
    $this->render('create', [
        'model' => $model
    ])
    ?>


    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
    <?php
    Pjax::end();
    ?>
</div>
<?php
$js = <<<JS

$(document).keypress(function(e) {
  if(e.which == 13) {
    
  }
});

$('#pjax-div').on('pjax:end', function() {
   //alert('success');
   $('#person-name').focus();
});
JS;
$this->registerJs($js);
