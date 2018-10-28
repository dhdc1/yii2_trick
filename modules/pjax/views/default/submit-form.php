<?php

use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>
<?php
Pjax::begin(['id' => 'pjax-div-1']);
echo $this->render('time', [
    'time' => $time
]);
Pjax::end();
?>
<hr>
<?php
Pjax::begin(['id' => 'pjax-div-2']);
ActiveForm::begin([
    'id' => 'form-pjax',
    'options' => ['data-pjax' => TRUE]
]);
?>
<input name="data" type="text" autocomplete="off"  id="data" autofocus/>
<button type="submit">SUBMIT</button>
<?php
ActiveForm::end();

echo 'submit: ' . $data;
Pjax::end();
?>

<?php
$js = <<<JS
   var timmer = setInterval(function(){
      $.pjax.reload({container:"#pjax-div-1"});
   },1000);     
JS;
$this->registerJs($js);
?>
