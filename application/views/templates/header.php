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
  body {
      background: #fff;
      font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 16px;
      color:#000;
      margin: 0;
      padding: 0;
  }
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
    color:#fff !important;

  }
  .nav-item{
    position:relative;
  }
  .nav-item:after{
    content:'';
    width:1px;
    background:white;
    height: 30px;
    position: absolute;
    top: 13px;
    right: 0px;
    /* border-right: 1px solid white; */
  }
  .nav-item:nth-last-child(1):after{
    height: 0px;
  }
  .nav-link p{
    margin-bottom:0rem;
    font-size:16px;
  }
  .nav-link p:nth-child(2){
    font-size:12px;
  }
  .navbar-brand{
    margin-right:0;
    width:80px;
  }
  .absolute-nav{
    position:absolute;
  }
  .normal-nav{
    position:unset;
    background:white;
    box-shadow:0px 1px 10px 0px rgba(0,0,0,0.3);
  }
  .normal-nav p,{
    color:black !important;
  }
  .normal-nav .nav-item:after{
    background:black;
  }
  .normal-nav .nav-link p:nth-child(2){
    font-size:12px;
    color:#887200 !important;
  }
  .normal-nav .navbar-toggler-icon{
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
  }
  .normal-nav .navbar-dark .navbar-toggler{
    border-color:rgba(0,0,0,0.5);
  }
  .normal-nav .headerColor{
    color:#000 !important;

  }
  @media(max-width:991px){
    .navbar-brand{
      margin-right:0;
      width:50px;
    } 
  }
  @media(max-width:768px){
    .navbar-brand{
      width:50%;
      position:relative;
      right:-24%;
    }
    .navbar{
      padding:0px;
    }
    .normal-nav,.absolute-nav{
      background:#312B0C;
    }
    .absolute-nav .navbar-toggler-icon,.normal-nav .navbar-toggler-icon{
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }
    .absolute-nav .navbar-dark .navbar-toggler,.normal-nav .navbar-dark .navbar-toggler{
      border-color:#312B0C;
      padding:1rem 0px;
    }
    .nav-item{
      width:100%;
    }
    .nav-item:after{
      width:0px;
    }
    .normal-nav .headerColor{
      color:#fff !important;
    }
    .normal-nav p,{
      color:white !important;
    }
    .normal-nav .nav-item:after{
      background:black;
    }
    .normal-nav .nav-link p:nth-child(2){
      font-size:12px;
      color:white !important;
    }
  }

</style>
<section>
  <div class="container-fluid <?php if(isset($homeHeaderBackground)&&$homeHeaderBackground){echo 'absolute-nav';}else{echo 'normal-nav';}?>">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-trans">
        <a class="navbar-brand" href="<?=base_url('pages/home');?>"><img src="<?php if(isset($homeHeaderBackground)&&$homeHeaderBackground){echo base_url('assets/images/homePage/icon.png');}else{echo base_url('assets/images/homePage/icon-black.png');}?>" alt="" style="display:none"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link headerColor" id="homeId" href="<?=base_url('pages/home');?>" lang='1' >
                <p><?php echo $lang['home'];?></p>
                <p>INDEX</p>
              </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link headerColor" id="banquetId" href="<?=base_url('pages/venue_list');?>" >
                <p><?php echo $lang['banquet'];?></p>
                <p>BANQUET</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="showcaseId" href="<?=base_url('pages/film');?>">
                <p><?php echo $lang['showcase'];?></p>
                <p>SHOWCASE</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="packageId" href="<?=base_url('pages/wedding_feast');?>">
                <p><?php echo $lang['package'];?></p>
                <p>PACKAGE</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="serviceId" href="<?=base_url('pages/banquet_service');?>">
                <p><?php echo $lang['service'];?></p>
                <p>SERVICE</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="eventsId" href="<?=base_url('pages/events');?>">
                <p><?php echo $lang['events'];?></p>
                <p>EVENTS</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link headerColor" id="resortId" href="<?=base_url('pages/reservation');?>">
                <p><?php echo $lang['resort'];?></p>
                <p>PRESORT</p>
              </a>
            </li>
            
          </ul>
          
        </div>
      </nav>
    </div>
  </div>
 
</section>

    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
    <script href="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js')?>" rel="stylesheet"> </script>
        
        <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js')?>"></script>

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
    <script>
      $(function(){
          var w = $(window).width();
          var h = $(window).height();
        if(w<768){
          $('.navbar-brand').find('img').attr('src','<?php echo base_url('assets/images/footer/footerLogo.png');?>');
        }
        $('.navbar-brand').find('img').css('display','block');
                  
      })
    </script>

    
   

  </head>