<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Problem */

$this->title = Yii::t('app', 'Import Problem From Polygon System');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Problems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= Html::beginForm() ?>
    <div class="form-group">
        <h3>Import problem</h3>
        <div class="input-group">
            <span class="input-group-addon" id="polygon_problem_id"><?= Yii::t('app', 'Polygon Problem ID') ?></span>
            <?= Html::textInput('polygon_problem_id', '', ['class' => 'form-control']) ?>
        </div>
        
    </div>

    <div class="form-group">
        <h3>Or import problems list</h3>
        <div class="input-group">
            <span class="input-group-addon">From</span>
            <?= Html::textInput('polygon_problem_id_from', '', ['class' => 'form-control']) ?>
            <span class="input-group-addon">to</span>
            <?= Html::textInput('polygon_problem_id_to', '', ['class' => 'form-control']) ?>
        </div>
        
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-success']) ?>
    </div>
    <?= Html::endForm() ?>
</div>
