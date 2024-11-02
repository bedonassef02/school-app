<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CourseTopic $model */

$this->title = 'Create Course Topic';
$this->params['breadcrumbs'][] = ['label' => 'Course Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-topic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
