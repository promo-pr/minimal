<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use promo\icons\Icon;
use app\assets\AdminMenuAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AdminMenuAsset::register($this);
?>
<?php
NavBar::begin([
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top admin-menu-wrapper',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-left'],
    'encodeLabels' => false,
    'activateParents' => true,
    'items' => [
        ['label' => Icon::name('home'), 'url' => Yii::$app->homeUrl],
        ['label' => Icon::name('settings'), 'url' => ['/admin/default/index']],
        ['label' => Icon::name('library_books') . ' Содержимое', 'items' => [
            ['label' => 'Страницы' . Html::a(Icon::name('add_circle_outline'), ['/admin/pages/default/create']), 'url' => ['/admin/pages/default/index']],
            ['label' => 'Новости' . Html::a(Icon::name('add_circle_outline'), ['/admin/posts/default/create']), 'url' => ['/admin/posts/default/index']],
            ['label' => 'Слайдеры' . Html::a(Icon::name('add_circle_outline'), ['/admin/sliders/default/create']), 'url' => ['/admin/sliders/default/index']],
        ]],
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'encodeLabels' => false,
    'activateParents' => true,
    'items' => [
        ['label' => '<i class="material-icons">build</i>', 'items' => [
            ['label' => '<i class="material-icons">place</i> Схема проезда', 'url' => ['/admin/default/map']],
            ['label' => '<i class="material-icons">people</i> Пользователи', 'url' => ['/admin/users/default/index']],
            ['label' => '<i class="material-icons">cached</i> Очистить кэш', 'url' => ['/admin/default/flush'], 'linkOptions' => ['data-method' => 'post']],
        ]],
        ['label' => '<i class="material-icons">power_settings_new</i>', 'url' => ['/user/default/logout'], 'linkOptions' => ['data-method' => 'post']],
    ],
]);
NavBar::end();
?>


