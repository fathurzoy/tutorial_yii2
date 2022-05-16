<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BerkasPagawai */

$this->title = 'Create Berkas Pagawai';
$this->params['breadcrumbs'][] = ['label' => 'Berkas Pagawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berkas-pagawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'pegawai' => $pegawai
    ]) ?>

</div>