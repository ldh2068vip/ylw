<?php
use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register ( $this );
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= Html::encode($this->title) ?></title>
<link rel="stylesheet" type="text/css" href="css/cssreset.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script src="scripts/jquery.js"></script>
<!--[if lt IE 9]>
<script src="scripts/html5shiv.min.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<script type="text/javascript" src="PIE.js"></script>
<![endif]-->
<script language="javascript">
$(function() {
    if (window.PIE) {
        $('.rounded').each(function() {
            PIE.attach(this);
        });
    }
});
</script>
    <?php $this->head()?>
</head>
<body>


<div data-role="page" id="page" class="main_box">

    <div data-role="header" class="header_box">
        <header class="top w980 mc">
            <div class="t-login">您好，欢迎访问有情友礼网 ！<span>showchen000</span><a class="" href="####">个人中心</a><a class="" href="####">退出</a></div>
            <div class="logo fl"><a href="####" title="有情友礼--相亲相爱在一起!"></a></div>
            <div class="search fr">
                <div class="search-box">
                    <input name="" type="text" class="inp-txt" value="快来搜索心爱的礼物吧！">
                    <input name="" type="submit" class="inp-btn " value="搜索">
                </div>
                <div class="search-txt">
                	<a href="####">情人节</a><a href="####">雾霾</a><a href="####">告白</a><a href="####">旅行</a><a href="####">长辈</a><a href="####">关怀</a><a href="####">DIY</a><a href="####">礼物</a><a href="####">求婚</a><a href="####">创意</a><a href="####">惊喜</a>
                </div>
            
            </div>
            <div class="userBtn fr">
                <a href="index.php?r=member/login">登录</a>
                <a href="index.php?r=member/signup" class="l">注册</a>
            </div>
            <div class="clear"></div>
            
            <ul class="menu">
                <li><a class="a1" href="" title="首页"><span class="btn">首页</span></a></li>
                <li><a class="a2" href="index.php?r=site/article" title="精选方案"><span class="btn">精选方案<span class="t"></span></span></a>
                    <ul class="menu2">
                        <li><a href="" title="精选方案">精选方案</a></li>
                        <li><a href="" title="精选方案">精选方案</a></li>
                        <li><a href="" title="精选方案">精选方案</a></li>
                    </ul>
                </li>
                <li><a class="a3" href="index.php?r=site/story" title="情理故事"><span class="btn">情理故事</span></a></li>
                <li><a class="a4" href="index.php?r=site/share" title="分享创意"><span class="btn">分享创意</span></a></li>
                <li><a class="a5" href="index.php?r=site/download" title="下载手机版"><span class="btn">下载手机版</span></a></li>
            </ul>
            
            <script>
			 $('.menu li').mousemove(function(){
			  $(this).addClass("hover");
			  $(this).find('.menu2').slideDown();
			 });
			 $('.menu li').mouseleave(function(){
			  $(this).removeClass("hover");
			  $(this).find('.menu2').slideUp("fast");
			 });
            </script>
        
            <div class="clear"></div>
        </header>
        
       
    
    </div>
    <!--header_box-->
<!--     <div class="main w980 mc"> -->
   <?= $content?>
<!--    </div> -->
        <!---->
        
        
        
    </div>
    <!--main-->
    
    
    <div class="clear m_b20"></div>
    
    <footer role="footer_box" id="footer_box">
    	<section class="page-bottom w980 mc">
        <ul class="">
            <li><span class="img"><img src="images/001.png" width="95" height="84"></span><span>专业礼品方案提供网站</span></li>
            <li><span class="img"><img src="images/002.png" width="80" height="83"></span><span>更贴心的产品关联服务</span></li>
            <li><span class="img"><img src="images/003.png" width="62" height="84"></span><span>高口碑的售后及实施服务</span></li>
            <li class="last">
            <span class="tel">400-800-8888</span>
            <span class="time">
                周一至周日9:00-18:00<br>
                （仅收市话费）
            </span>
            </li>
        </ul>
        </section>
    	<div class="clear m_b20"></div>
        <div class="copy-txt">
            京ICP备14050173号-1 | Copyright (C) 有情友礼网 2013-2015, All Rights Reserved	站长统计<br>
            客服邮箱：youli@520yli.com | 客服电话：010-53309978 | 网站招商热线电话：010-53309978 | 有情友礼网诚挚欢迎您的加入
        </div>
    
    </footer>
    <!--footer_box-->


</div>
   
       


</body>
</html>

