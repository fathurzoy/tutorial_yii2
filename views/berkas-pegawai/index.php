<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BerkasPegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Berkas Pagawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berkas-pagawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berkas Pagawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_berkas_pegawai',
            'id_pegawai',
            'jenis_identitas',
            'no_identitas',
            'tanggal_akhir_valid',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BerkasPagawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_berkas_pegawai' => $model->id_berkas_pegawai]);
                },

            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>