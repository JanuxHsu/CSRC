<?php
$now = time();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>
<!--[if lt IE 8]> 
<meta content='0; url=<?=base_url();?>index.php/browser' http-equiv='refresh'>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="<?=base_url();?>asset/js/jquery-1.7.2.js" type="text/javascript"></script>
<script>
var base_url = '<?php echo base_url();?>';
function logout_confirm()
{
	if(confirm('確定要登出管理後台?'))
	{
		document.location.href=base_url + 'index.php/admin/login_admin/logout_submit/';	
	}
	else
	{
		return false;
	}
}
</script>
<script src="<?=base_url();?>asset/js/admin.js" type="text/javascript"></script>
<link href="<?=base_url();?>asset/css/admin_stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?=base_url();?>asset/bootstrap/dist/css/bootstrap.min.css"/>
<script src="<?=base_url();?>asset/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
<div class="header">
  <div id="menu">
    <ul id="menu_left">
      <li><?php echo anchor('admin/home_admin' , '首頁'); ?></li>
      <li><?php echo anchor('home' , '前台',array('target'=>'_blank')); ?></li>
    </ul>
    <ul id="menu_right">
      <li><a href="#" onclick="logout_confirm()" id="logout">登出</a></li>
    </ul>
  </div>
  <div id="nav_bar">
    <ul>
      <li><?php echo anchor('admin/news_admin' , '管理最新消息'); ?></li>
      <li><?php echo anchor('admin/member_admin' , '管理組織成員'); ?></li>
    </ul>
  </div>
  <div id="bottom_line"></div>
</div>
