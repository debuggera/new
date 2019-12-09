<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<link href="ajax.js" style="js">

    <h2><a href="/web/index.php?r=auto">Авто в продаже</a></h2>
    <h2><a href="/web/index.php?r=auto/add">Добавить авто</a></h2>

    <?php foreach ($auto as $a):
        $img = "/web/photos/img/".$a->id."-1.jpg";
        $href = "/web/index.php?r=auto/ad&id=".$a->id;
        $id = $a->id;
        ?>


        <div class="row" style="padding-top: 5pt" id="<?= $id?>">
            <div class="col-md-2"><a class="text-primary" href=<?=$href?>><img src="<?= $img?>" width="146"></a></div>
            <div class="col-md-2">
                <a class="text-primary" href=<?=$href?>>
                    <?= Html::encode("{$a->brand} {$a->model}") ?>
                </a>



            </div>
            <div class="col-md-2">Цена:<?= $a->price ?></div>
            <div class="col-md-2">Пробег:<?= $a->mileage ?></div>
        </div>



    <?php endforeach; ?>


<?= LinkPager::widget(['pagination' => $pagination]) ?>