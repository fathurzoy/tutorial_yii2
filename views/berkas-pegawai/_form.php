<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BerkasPagawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berkas-pagawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pegawai')->textInput(['value' => $pegawai->personal->nama_lengkap, 'disabled' => true])->label('Nama Pegawai') ?>

    <?= $form->field($model, 'jenis_identitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_identitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_akhir_valid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>