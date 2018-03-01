<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DependentesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dependentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependentes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dependentes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dep',
            'nome',
            'id_usuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
