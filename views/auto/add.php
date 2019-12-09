<?php

use app\models\Ads;
use app\models\Brand_model_connect;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;



/*
$brand = array();
$model = array();
foreach ($BMC as $BMC1):

    array_push($brand, $BMC1->brand);

endforeach;
$brand = array_unique($brand);

foreach ($BMC as $BMC1):

    array_push($model, $BMC1->model);

endforeach;
*/
?>
    <h2><a href="/web/index.php?r=auto">Авто в продаже</a></h2>
    <h2><a href="/web/index.php?r=auto/add">Добавить авто</a></h2>
<?php
$brand = ArrayHelper::map(Brand_model_connect::find()->all(), 'brand', 'brand');
$model = ArrayHelper::map(Brand_model_connect::find()->all(), 'model', 'model');



$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
echo $form->field($m,'brand')->dropDownList($brand,
    [
        'prompt' => 'Марка',
    ]);
echo $form->field($m,'model')->dropDownList($model,
    [
        'prompt' => 'Модель',
    ]);
echo $form->field($m,'mileage');
echo $form->field($m,'price');

$addit = array();
foreach ($additions as $a) {
    array_push($addit,$a->name);
}
   echo $form->field($m, 'additions')->checkboxList($addit);
   // echo $form->field($m,'additions')->checkbox($addit);
echo $form->field($m,'phone');

echo $form->field($mo, 'imageFile[]')->fileInput(['multiple' => true, 'accept' => 'image/*']);



?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>