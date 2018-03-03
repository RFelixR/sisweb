<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dependentes */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Dependentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependentes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id_dep' => $model->id_dep, 'id_usuario' => $model->id_usuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id_dep' => $model->id_dep, 'id_usuario' => $model->id_usuario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja realmente excluir este dependente ?',
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
