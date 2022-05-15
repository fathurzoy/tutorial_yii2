<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="pegawai-form">

    <div class="x_panel">
        <div class="x_title">
            <h2>Identitas Personal</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <?php $form = ActiveForm::begin(); ?>

            <div class="row">
                <div class="col-md-4">
                    <!-- <?= $form->field($model, 'id_personal')->textInput() ?>-->
                    <?= $form->field($model, 'id_personal')->widget(Select2::classname(), [
                        'data' => $namaPersonal,
                        'options' => ['placeholder' => 'Pilih Nama Lengkap ...'],
                        'theme' => Select2::THEME_BOOTSTRAP,
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ])->label('Nama Lengkap');
                    ?>
                </div>

                <div class="col-md-4">
                    <!-- <?= $form->field($model, 'jenis_pegawai')->textInput(['maxlength' => true]) ?> -->
                    <?= $form->field($model, 'jenis_pegawai')->widget(Select2::classname(), [
                        'data' => \app\models\Pegawai::JENIS_PEGAWAI,
                        'options' => ['placeholder' => 'Pilih Jenis Pegawai ...'],
                        // 'hideSearch'=>true,
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-md-4">
                    <!-- <?= $form->field($model, 'status_pegawai')->textInput(['maxlength' => true]) ?> -->
                    <?= $form->field($model, 'status_pegawai')->widget(Select2::classname(), [
                        'data' => ['Kontrak' => 'Kontrak', 'Pegawai Tetap' => 'Pegawai Tetap'],
                        'options' => ['placeholder' => 'Pilih Status Pegawai ...'],
                        // 'hideSearch'=>true,
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?=
                    $form->field($model, 'tanggal_bergabung')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Pilih tanggal ...'],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ]);

                    ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'gaji')->textInput(['type' => 'number']) ?>
                </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<!-- <div class="pegawai-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_personal')->textInput() ?>

        <?= $form->field($model, 'jenis_pegawai')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status_pegawai')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tanggal_bergabung')->textInput() ?>

        <?= $form->field($model, 'gaji')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div> -->