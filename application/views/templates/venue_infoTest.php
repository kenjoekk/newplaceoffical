
<head>
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      max-width: 750px;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
    }
    .gallery-top {
      height: 80%;
      max-width: 750px;
    }
    .gallery-thumbs {
      height: 120px;
      box-sizing: border-box;
      padding: 10px 0 5px 0;

    }
    .gallery-thumbs .swiper-slide {
      height: 100%;
      /* opacity: 0.4; */
    }
    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }
    .bannerBackgroundColor{
        background-color:#aa942f;
        height:500px;
        width:1000px;
        position:absolute;
        left:19%;
        /* right:390px; */
        z-index:1;
    }
    @media (max-width: 500px) { 
        .infoStyle{
            color:black!important;
            background-color:#ece9df;
            
        }
        .textIconStyleB{
            background-color:#967d00!important;
            padding-left:30px;
            border-radius:16px!important;

        }
        .infoTitleEn{
            display:none;
        }
         .infoTitleCh{
            color:#574800!important;
            text-align:center;
            margin-top:30px;
            margin-bottom:25px;
            font-weight:bold;
            font-size:18px;
        }
        .infoDiv{
        margin-top:0.25rem!important;
        }
        .bannerBackgroundColor{
        display:none;
        }
     }
     @media(max-width: 1200px){
        .infoStyle{
            color:black!important;
            background-color:#ece9df;
        }
     }

    .test{
        z-index:2;
        max-width:750px;
        /* margin-top:-24px; */
    }
    .infoStyle{
        color:white;
    }
    .infoTitleEn{
        color:white;
    }
    .infoTitleCh{
        color:white;
    }
    .textIconStyleA{
        background-color:#574800;
        padding: 4px 15px 4px 15px ;
        border-radius: 6px;
        color:white!important;
    }
    .textIconStyleB{
        background-color:#574800;
        padding: 4px 40px 4px 40px ;
        border-radius: 6px;
        color:white!important;
        
    }
    .infoDiv{
        margin-top:3.5rem;
    }

  </style>
</head>
<body>
    <div class="container">
          <div class="bannerBackgroundColor"></div>
        <div class="row">
          <div class="test mt-5 col-xl-8 col-lg-12">
            <div style="background-color:#fff" >
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper" style="height:450px">
                        <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue1.png')?>)"></div>
                        <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue2.png')?>)"></div>
                        <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue3.png')?>)"></div>
                        <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue4.png')?>)"></div>
                        <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue5.png')?>)"></div>
                    </div>
                        <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper" >
                        <div class="swiper-slide" style="background-image:url(<?php echo base_url('assets/images/venue/venue1.png')?>)"></div>
                        <div class="swiper-slide" style="background-image:url(<?php echo base_url('assets/images/venue/venue2.png')?>)"></div>
                        <div class="swiper-slide" style="background-image:url(<?php echo base_url('assets/images/venue/venue3.png')?>)"></div>
                        <div class="swiper-slide" style="background-image:url(<?php echo base_url('assets/images/venue/venue4.png')?>)"></div>
                        <div class="swiper-slide" style="background-image:url(<?php echo base_url('assets/images/venue/venue5.png')?>)"></div>
                    </div>
                </div>    
            </div>
          </div>
          <div class="test col-xl-4 infoStyle infoDiv">
              <p class="mt-3 infoTitleEn"><span> CAESAR</span></p>
              <p class="infoTitleCh"><span> 凯萨厅 </span></p>  
              <p><span class="textIconStyleA"> 优惠</span><span class="pl-2">官网预约探店即送钻石</span></p>  
              <p><span> 婚宴价格：5999元起/桌</span></p>  
              <p><span> 容纳桌数：10-24桌</span></p>  
              <p><span> 场馆优势：Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam corporis ipsa aperiam, rem nemo doloribus? Ducimus, veritatis repudiandae fugit quibusdam id odio quo similique rem inventore maxime laudantium rerum quasi.</span></p> 
              <div class="pt-3 pb-5 row "><div class="col-6 d-flex justify-content-center"><span class="textIconStyleB">查看档期</span></div><div class="col-6 d-flex justify-content-center"><span class="textIconStyleB">预约看馆</span></div></div>  
          </div>
        </div>
        <!-- 场馆介绍 -->
        
    </div>


 

    

  <!-- Initialize Swiper -->
  
  <script>
    $(function(){
        var w = $(window).width();
        var h = $(window).height();
    var slidesNum = 4;
    if(w<500){
        slidesNum = 2;  
    } 
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: slidesNum,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop:true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });


    });

    
  </script>
</body>
