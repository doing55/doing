<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'project_code') ?>

    <?= $form->field($model, 'project_name') ?>

    <?= $form->field($model, 'project_list') ?>

    <?= $form->field($model, 'project_file') ?>

    <?php // echo $form->field($model, 'project_doc') ?>

    <?php // echo $form->field($model, 'project_datetime') ?>

    <?php // echo $form->field($model, 'project_member') ?>

    <?php // echo $form->field($model, 'project_rule') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
