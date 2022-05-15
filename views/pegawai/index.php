<?php

use app\models\Pegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pegawai',
            // 'id_personal',
            // 'personal.nama_lengkap',
            [
                'label' => 'Nama Lengkap',
                'attribute' => 'nama_pegawai',
                'value' => function ($model) {
                    return $model->personal->nama_lengkap;
                }
            ],
            [
                'attribute' => 'personal.jenis_kelamin',
                'filter' => Html::activeDropDownList($searchModel, 'jenis_kelamin', \app\models\Personal::JENIS_KELAMIN, ['class' => 'form-control', 'prompt' => 'pilih']),
                'headerOptions' => ['style' => 'width:140px']
                // 'headerOptions' => ['style' => 'text-align:center'],
                // 'contentOptions' => ['style' => 'text-align:center']
            ],
            // [
            //     'attribute' => 'alamat',
            //     'value' => function ($model) {
            //         return $model->personal->alamat;
            //     },
            //     'headerOptions' => ['style' => 'width:200px']
            // ],
            // [
            //     'attribute' => 'personal.alamat',
            //     'headerOptions' => ['style' => 'width:200px']
            // ],
            [
                'label' => 'Nomor KTP',
                'attribute' => 'ktp',
                'value' => function ($model) {
                    return $model->personal->no_ktp;
                },
                'headerOptions' => ['style' => 'width:200px']
            ],
            [
                'attribute' => 'jenis_pegawai',
                'filter' => Html::activeDropDownList($searchModel, 'jenis_pegawai', \app\models\Pegawai::JENIS_PEGAWAI, ['class' => 'form-control', 'prompt' => 'pilih']),
                'headerOptions' => ['style' => 'width:140px']
                // 'headerOptions' => ['style' => 'text-align:center'],
                // 'contentOptions' => ['style' => 'text-align:center']
            ],
            // 'jenis_pegawai',
            'status_pegawai',
            'jabatan',
            //'tanggal_bergabung',
            //'gaji',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                },
                'headerOptions' => ['style' => 'width:65px']
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>