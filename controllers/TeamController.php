<?php

namespace app\controllers;
use app\models\Team;
use app\models\Roster;
use yii;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;



class TeamController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Team;

        if($model->load(Yii::$app->request->post()) && $model->save()
        ){
            return $this->redirect(['/team/index']);
        }
        return $this->render('create',['model' => $model]);
        }
    
    public function actionIndex()
    {
        $team = Team::find()->orderBy('team_name')->all();
        
        return $this->render('index',compact('team'));
    }

    public function actionUpdate()
    {
        $model = Team::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/team/view', 'id'=>$id]);
            }
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
