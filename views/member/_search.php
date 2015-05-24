<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZcyhSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zcyh-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'uname') ?>

    <?= $form->field($model, 'passwd') ?>

    <?= $form->field($model, 'kickname') ?>

    <?= $form->field($model, 'gavar') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'hover') ?>

    <?php // echo $form->field($model, 'mz') ?>

    <?php // echo $form->field($model, 'addres') ?>

    <?php // echo $form->field($model, 'question') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
