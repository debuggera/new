<?php

use yii\helpers\Html;


//echo Html::encode("{$id_auto->brand}");

//echo $id_auto->brand;
$img = "/web/photos/".$id_auto->id."-1.jpg";
?>






<style>
#leftSidebar{
float: left;
width: 740px;
}
#rightSidebar{
float: right;
width: 400px;
}
.modal.and.carousel {
    position: fixed; // Needed because the carousel overrides the position property
}
</style>

<h2><a href="/web/index.php?r=auto">Авто в продаже</a></h2>
<h2><a href="/web/index.php?r=auto/add">Добавить авто</a></h2>

<div class="row" style="padding-top: 5pt">

    <div class="container" style="width: 700px" id="leftSidebar">

        <ul class="nav nav-pills nav-stacked">
            <li><a href="#lightbox" data-toggle="modal"><img src="<?= $img?>"></a></li>

            <?php

            for ($i=1;$i<=$id_auto->photo;$i++)
            {
                $img1 = "/web/photos/img/".$id_auto->id."-".$i.".jpg";
                ?>
                <a href="#lightbox" data-toggle="modal" data-slide-to=<?=$i-1 ?>>
                        <img src="<?= $img1?>" width="146">
                    </a>
            <?php }   ?>

        </ul>

        <div class="modal fade and carousel slide" id="lightbox">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <ol class="carousel-indicators">
                            <li data-target="#lightbox" data-slide-to="0" class="active"></li>
                            <li data-target="#lightbox" data-slide-to="1"></li>
                            <li data-target="#lightbox" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">

                            <?php

                            for ($i=1;$i<=$id_auto->photo;$i++)
                            {
                                $j=0;
                                $f=0;
                                $img1 = "/web/photos/".$id_auto->id."-".$i.".jpg";
                                if ($i==1) {
                                    $j = "item active";
                                    $f = "First slide";
                                }
                                if ($i==2) {
                                    $j = "item";
                                    $f = "Second slide";
                                }
                                if ($i==3) {
                                    $j = "item";
                                    $f = "Third slide";
                                }
                                ?>

                                <div class="<?= $j ?>">
                                    <img src="<?= $img1?>" alt="<?= $f?>">
                                </div>

                            <?php } ?>
                        </div><!-- /.carousel-inner -->
                        <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div><!-- /.container -->


    <div id="rightSidebar">

        <div class="col-md-5">
            <h4>Марка</h4>
        </div>
        <div class="col-md-5">
            <h4><?=$id_auto->brand ?></h4>
        </div>
        <div class="col-md-5">
            <h4>Модель</h4>
        </div>
        <div class="col-md-5">
            <h4><?=$id_auto->model ?></h4>
        </div>
        <div class="col-md-5">
            <h4>Пробег</h4>
        </div>
        <div class="col-md-5">
            <h4><?=$id_auto->mileage ?> км.</h4>
        </div>
        <div class="col-md-5">
            <h4>Цена</h4>
        </div>
        <div class="col-md-5">
            <h4><?=$id_auto->price ?> руб.</h4>
        </div>
        <div class="col-md-5">
            <h4>Доп. оборудование:</h4>
        </div>
        <div class="col-md-5">

            <?php



            foreach ($addit_for_auto as $a)
            {
               // echo $a->id_auto;
                if ($a->id_auto==$id_auto->id)
                {
                   // echo $id_auto->id;
                    foreach ($additions as $b)
                    {
                        if ($b->id==$a->id_addit) echo "<h4>".$b->name."</h4>";
                    }

                }
            }

            ?>




        </div>
        <div class="col-md-5">
            <h4>Телефон</h4>
        </div>
        <div class="col-md-5">
            <h4>+7<?=$id_auto->phone ?></h4>
        </div>



    </div>
</div>







