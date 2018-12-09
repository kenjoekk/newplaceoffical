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
        width:1040px;
        position:absolute;
        left:25%;
        /* right:390px; */
        z-index:1;
    }
    @media (max-width: 1200px) { 
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
            margin-top:0.5rem;
            margin-bottom:0.5rem;
            font-weight:bold;
            font-size:16px;
        }
        .infoDiv{
        margin-top:0.25rem!important;
        }
        .bannerBackgroundColor{
        display:none;
        }
     }
     @media(width:1920px)and(width:1480px){
         .bannerBackgroundColor{
            height:500px;
            width:1040px;
         }
     }
     @media(max-width:1480px){
         .bannerBackgroundColor{
            height:500px;
            width:1000px;
            left:19%;
         }
     }
     @media(max-width: 1200px){
        .infoStyle{
            color:black!important;
            background-color:#ece9df;
        }
        .bannerBackgroundColor{
            display:none;
        }
     }

    .level{
        z-index:2;
        max-width:750px;
        /* margin-top:-24px; */
    }
    .infoStyle{
        color:white;
    }
    .infoTitleEn{
        margin-bottom:0px;
        color:white;
        font-size:24px;
    }
    .infoTitleCh{
        color:white;
        font-size:20px;
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
    .titleName{
        font-size:28px;
        font-weight:bold;
        color:#4d4000;
        }
    .swiper-button-next{
        background-image:url('../assets/images/homePage/next.png');
        width:35px;
        height:35px;
        background-size: 100%;
    }
    .swiper-button-prev{
      background-image:url('../assets/images/homePage/prev.png');
      width:35px;
      height:35px;
      background-size: 100%;
    }    
    @media(max-width:768px){
        .titleName{
            font-size:16px;
            font-weight:bold;
        }
    }

  </style>
<body>
    <div class="container pt-xl-5">
          <div class="bannerBackgroundColor"></div>
        <div class="row">
          <div class="level mt-5 col-xl-8 col-lg-12 p-0">
            <div style="background-color:#fff" >
                <div class="swiper-container gallery-top ">
                    <div >
                        <div class="swiper-wrapper" style="height:450px">
                            <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue1.png')?>)"></div>
                            <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue2.png')?>)"></div>
                            <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue3.png')?>)"></div>
                            <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue4.png')?>)"></div>
                            <div class="swiper-slide" style="height:100%;background-image:url(<?php echo base_url('assets/images/venue/venue5.png')?>)"></div>
                        </div>
                    </div>
                   
                        <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
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
          <div class="level col-xl-4 infoStyle infoDiv p-4">
              <p class="infoTitleEn"><span> CAESAR</span></p>
              <p class="infoTitleCh"><span> 凯萨厅 </span></p>  
              <p class="pt-2 pb-2 "><span class="textIconStyleA"> 优惠</span><span class="pl-2 pl-3" style="font-size:16px;">官网预约探店即送钻石</span></p>  
              <p class="pb-2"><span style="font-size:15px;"> 婚宴价格：</span> <span>5999元起/桌</span></p>  
              <p class="pb-2"><span style="font-size:15px;"> 容纳桌数：</span> <span>10-24桌</span></p>  
              <p><span style="font-size:15px;"> 场馆优势：</span> <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam corporis ipsa aperiam, rem nemo doloribus? Ducimus, veritatis repudiandae fugit quibusdam id odio quo similique rem inventore maxime laudantium rerum quasi.</span></p> 
              <div class="pt-3 pb-2 row "><div class="col-6 d-flex justify-content-center"><span class="textIconStyleB">立即预约</span></div><div class="col-6 d-flex justify-content-center"><span class="textIconStyleB">查看档期</span></div></div>  
          </div>
        </div>
        <!-- 场馆介绍 -->
        <div class="row d-flex justify-content-center pt-xl-3 pt-3"><span class="titleName">场馆详情</span></div>
        <div class="row d-flex justify-content-center pt-2 pb-xl-5 pb-3"><img id="spLine" src="<?php echo base_url('assets/images/venue/1.png');?>"></div>
    </div>

    

  <!-- Initialize Swiper -->
  
  <script>

    $(function(){
        var w = $(window).width();
        var h = $(window).height();
    var slidesNum = 4;
    if(w<500){
        slidesNum = 2; 
        $('#spLine').attr('src','<?php echo base_url('assets/images/venue/2.png');?>');
         
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
