<?php

namespace app\controllers;

use app\models\BerkasPagawai;
use app\models\BerkasPegawaiSearch;
use app\models\Pegawai;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BerkasPegawaiController implements the CRUD actions for BerkasPagawai model.
 */
class BerkasPegawaiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all BerkasPagawai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BerkasPegawaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BerkasPagawai model.
     * @param int $id_berkas_pegawai Id Berkas Pegawai
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_berkas_pegawai)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_berkas_pegawai),
        ]);
    }

    /**
     * Creates a new BerkasPagawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $pegawai = Pegawai::findOne($id);
        $model = new BerkasPagawai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_berkas_pegawai' => $model->id_berkas_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Updates an existing BerkasPagawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_berkas_pegawai Id Berkas Pegawai
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_berkas_pegawai)
    {
        $model = $this->findModel($id_berkas_pegawai);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_berkas_pegawai' => $model->id_berkas_pegawai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BerkasPagawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_berkas_pegawai Id Berkas Pegawai
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_berkas_pegawai)
    {
        $this->findModel($id_berkas_pegawai)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BerkasPagawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_berkas_pegawai Id Berkas Pegawai
     * @return BerkasPagawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_berkas_pegawai)
    {
        if (($model = BerkasPagawai::findOne(['id_berkas_pegawai' => $id_berkas_pegawai])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
