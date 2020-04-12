<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<!--main content start-->
<div class="main-content">
<?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php

                foreach($articles as $article):?>
                    <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb">
                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt="" class="pull-left"></a>

                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">Показати пост</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id]);?>"> <?= $article->category->title?></a></h6>

                                    <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"></a></h1>
                                </header>
                                <div class="entry-content">
                                    <p><?= $article->description?>
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">Написано: <?= $article->author->name;?> Дата: <?= $article->getDate();?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach;?>

               
            </div>
           <div class="col-md-5"  style="background:#241B0F;">
           <div style="margin: 0%; width :100%; color:black;"
<?= $this->render('/partials/sidebar', [
                'categories'=>$categories
            ]);?>
            <div style="width:100%;height:60%;" id="calendar" class="fc-calendar-container">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FKiev&amp;src=bmV3Z2FtZXJuYXphckBnbWFpbC5jb20&amp;src=dWsudWtyYWluaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%230B8043" style="border:solid 1px #777" width="100%" height="400px" frameborder="0" scrolling="no"></iframe>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->