<?php
use yii\helpers\Url;
?>
<div class="col-md-4" >
    <div class="primary-sidebar">
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Категорії</h3>
            <ul>
                <?php foreach($categories as $category):?>
                    <li>
                        <a href="<?= Url::toRoute(['site/category','id'=>$category->id]);?>"><?= $category->title?></a>
                    </li>
                <?php endforeach;?>

            </ul>
        </aside>
    </div>
</div>
