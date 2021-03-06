<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Priority */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priority-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Priority_nm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Priority_about')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
