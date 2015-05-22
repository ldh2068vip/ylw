<?php
/* @var $this yii\web\View */
$this->title = '有情有礼';
?>

<script type="text/javascript">
$(document).ready(function() {
	$(".slide").each(function(g) {
		$(".slide").eq(g).find(".title li").each(function(e) {
			$(this).click(function() {
				//全部隐藏按钮select
				$(this).parents(".title").find("li").each(function() {
					$(this).removeClass("select");
				});
				//显示当前按钮select
				$(this).addClass("select");
				//过滤内容可见性select
				$(this).parents(".slide").find(".column_box .slideshow").each(function(f) {
					$(this).removeClass("noselect");
					$(this).removeClass("select");
					if (e == f) {
						$(this).addClass("select");
					} else {
						$(this).addClass("noselect");
					}
				});
			});
		});
	});
});
</script>

<div class="main w980 mc">
        	
        <div class="slide box7" >
            <ul class="title">
                <li class="select"><span class="a1">创意方案</span><span class="v"></span></li>
                <li><span class="a2">我的故事</span><span class="v"></span></li>
            </ul>
            <div class="column_box form_show">
                <div class="slideshow select ">
                
                
                    <div class="tit">方案标题</div>
                    <div class="inp"><input type="text" name="textfield"></div>
                    
                    <div class="tit">方案标签</div>
                    <div class="inp"><input type="text" name="textfield"></div>
                    
                    <div class="tit">上传图片</div>
                    <div class="inp"><input id="upload" type="file" class="d_n"/><label class="inp-upload" for="upload" >上传您的方案图片</label></div>
                    
                    
                    <div class="tit">方案对象</div>
                    <div class="inp"><input type="text" name="textfield"></div>
                    
                    <div class="tit">方案内容</div>
                    <div class="inp"><textarea name="textfield" id="textfield"></textarea></div>
                    
                    <div class="btn"><input type="submit" name="button" value="创意方案提交"></div>

                </div>
                <div class="slideshow noselect">
                
                	<div class="tit">故事标题</div>
                    <div class="inp"><input type="text" name="textfield"></div>
                    
                    <div class="tit">故事标签</div>
                    <div class="inp"><input type="text" name="textfield"></div>
                    
                    <div class="tit">上传图片</div>
                    <div class="inp"><input id="upload" type="file" class="d_n"/><label class="inp-upload" for="upload" >上传您的故事图片</label></div>
                    
                    <div class="tit">故事内容</div>
                    <div class="inp"><textarea name="textfield" id="textfield"></textarea></div>
                    
                    <div class="btn"><input type="submit" name="button" value="我的故事提交"></div>
                
                
                </div>
            </div>
        </div>
                
    </div>
    <!--main-->
    
    
