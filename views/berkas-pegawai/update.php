<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BerkasPagawai */

$this->title = 'Update Berkas Pagawai: ' . $model->id_berkas_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Berkas Pagawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_berkas_pegawai, 'url' => ['view', 'id_berkas_pegawai' => $model->id_berkas_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berkas-pagawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
