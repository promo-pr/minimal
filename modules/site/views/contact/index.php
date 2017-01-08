<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\modules\site\models\ContactForm */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginBlock('title');
echo Html::encode($this->title);
$this->endBlock(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <?= $form->field($model, 'subject', ['options'=>['class'=>'element-invisible']]); ?>
            <?= $form->field($model, 'name', ['options'=>['class'=>'required-name']]) ?>
            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'email') ?>
            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

        <div class="col-md-7">
            <div class="form-group">
                <label>Схема проезда</label>

            </div>
        </div>

    </div>

</div>
