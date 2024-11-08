<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Course $model */

$this->title = 'Create Course';
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'teachers' => $teachers,
        'course_topics' => $course_topics
    ]) ?>

</div>
