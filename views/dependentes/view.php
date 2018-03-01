<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dependentes */

$this->title = $model->id_dep;
$this->params['breadcrumbs'][] = ['label' => 'Dependentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependentes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_dep' => $model->id_dep, 'id_usuario' => $model->id_usuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_dep' => $model->id_dep, 'id_usuario' => $model->id_usuario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_dep',
            'nome',
            'id_usuario',
        ],
    ]) ?>

</div>
