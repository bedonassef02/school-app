<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CourseEnrollment $model */

$this->title = 'Create Course Enrollment';
$this->params['breadcrumbs'][] = ['label' => 'Course Enrollments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-enrollment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'students' => $students,
        'courses' => $courses
    ]) ?>

</div>
