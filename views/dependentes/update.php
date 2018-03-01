<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dependentes */

$this->title = 'Update Dependentes: ' . $model->id_dep;
$this->params['breadcrumbs'][] = ['label' => 'Dependentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dep, 'url' => ['view', 'id_dep' => $model->id_dep, 'id_usuario' => $model->id_usuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dependentes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
