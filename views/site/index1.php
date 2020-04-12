<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach($articles as $article):?>
                    <article class="post">
                        <div class="col-md-4">
                           <div class="card mb-4 text-white bg-dark">
                            <img class="card-img-top" src="<?= $article->getImage();?>" alt="">
                            <div class="card-body">
                             <h5 class="card-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?></a></h5>
                             <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title; ?></a></h6>
                             <p class="card-text"><?= $article->description?></p>
                             <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="btn btn-outline-light btn-sm">Переглянути більше</a>
                             <span class="social-share-title pull-left text-capitalize">Написано: <?= $article->author->name; ?> Дата: <?= $article->getDate();?></span>
                             <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= (int) $article->viewed?>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>

        <?php
        echo LinkPager::widget([
            'pagination' => $pagination,
        ]);
        ?>
    </div>
</div>
</div>
<!-- end main content-->
<!--footer start-->

