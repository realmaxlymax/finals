<?php

namespace app\controllers;
use app\models\Tournament;
use yii;
use app\models\Roster;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class TournamentController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Tournament;

        if($model->load(Yii::$app->request->post()) && $model->save()
        ){
            return $this->redirect(['/tournament/index']);
        }
        return $this->render('create',['model' => $model]);
        }
    public function actionDelete($id)
    {
    

        Yii::$app->db->createCommand()
        ->delete('tshirt','Tournament_id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/tournament/index']);
    }

    public function actionIndex()
    {
        $tournament = Tournament::find()->orderBy('event_name')->all();
        
        return $this->render('index',compact('tournament'));
    }

    public function actionUpdate($id)
    {
        $model = Tournament::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/tournament/view', 'id'=>$id]);

            }
            return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Tournament::findOne($id);

        return $this->render('view',compact('model'));
    }

}
