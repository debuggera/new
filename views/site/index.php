<?php

use app\models\Ads;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$mm = Ads::findOne("A4");
echo $mm->model;


?>

