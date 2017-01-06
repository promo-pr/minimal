<?php

use yii\helpers\Html;
use app\modules\admin\rbac\Rbac as AdminRbac;

/* @var $this yii\web\View */
/* @var $model app\modules\page\models\backend\Page */

?>

<?php $this->beginBlock('title');
echo Yii::$app->user->isGuest ?
    false : Html::a('<i class="material-icons">mode_edit</i>', ['/admin/pages/default/update', 'id' => $model->id]);
echo Html::encode($model->title);
$this->endBlock(); ?>

<div class="container">
    <div class="field-body">
        <?= $model->body ?>
    </div>
</div>
