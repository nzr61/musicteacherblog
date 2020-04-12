<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use app\web\uploads\Calendario;
PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="backgr">
<?php $this->beginBody() ?>
<div style=" min-height: 90%;"> 
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="margin:5% 0 5% 0;color:white;" class="navbar-brand" href="/">Блог вчителя музики Крачковської Ірини Григорівни</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin:2% 0 2% 0;">
      <li><a  href="/"><span class = "glyphicon glyphicon-home"> На Домашню</a></li>
      <li><a href="<?= Url::to(['/site/about'])?>">Про Мене</a></li>
      <li><div class="dropdown open" >
  <button style="padding:12px 12px 0px 12px;" class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Методичне забезпечення
  </button>
  <div class="dropdown-menu" style="background:#241B0F;" aria-labelledby="dropdownMenuButton">
    <a style="color:white;" class="dropdown-item" href="https://drive.google.com/drive/folders/0B8lj5z2bvgEWLURVVzY2YlhTelE">5 клас</a>
    <div class="dropdown-divider"></div>
    <a style="color:white;" class="dropdown-item" href="https://drive.google.com/drive/folders/0B8lj5z2bvgEWMUZNbzJudnR4cmc">6 клас</a>
    <div class="dropdown-divider"></div>
    <a style="color:white;" class="dropdown-item" href="https://drive.google.com/drive/folders/0By0dZp1wDVeJZEVSc3Q4cUxsMkE">7 клас</a>
  </div>
</div></li>
<li><div class="dropdown open" >
  <button style="padding:12px 12px 0px 12px;" class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Нормативно-правова база
  </button>
  <div class="dropdown-menu" style="background:#241B0F;" aria-labelledby="dropdownMenuButton">
    <a style="color:white;" class="dropdown-item" href="https://drive.google.com/drive/folders/0B8lj5z2bvgEWMjhncmRmdDdMZWc">Нормативно-правові бази</a>
    <div class="dropdown-divider"></div>
    <a style="color:white;" class="dropdown-item" href="https://drive.google.com/drive/folders/0B8lj5z2bvgEWOF9DbnlDaHFDY3M">Навчальні програми</a>
    <div class="dropdown-divider"></div>
    <a style="color:white;" class="dropdown-item" href="https://drive.google.com/drive/folders/0B8lj5z2bvgEWd0FKQ0pfamMwY1E">Методичний матеріал молодого вчителя</a>
  </div>
</div></li>
        <li><?php if((!Yii::$app->user->isGuest)&&(Yii::$app->user->identity->name=="Admin")):?>
            <a href="<?= Url::toRoute(['/admin/default/index'])?>">Адміністрування</a>
        <?php endif;?>
        <?php if(Yii::$app->user->isGuest):?></li>
        <li> <a href="<?= Url::toRoute(['auth/login'])?>">Авторизуватися</a></li>
        <li><a href="<?= Url::toRoute(['auth/signup'])?>">Зареєструватися</a></li> 
        <?php else: ?>
            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Вихід (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
        <?php endif;?>
      </ul>    
    </div>
  </div>
</nav>

<?= $content ?>
</div>

<footer class="footer-widget-section" style=" background: #241B0F;margin-top:2%;">
    <div class="container">
        <div class="row">
		<div class="col-md-6">
			 <div class="about-content"> Всі права захищені.
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">Контактна інформація</h4>
                        <p>newgamernazar@gmail.com</p>
                        <p>BlackRaven</p>
                    </div>
			 </div>     
        </div>                        
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
