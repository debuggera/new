<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\models\Ads;
use app\models\Brand_model_connect;



?>

<p>Вы успешно добавили информацию в базу данных</p>

<ul>
    <li><label>Марка</label>: <?= Html::encode($m->brand) ?></li>
    <li><label>Модель</label>: <?= Html::encode($m->model) ?></li>
    <li><label>Пробег</label>: <?= Html::encode($m->mileage) ?></li>
    <li><label>Цена</label>: <?= Html::encode($m->price) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($m->phone) ?></li>
</ul>

<?php

$id = Ads::find()->orderBy('id DESC')->one();
$id2 = $id->id + 1;

$create = new Ads();
$create->id = $id2;
$create->brand = $m->brand;
$create->model = $m->model;
$create->mileage = $m->mileage;
$create->price = $m->price;
$create->phone = $m->phone;
$create->additions = 0;
$create->photo = $count;
$create->save();




?>