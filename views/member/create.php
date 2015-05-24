<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Zcyh */

$this->title = 'Create Zcyh';
$this->params['breadcrumbs'][] = ['label' => 'Zcyhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zcyh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
