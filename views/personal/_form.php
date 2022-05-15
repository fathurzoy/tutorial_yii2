<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- 
<style>
    label {
        margin-right: 30px;
    }
</style> -->

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
                <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
                <!-- <label>Jenis Kelamin</label>
                <p>
                    Laki-laki:
                    <input type="radio" class="flat" name="Personal[jenis_kelamin]" id="jenis_kelamin" value="Laki-laki" checked="" required /> Perempuan:
                    <input type="radio" class="flat" name="Personal[jenis_kelamin]" id="jenis_kelamin" value="Perempuan" />
                </p> -->

                <?= $form->field($model, 'jenis_kelamin')->radioList(['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'], ['item' => function ($index, $label, $name, $checked, $value) {
                    // echo $checked;
                    return '<label style="margin-right:30px;">
                    <input type="radio" class="flat" name="' . $name . '" value="' . $value . '" ' . ($checked ? "checked" : "") . '>
                    ' . $label . '
                    </label>';
                }]);
                // die();
                ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <!-- <?= $form->field($model, 'tanggal_lahir')->textInput() ?> -->
                <?=
                $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'Pilih tanggal ...'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-M-yyyy'
                    ]
                ]);

                ?>
            </div>
            <div class="col-md-3">
                <!-- <?= $form->field($model, 'status_perkawinan')->textInput(['maxlength' => true]) ?> -->
                <?= $form->field($model, 'status_perkawinan')->widget(Select2::classname(), [
                    'data' => $statusPerkawinan,
                    'options' => ['placeholder' => 'Pilih Status ...'],
                    // 'hideSearch'=>true,
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'agama')->widget(Select2::classname(), [
                    'data' => $agama,
                    'options' => ['placeholder' => 'Pilih Agama ...'],
                    // 'hideSearch'=>true,
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>
                <!-- <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?> -->
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'pendidikan')->widget(Select2::classname(), [
                    'data' => $pendidikan,
                    'options' => ['placeholder' => 'Pilih Pendidikan ...'],
                    // 'hideSearch'=>true,
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>
                <!-- <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?> -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <!-- <div class="">
            <label>
                <input type="checkbox" class="js-switch" checked /> Checked
            </label>
        </div> -->

    </div>

    <div class="x_title">
        <h2>Identitas Personal</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>

        <div class="row">

            <div class="col-md-4">
                <?= $form->field($modelPegawai, 'jenis_pegawai')->widget(Select2::classname(), [
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
                <?= $form->field($modelPegawai, 'status_pegawai')->widget(Select2::classname(), [
                    'data' => ['Kontrak' => 'Kontrak', 'Pegawai Tetap' => 'Pegawai Tetap'],
                    'options' => ['placeholder' => 'Pilih Status Pegawai ...'],
                    // 'hideSearch'=>true,
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($modelPegawai, 'jabatan')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?=
                $form->field($modelPegawai, 'tanggal_bergabung')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'Pilih tanggal ...'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-M-yyyy'
                    ]
                ]);

                ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($modelPegawai, 'gaji')->textInput(['type' => 'number']) ?>
            </div>
        </div>


        <div class="ln_solid"></div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<!-- 
<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'status_perkawinan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div> -->