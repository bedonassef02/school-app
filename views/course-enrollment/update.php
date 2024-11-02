<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CourseEnrollment $model */

$this->title = 'Update Course Enrollment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Course Enrollments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="course-enrollment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'students' => $students,
        'courses' => $courses
    ]) ?>

</div>
