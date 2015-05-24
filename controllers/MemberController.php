<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\app\models;

class MemberController extends Controller {
	public function actionSignup() {
		return $this->render ( 'signup' );
	}
	public function actionLogin() {
		if (! \Yii::$app->user->isGuest) {
			return $this->goHome ();
		}
		
		$model = new LoginForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {
// 			if (\Yii::$app->user->isGuest==true) {
// // 				echo "true";
// // 				\Yii::info("===========true");
// 			} else {
// // 				echo "false";
// // 				echo \Yii::$app->user->id;
// 				\Yii::info("===========false"+\Yii::$app->user->id);
// 			}
			return $this->goBack ();
		} else {
			
			return $this->render ( 'login', [ 
					'model' => $model 
			] );
		}
	}
	
	public function actionLogout() {
		Yii::$app->user->logout ();
	
		return $this->goHome ();
	}
}