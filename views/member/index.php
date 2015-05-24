<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZcyhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zcyhs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zcyh-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Zcyh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'uname',
            'passwd',
            'kickname',
            'gavar',
            // 'sex',
            // 'birthday',
            // 'email:email',
            // 'hover',
            // 'mz',
            // 'addres',
            // 'question',
            // 'answer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
