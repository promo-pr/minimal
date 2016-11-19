<?php

use yii\helpers\Html;
use promo\icons\Icon;
use promo\admin\AdminMenu;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<?= AdminMenu::widget([
    'itemsLeft' => [
        ['label' => Icon::name('home'), 'url' => Yii::$app->homeUrl],
        ['label' => Icon::name('settings'), 'url' => ['/admin/default/index']],
        ['label' => Icon::name('library_books') . ' Содержимое', 'items' => [
            ['label' => 'Страницы' . Html::a(Icon::name('add_circle_outline'), ['/admin/pages/default/create']), 'url' => ['/admin/pages/default/index']],
            ['label' => 'Новости' . Html::a(Icon::name('add_circle_outline'), ['/admin/posts/default/create']), 'url' => ['/admin/posts/default/index']],
            ['label' => 'Слайдеры' . Html::a(Icon::name('add_circle_outline'), ['/admin/sliders/default/create']), 'url' => ['/admin/sliders/default/index']],
        ]],
    ],
    'itemsRight' => [
        ['label' => '<i class="material-icons">build</i>', 'items' => [
            ['label' => '<i class="material-icons">place</i> Схема проезда', 'url' => ['/admin/default/map']],
            ['label' => '<i class="material-icons">people</i> Пользователи', 'url' => ['/admin/users/default/index']],
            ['label' => '<i class="material-icons">cached</i> Очистить кэш', 'url' => ['/admin/default/flush'], 'linkOptions' => ['data-method' => 'post']],
        ]],
        ['label' => '<i class="material-icons">power_settings_new</i>', 'url' => ['/user/default/logout'], 'linkOptions' => ['data-method' => 'post']],
    ],
]) ?>


