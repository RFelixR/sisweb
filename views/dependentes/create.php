<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dependentes */

$this->title = 'Cadastrar Dependentes';
$this->params['breadcrumbs'][] = ['label' => 'Dependentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependentes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
