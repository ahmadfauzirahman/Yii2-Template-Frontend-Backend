<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Jenislayanan */

$this->title = Yii::t('app', 'Update Jenislayanan: {nameAttribute}', [
    'nameAttribute' => $model->id_layanan,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jenislayanans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_layanan, 'url' => ['view', 'id' => $model->id_layanan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="jenislayanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
