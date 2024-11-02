<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CourseEnrollment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="course-enrollment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($courses, 'id', 'id'),
        ['prompt' => 'Select a course']
    ) ?>

    <?= $form->field($model, 'student_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($students, 'id', 'name'),
        ['prompt' => 'Select a student']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
