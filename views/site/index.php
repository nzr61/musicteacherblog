<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\Calendario;
?>
<!--main content start-->

    <div style="margin:2%;">
        <div class="row">
            <div class="col-md-5" style="background:#241B0F;margin-top:1%;">
            <div class="main-content" >
            <div style="margin: 0; width :100%; color:black;"
<?= $this->render('/partials/sidebar', [
                'categories'=>$categories
            ]);?>
            <div style="width:100%;height:60%;margin-bottom:2%;" id="calendar" class="fc-calendar-container">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FKiev&amp;src=bmV3Z2FtZXJuYXphckBnbWFpbC5jb20&amp;src=dWsudWtyYWluaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%230B8043" style="border:solid 1px #777" width="100%" height="400px" frameborder="0" scrolling="no"></iframe>
            </div>
            </div>
            </div>
            <div class="col-md-7" style="margin-top:1%;">
                <?php foreach($articles as $article):?>
                    <article class="post" >
                        <div class="post-thumb">
                            <div style="height:30%;" class="card mb-4 text-white bg-dark">
                            <a style="width:100%;" href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img class="card-img-top" src="<?= $article->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">Показати </div>
                            </a>
                            </div>
                </div>
                            <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title; ?></a></h6>
                            </header>
                            <div class="entry-content">
                                <p><?= $article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="more-link">Продовжити читання</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">Написано: <?= $article->author->name; ?> Дата: <?= $article->getDate();?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= (int) $article->viewed?>
                                </ul>
                        
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
