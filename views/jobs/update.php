<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jobs */

$this->title = 'Update Jobs: ' . ' ' . $model->Job_ID;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Job_ID, 'url' => ['view', 'id' => $model->Job_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
