<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Branches;
use app\models\Companies;
use app\models\Departments;
use app\models\JobTitles;
use app\models\Profiles;
use app\models\Teams;
use app\models\UserProfiles;
use app\models\Users;
use app\models\TabelaSearch;
use yii\helpers\Url;

class TabelaController extends Controller
{  
   

    public function actionIndex()
            
    { 
       
        $id = Yii::$app->request->get('user');
$model= \app\models\Users::find('id')->where(['username' =>$id])->one();



    return $this->render('index', [
        'model' => $model,
    ]);
    }
    
    public function actionMailing(){

        $model= \app\models\Users::find('id')->where(['username' => 2077])->all();
        return $this->render('mailing', [
            'model' => $model,
        ]);
    }

}