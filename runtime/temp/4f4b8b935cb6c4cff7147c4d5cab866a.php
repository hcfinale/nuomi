<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"E:\WWW\nuomi\public/../application/index\view\test\index.html";i:1532499813;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<LINK rel="Bookmark" href="/favicon.ico" >
	<LINK rel="Shortcut Icon" href="/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/index/css/hui.css" />
	<title>o2o平台</title>
	<meta name="keywords" content="tp5打造o2o平台系统">
	<meta name="description" content="o2o平台">
</head>
<body>
<!-- 主题内容开始 -->
<header class="hui-header">
	<div class="hui-back"></div>
	<h1>Agax返回数据</h1>
</header>
<div class="hui-wrap">
<p class="c-danger">AjAx请求后台数据</p>
	<input id="hc-ajax" class="btn btn-success radius" type="button" value="AjAx请求">
</div>
<!-- 主题内容结束 -->
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/index/js/hui.js"></script>
<script>
$(function(){
	hui('#hc-ajax').click(function(){
		hui.get(
		    '<?php echo url("test/massage"); ?>',
		    function(msg){
		        console.log(msg);
		        hui.upToast(msg);
		    },
		    function(e){
		        hui.iconToast('读取消息失败', 'warn');
		    }
		);
		// hui.toast('ok');
	});
});
</script>
</body>
</html>