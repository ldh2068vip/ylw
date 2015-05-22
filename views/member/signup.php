<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = '用户注册';
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="main w980 mc">
        
        <div class="box9-t box9-t0">
            <div><h3 class="">用户注册</h3></div>
        </div>
        <div class="box9-c minh400">
            
            <dl class="register">
                <dt>昵　　称：</dt><dd><input type="text" class="inp-txt2 w215" name="textfield"><span class="err">6-32字符，可使用字母、数字和符号的任意组合</span></dd>
                <dt>创建密码：</dt><dd><input type="text" class="inp-txt2 w215"  name="textfield"><span class="err">6-32字符，可使用字母、数字和符号的任意组合</span>
                    <div class="pwd-Lv">
                        <span class="pwd-Lv1"><span></span>弱</span>
                        <span class="pwd-Lv2"><span></span>中</span>
                        <span class="pwd-Lv3"><span></span>强</span>
                    </div>
                    <div class="clear"></div>
                </dd>
                <dt>确认密码：</dt><dd><input type="text" class="inp-txt2 w215"  name="textfield"><span class="err">请输入确认的密码</span></dd>
                <dt>手机号码：</dt><dd><input type="text" class="inp-txt2 w215"  name="textfield"><span class="err">注册手机号</span></dd>
                <dt>验证号码：</dt><dd><input type="text" class="inp-txt2 w125"  name="textfield"><a class="send-code">发送验证码</a><span class="err"></span></dd>
                <dt></dt><dd><input type="checkbox" name="checkbox" id="checkbox">我已看过并接受<a class="agreement" href="####">《用户协议》</a></dd>
                <dt></dt><dd><input class="input-btn2 w215 " type="submit" name="button" value="同意以上协议并注册"></dd>
            </dl>
            
            
            
        </div>
        <!---->
        
        <div class="clear"></div>
        
    </div>
    <!--main-->
    
    
