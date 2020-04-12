<?php
use app\assets\AppAsset;
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Адмінка</title>
    <?php $this->head() ?>
</head>
<body>
<div class="admin-default-index">
    <h1 style="text-align:center">
		Вітаємо на сторінці Адміністратора
    </h1>
    <p style="text-align:center">
		Ви можете редагувати і додавати статті, підтверджувати коментарі і створювати категорії.
    </p>
</div>
</body>