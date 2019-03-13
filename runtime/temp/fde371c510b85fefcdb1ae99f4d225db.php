<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"E:\WWW\nuomi./application/admin\view\index\sms.html";i:1532068439;s:55:"E:\WWW\nuomi./application/admin\view\public\header.html";i:1527153800;s:55:"E:\WWW\nuomi./application/admin\view\public\footer.html";i:1527219731;}*/ ?>
<!--包含头部文件-->
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
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/layer/2.4/skin/layer.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/Hui-iconfont/1.0.8/iconfont.css" />
<!--<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/icheck/icheck.css" />-->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>o2o平台</title>
<meta name="keywords" content="tp5打造o2o平台系统">
<meta name="description" content="o2o平台">
</head>
<body>
<style>
    #form-admin-add{
        width: 60%;
        margin: 0 auto;
    }
</style>
<form class="form form-horizontal" id="form-admin-add" action="<?php echo url('index/sendsms'); ?>" method="post">
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>发件人：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="" placeholder="" id="adminName" name="send_name">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="" placeholder="" id="phone" name="send_phone">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>验证码：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input id="yzm" value="" name="yzm" type="text" class="form-control required x164 in" placeholder="请输入接收的验证码">
            <input id="btnSendCode" class="btn btn-default form-control" type="button" value="发送验证码">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">备注：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <textarea name="send_remark" cols="" rows="" class="textarea" placeholder="说点什么...100个字符以内" dragonfly="true" onkeyup="$.Huitextarealength(this,100)"></textarea>
            <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
        </div>
    </div>
    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
        </div>
    </div>
</form>
<!--包含头部文件-->
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/image.js"></script>
<script>
window.onload = function(){
    var InterValObj; //timer变量，控制时间
    var count = 120; //间隔函数，1秒执行
    var curCount;//当前剩余秒数
    var code = ""; //验证码
    var codeLength = 6;//验证码长度

    $('#btnSendCode').click(function sendMessage(){
        curCount = count;
        var phone=$("#phone").val();//手机号码
        var xmname=$("#adminName").val();//手机号码
        if(phone.length == 11){
            //产生验证码
            for (var i = 0; i < codeLength; i++) {
                code += parseInt(Math.random() * 9).toString();
            }
            //设置button效果，开始计时
            $("#btnSendCode").attr("disabled", "true");
            $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
            //向后台发送处理数据
            $.ajax({
                type: "post", //用POST方式传输
                dataType: "text", //数据格式:JSON
                url: "<?php echo url('admin/index/smsmassage'); ?>", //目标地址
                data: "xmname=" + xmname + "&phone=" + phone + "&code=" + code + "&sysname=" + "南京万和IT教育",
                error: function (XMLHttpRequest, textStatus, errorThrown) { },
                success: function (msg){ }
            });
        }else{
            alert("手机号码填写错误！");
        }
    });    
    //timer处理函数
    function SetRemainTime() {
        if (curCount == 0) {
            window.clearInterval(InterValObj);//停止计时器
            $("#btnSendCode").removeAttr("disabled");//启用按钮
            $("#btnSendCode").val("重新发送验证码");
            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效
        }
        else {
            curCount--;
            $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
        }
    }
}
</script>
</body>
</html>