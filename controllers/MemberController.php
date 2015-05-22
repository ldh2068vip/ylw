<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

class MemberController extends Controller {
	public function actionSignup() {
		return $this->render ( 'signup' );
	}
	public function actionLogin() {
		return $this->render ( 'login' );
	}
}