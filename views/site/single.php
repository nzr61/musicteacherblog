<?php
use yii\helpers\Url;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <article class="post">
                    <div class="post-thumb">
                        <a href=""><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view','id'=>$article->id])?>"><?= $article->title?></a></h1>


                        </header>
                        <div class="entry-content">
                            <pre><?= $article->content?></pre>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">Написано: <?= $article->author->name?> Дата: <?= $article->getDate();?>
                            </span>
                        </div>
                    </div>
                </article>

             <?= $this->render('/partials/comment', [
                 'article'=>$article,
                 'comments'=>$comments,
                 'commentForm'=>$commentForm
             ])?>
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
<br>
<!-- end main content-->