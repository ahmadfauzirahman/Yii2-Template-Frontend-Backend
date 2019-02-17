<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Jenislayanan */

$this->title = Yii::t('app', 'Create Jenislayanan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jenislayanans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenislayanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
