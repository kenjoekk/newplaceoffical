﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>新天地-后台登入</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url('assets/images/icon.jpg');?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/material-icons.css') ?>">

   
    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/console/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets/console/plugins/node-waves/waves.css') ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/console/plugins/animate-css/animate.css') ?>" rel="stylesheet" />

    

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/console/css/style.css') ?>" rel="stylesheet">

    
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">鱼天地菜单-后台登入</a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?=base_url('consoleApi/login')?>">
                    <div class="msg">请输入帐号密码</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="memberId" placeholder="请输入帐号" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="memberPassword" placeholder="请输入密码" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <!-- <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label> -->
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">登录</button>
                        </div>
                        <span style="color:red"><?php if(get_session_errMsg()!=''){echo get_session_errMsg();}?></span>
                    </div>
                    <!-- <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('assets/console/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/console/plugins/bootstrap/js/bootstrap.js')?>"></script>

    

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/console/plugins/node-waves/waves.js')?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url('assets/console/plugins/jquery-validation/jquery.validate.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/console/js/admin.js')?>"></script>
    <script src="<?php echo base_url('assets/console/js/pages/examples/sign-in.js')?>"></script>
    

</body>

</html>