<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?=base_url();?>asset/css/admin_stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<script src="<?=base_url();?>asset/js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="<?=base_url();?>asset/js/jquery.form.js" type="text/javascript"></script>
<script src="<?=base_url();?>asset/js/jquery.blockUI.js" type="text/javascript"></script>
</head>
<style>
.login_main
{
	position:relative;
	width:1122px;
	height:auto;
	min-height:300px;
	margin:0 auto;
	margin-top:10%;
	overflow:hidden;
	border:1px solid #ccc;
	background-color:#fff;
}
.main #loginForm td {
	padding:5px;
}
.main #loginForm input[type=password] {
	width:97%;
	height:19px;
	margin-left:2px;
}
#login_content
{
	margin:0 auto;
	position:absolute;
	height:auto;
	width:411px;
	display:inline-block;
	left:50%;
	top:50%;
	margin-left:-205px;
	margin-top:-72px;
}
#login_title {
	width:100%;
	font-size:16px;
	color:#555;
	display:inline-block;
	border-bottom:1px solid #DDD;
	text-align:center;
}
#login_title h3 {
	padding:0;
	margin:0;
	display:block;

}

#loginTable {
	margin:0 auto;
	width:100%;
	border-top:1px solid #DDD;
	border-right:1px solid #DDD;
	border-spacing: 0px;
	border-collapse:separate;
	margin-top:5px;
	text-align:center;

	
}
td, th, tr {
	border-left:1px solid #DDD;
	border-bottom:1px solid #DDD;
	padding:5px;
}
</style>
<script type="text/javascript">

$(document).ready(function()
{
	
	$('#loginForm').ajaxForm({ 
		dataType:'json',
		beforeSend: block,
		success: function(data)
		{  
			if(data.status == "success")
			{
				$('#block').html(data.msg);				
				setInterval(function(){	$.unblockUI;window.location.href='<?=base_url();?>index.php/admin/home_admin';},1000);
			}
			else
			{
				$('#block').html(data.msg);	
				setInterval(function(){	$.unblockUI;window.location.href='<?=base_url();?>index.php/admin/login_admin';},1000);	 
			}
		}
	});	 
});
function to_foreground()
{
	document.location.href='<?=base_url();?>index.php';	
}
function block()
{
	 $.blockUI({ 
		message:$('#block'),
	    css: { 
		border: 'none', 
		padding: '15px', 
		backgroundColor: '#000', 
		'-webkit-border-radius': '10px', 
		'-moz-border-radius': '10px', 
		'-ms-boder-radius': '10px', 
		'boder-radius':'10px', 	
		opacity: .5, 
		color: '#fff' 
	} }); 
}
</script>
<body>
<div class="header">
  <div class="banner"> </div>
  <div class="menu"> </div>
</div>
<div class="login_main">
<div id="main_div">
  <div id="block" style="display:none;z-index:1000">登入中...</div>
  <div id="login_content">
  <?=form_open_multipart('admin/login_admin/login_submit',array("id"=>"loginForm")); 
  ?>
  <div id="login_title"><h3>軍訓室管理平台<br /><span style="color:#007AFF">管理員登入</span></h3></div>
  <table id="loginTable" >
    <tr>
      <th width="20%">帳號: </th>
      <td><input type="text" class="admin" name="member_account" /></td>
    </tr>
    <tr>
      <th width="20%">密碼: </th>
      <td><input type="password" class="admin" name="member_password" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" class="btn" value="登入" />
        <input type="button" class="btn" onclick="to_foreground()" value="前台" /></td>
    </tr>
  </table>
  </form>
  </div>
</div>
</div>