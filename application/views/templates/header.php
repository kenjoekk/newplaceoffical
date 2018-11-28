<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/logo.ico')?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/swiper/swiper.min.css')?>" >
    
    <!-- Swiper JS套件 -->
        <script src="<?php echo base_url('assets/js/swiper/swiper.min.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animation.css')?>">
    <!-- bootstrap CSS  -->    
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css')?>" rel="stylesheet">

    <!-- tachyons CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tachyons/tachyons.min.css')?>"/>

    <link href="<?echo base_url('assets/open-iconic-master/font/css/open-iconic-bootstrap.css')?>" rel="stylesheet">





    <link href="<?php echo base_url('assets/css/carousel.css')?>" rel="stylesheet">

    <!-- Swiper JS -->

    <link href="<?php echo base_url('assets/css/swiper/swiper.min.css')?>" rel="stylesheet">
    
    <title>UWEAR</title>
  
    

    <!-- HTML5 shim and Respond.js 讓 IE8 支援 HTML5 元素與媒體查詢 -->
    <!-- 警告：Respond.js 無法在 file:// 協定下運作 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


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
<style>
  li{
    width:120px;
    text-align:center;
    }
  h1{
      margin-top:-10px;
      margin-bottom:20px;
    }
  .navbar-trans{
    background:transparent!important;
  }
  
   a.navbar-brand{
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #fff !important;
  font-size: 2rem;
  font-weight: bold;
  margin-top: 0; }     

  .headerColor{
    color:#000 !important;

  }

</style>
<section>
  <div class="container-fluid shadow-5" style="background-color:white;">
    <div class="container" style="<?php if(isset($homeHeaderBackground)&&$homeHeaderBackground){echo 'position:absolute;';}else{echo 'position:unset;';}?>">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-trans" >
        <a class="navbar-brand" href="#"><span class="headerColor">new place</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link headerColor" id="homeId" href="#" lang='1' ><?php echo $lang['home'];?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" >
              <a class="nav-link headerColor" id="banquetId" href="#" ><?php echo $lang['banquet'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="showcaseId" href="#"><?php echo $lang['showcase'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="packageId" href="#"><?php echo $lang['package'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="serviceId" href="#"><?php echo $lang['service'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="eventsId" href="#"><?php echo $lang['events'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="resortId" href="#"><?php echo $lang['resort'];?></a>
            </li>
            
          </ul>
          <div style="color:white">
              <a class="changeLang headerColor" stlye="text-align:right;">中/英</a>
              <input type="hidden" name="changeInputId" id="changeInputId" value="<?php echo $lang['langType']?>">
          </div>
          
        </div>
      </nav>
    </div>
  </div>
 
</section>

    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
     <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
   <script type="text/javascript">



      $('.changeLang').on('click',function(){

        var temp=document.getElementById("changeInputId").value;
        
        if(temp == 'english'){
          location.href='<?php echo base_url('pages/home');?>'+'?lang=cn';
        }else if(temp == 'cn'){
          location.href='<?php echo base_url('pages/home');?>'+'?lang=english';
        }

      }) 
    
    </script>

    <!-- NAVBAR -->

    
   

  </head>