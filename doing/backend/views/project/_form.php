<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_list')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project_file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_doc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_datetime')->textInput() ?>

    <?= $form->field($model, 'project_member')->textInput() ?>

    <?= $form->field($model, 'project_rule')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
