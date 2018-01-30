<?php

namespace backend\controllers;

use Yii;
use backend\models\Risk2datarisk;
use backend\models\Risk2datariskSearch;
use backend\models\Risk2group;
use backend\models\Risk2risk;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

/**
 * Risk2datariskController implements the CRUD actions for Risk2datarisk model.
 */
class Risk2datariskController extends Controller
{

    /**
     * @inheritdoc
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
     * Lists all Risk2datarisk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Yii::$app->request->get();
        $date1 = isset($model['date1']) ? $model['date1'] : '';
        $date2 = isset($model['date2']) ? $model['date2'] : '';       
        
        $searchModel = new Risk2datariskSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
/*
        $items1 = Risk2group::find()
            ->select(['namegroup'])
            ->indexBy('codegroup')
            ->column();
*/
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
            'date1' => $date1,
            'date2' => $date2,
            //'items1' => $items1,
        ]);
    }

    /**
     * Displays a single Risk2datarisk model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Risk2datarisk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   
    public function actionCreate()
    {        
        $model = new Risk2datarisk();

        if ($model->load(Yii::$app->request->post())) {
        $curentDate = date('Y-m-d');
        $model->datereport = $curentDate;  
        $model->statusconfirm = '0';
        //$model->daterespon = "";
        //$model->dtevt = isset($model['dtevt']) ? $model['dtevt'] : '';
       // print_r($model);
        
        if($model->save()){
            return $this->redirect(['view', 'id' => $model->id]);
        }else {
                        
            return $this->render('create', [
                'model' => $model,
                
            ]);
        }

        } else {
                        
            return $this->render('create', [
                'model' => $model,
                
                
            ]);
        }
    }

    /**
     * Updates an existing Risk2datarisk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dtevt = ArrayHelper::map($this->getDtevt($model->fromevent),'id','name'); //id ,name จาก funtion MapData
        if($model->fromevent<>'9'){ 
            $model->dtevt_other='.';
        }
        //if(empty($model->notehead)){ $model->statusconfirm='0'; }else{ $model->statusconfirm='1'; }
        //print_r($model);
        $post =Yii::$app->request->post('Risk2datarisk');
        $notehead = $post['notehead'];
        $noteceo = $post['noteceo'];
        if(empty($notehead)){$model->statusconfirm='0';}else{$model->statusconfirm='1';}
        if(empty($noteceo)){ $model->daterespon=''; }else{$curentDate = date('Y-m-d'); $model->daterespon=$curentDate;}
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            
            return $this->render('update', [
                'model' => $model,
                'dtevt' => $dtevt,
            ]); 
        }
    }

    /**
     * Deletes an existing Risk2datarisk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
   
    /**
     * Finds the Risk2datarisk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Risk2datarisk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Risk2datarisk::findOne($id)) !== null) {

            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionGetDtevt() {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $codegroup = $parents[0];
                $out = $this->getDtevt($codegroup);
                echo Json::encode(['output'=>$out, 'selected'=>'']);
                return;
            }
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
    }
    protected function getDtevt($id){
        $datas = Risk2risk::find()->where(['codegroup'=>$id])->orderBy('coderisk')->all(); 
        return $this->MapData($datas,'id','namerisk');
    } 
    protected function MapData($datas,$fieldId,$fieldName){
        $obj = [];
        foreach ($datas as $key => $value) {
            array_push($obj, ['id'=>$value->{$fieldId},'name'=>$value->{$fieldName}]);
        }
        return $obj;
    }     
}
