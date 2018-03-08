<?php

namespace app\controllers;

use Yii;
use app\models\Dependentes;
use app\models\DependentesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DependentesController implements the CRUD actions for Dependentes model.
 */
class DependentesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Dependentes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DependentesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dependentes model.
     * @param integer $id_dep
     * @param integer $id_usuario
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_dep, $id_usuario)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_dep, $id_usuario),
        ]);
    }

    /**
     * Creates a new Dependentes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dependentes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dep' => $model->id_dep, 'id_usuario' => $model->id_usuario]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dependentes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_dep
     * @param integer $id_usuario
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_dep, $id_usuario)
    {
        $model = $this->findModel($id_dep, $id_usuario);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dep' => $model->id_dep, 'id_usuario' => $model->id_usuario]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dependentes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_dep
     * @param integer $id_usuario
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_dep, $id_usuario)
    {
        $this->findModel($id_dep, $id_usuario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dependentes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_dep
     * @param integer $id_usuario
     * @return Dependentes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_dep, $id_usuario)
    {
        if (($model = Dependentes::findOne(['id_dep' => $id_dep, 'id_usuario' => $id_usuario])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('A página requisitada não existe.');
    }
}
