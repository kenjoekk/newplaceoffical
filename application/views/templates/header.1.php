<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/logo.ico')?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/swiper.min.css')?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animation.css')?>">

    <title>UWEAR</title>
  
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css')?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js 讓 IE8 支援 HTML5 元素與媒體查詢 -->
    <!-- 警告：Respond.js 無法在 file:// 協定下運作 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="<?php echo base_url('assets/css/carousel.css')?>" rel="stylesheet">
    <style type="text/css">
      #gotop {
          display: none;
          position: fixed;
          right: 20px;
          bottom: 20px;    
          padding: 10px 15px;    
          /*font-size: 20px;*/
          background: #777;
          color: white;
          cursor: pointer;
      }
    </style>
    <script type="text/javascript">
    


    function checkValue(){

    // var s_companyName=document.getElementById('s_companyName');
    var g_name=document.getElementById('g_name');
    var g_email=document.getElementById('g_email');
    var g_msg=document.getElementById('g_msg');
    


        if(document.formName.g_name.value==''){
            
            return false;
            
        }else if(document.formName.g_email.value==''){
            
            return false;
        }else if (document.formName.g_msg.value=='') {
            
            return false;
        }
        ;   
        ;

    }


</script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">UWEAR</a>
  <!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo/logo_w_t.png') ?>" ></img></a> -->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" id="homeId" href="#" value="1">首页 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" id="serviceId" href="#" >服务</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" id="customerId" href="#">客户案例</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" id="newsId" href="#">最新消息</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" id="aboutId" href="#">关于我们</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" id="contactusId" href="#">联络我们</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="langTr()" style="text-align:right;" href="#">中/英</a>
      </li> 
    </ul>
    
  </div>
</nav>
<!-- ____________________________________________________________________________________________________ -->

    <!-- NAVBAR -->
    <div class="navbar-wrapper">
    <div class="container">
    <nav class="navbar navbar-inverse navbar-static-top" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo/logo_w_t.png') ?>" style="margin-top:-15px;"></img></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar" style="width:1110px;">
      <ul class="nav navbar-nav ">
        <li class="active">
        <a class="home" id="homeId" value="1">首页 <span class="sr-only">(current)</span></a>
        </li>
        <li><a class="service" id="serviceId" value="1">服务</a></li>
        <li><a class="customer" id="customerId">客户案例</a></li>
        <li><a class="news" id="newsId">最新消息</a></li>
        <li><a class="about" id="aboutId">关于我们</a></li>
        <li><a class="contactus" id="contactusId">联络我们</a></li>
        <li><a onclick="langTr()" style="text-align:right;">中/英</a></li>
        <!-- <li><div class="contactus">CONTACT US</div></li> -->
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
 
    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
     <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  </head>