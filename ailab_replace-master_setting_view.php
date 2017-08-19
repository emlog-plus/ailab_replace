<?php
!defined('EMLOG_ROOT') && exit('access deined!');
?>
<script language="JavaScript">
$("#menu_mg").addClass('active');
$("#ailab_replace").addClass('active-page');
setTimeout(hideActived,2600);
function checkSubmit(){
	var find=document.getElementById("find");
	if(find.value==''){
		alert('原始内容填写不能为空！');
		find.focus();
		return false;
	}
	var blog=document.getElementById("blog");
	var blog_title=document.getElementById("blog_title");
	var comment=document.getElementById("comment");
	var twitter=document.getElementById("twitter");
	if(blog.checked||blog_title.checked||comment.checked||twitter.checked){
		return true;
	}else{
		alert('替换选择项必须选择一个！');
		blog.focus();
		return false;		
	}
}
</script>
 <div class="heading-bg  card-views">
  <ul class="breadcrumbs">
  <li><a href="./"><i class="fa fa-home"></i> <?php echo langs('home')?></a></li>
  <li class="active">内容批量替换</li>
 </ul>
</div>
<form action="plugin.php?plugin=ailab_replace-master" method="post" name="ailab_replace" id="ailab_replace">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default card-view">
<div class="panel-body"> 
<div class="form-group">
<label class="control-label mb-10">原始内容</label>
<input type="text" maxlength="200" class="form-control" value="" name="find" id="find">
</div>
<div class="form-group">
<label class="control-label mb-10">
替换内容</label>
<input type="text" maxlength="200" class="form-control" value="" name="replace" id="replace">
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default card-view">
<div class="panel-body"> 
<font color="red">特别提示:</font>本功能使用后会替换您网站的数据库内容，请在使用权务必做好网站数据备份，一遍产生不必要的风险！
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-default card-view">
<div class="panel-body"> 
替换选择：<br>
<div class="form-group">
<div class="checkbox checkbox-success ">
<input type="checkbox" value="y" name="blog" id="blog">
<label class="control-label mb-10">博客内容</label>
</div>
<div class="form-group">
<div class="checkbox checkbox-info ">
<input type="checkbox" value="y" name="blog_title" id="blog_title">
<label class="control-label mb-10">博客标题</label>
</div>
<div class="form-group">
<div class="checkbox checkbox-success ">
<input type="checkbox" value="y" name="comment" id="comment">
<label class="control-label mb-10">博客评论</label>
</div>
<div class="form-group">
<div class="checkbox checkbox-success ">
<input type="checkbox" value="y" name="twitter" id="twitter">
<label class="control-label mb-10">微语</label>
</div>
<div class="form-group text-center">		
<input name="token" id="token" value="<?php echo LoginAuth::genToken(); ?>" type="hidden" />
<input type="submit" value="提交" class="btn btn-info" onClick="return checkSubmit()">
 </div>
</div>
  </div>
  </div>
  </div>
</div>
</div>
</form>