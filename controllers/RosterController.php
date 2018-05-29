<?php

namespace app\controllers;
use app\models\Roster;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;
use yii;


class RosterController extends \yii\web\Controller
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
        $model = new Roster;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['roster/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Roster::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('roster','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/roster/index']);
    }

    public function actionIndex()
    {
        $pro = Roster::find()->orderBy('team_captain')->all();
        
        return $this->render('index',['pro'=>$pro]);

    }

    public function actionUpdate($id)
    {
        $model = Roster::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/roster/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Roster::findOne($id);

        return $this->render('view',compact('model'));
    }

}
