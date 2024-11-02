<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Course $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_topic_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($course_topics, 'id', 'name'),
        ['prompt' => 'Select Topic']
    ) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($teachers, 'id', 'name'),
        ['prompt' => 'Select Teacher']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
