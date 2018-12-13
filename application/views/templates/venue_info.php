  
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
      /* height: 120px; */
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
        margin:auto;
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
        font-size: 1.25rem;
        font-weight:bold;
        color:#4d4000;
        }
    .swiper-button-next{
        background-image:url('../../assets/images/homePage/next.png');
        width:35px;
        height:35px;
        background-size: 100%;
    }
    .swiper-button-prev{
      background-image:url('../../assets/images/homePage/prev.png');
      width:35px;
      height:35px;
      background-size: 100%;
    }    
    
    .type-desc{
        display:flex;
    }
    .img-block{
        background:#dbdbdb;
        margin:5px;
        flex:1;
        min-height:200px;
    }
    .img-border-column .img-block{
        min-height:95px;
        flex:unset;
        display: flex;
        justify-content: center;
        align-items: center;
        position:relative;
    }

    .img-block span{
        font-weight:900;
        font-size:20px;
        color:gray;
        width:100%;
        height:100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img-block img{
        width:100%;
    }

    .img-block input{
        display:none;
    }

    .img-border-column{
        flex:1;
        display: flex;
        flex-direction: column;
    }
    .btn{
        transition:transform .1s ease-in;
        background:#5A4D18;
        border-color:#5A4D18;
        color:white !important;
    }
    .btn:visited{
        border-color:unset;
    }
    .btn:hover{
        background:#756935;
        border-color:#756935;
        transform:scale(1.3);
    }
    .btn:active{
        border-color:unset;
        background:#5A4D18;
    }
    .datepicker{
        box-shadow: 0px 0px 3px 1px RGBA(143, 119, 83, 0.8);
        border-radius: 0px;
    }
    .datepicker table tr td.today{
        border-radius:0px;
        background-image:linear-gradient(to bottom,#eacfa7,#efd0a3)
    }
    .datepicker table tr td.today:hover{
        background-image:linear-gradient(to bottom,#eacfa7,#efd0a3)
    }
    .datepicker table tr td.active{
        border-radius:0px;
        background-image:linear-gradient(to bottom,#927753,#927753);
    }
    .datepicker table tr td.active:hover{
        background-image:linear-gradient(to bottom,#927753,#927753);
    }
    .modal-header{
        border-bottom:unset;
    }
    .modal-footer{
        border-top:unset;
        justify-content:center;
    }
    .table-condensed{
        width:100%;
    }
    .w-220{
        width:220px;
    }
    .modal-dialog{
        width:280px;
        margin:40px auto;
    }

    @media(max-width:768px){
        .titleName{
            font-size:16px;
            font-weight:bold;
        }
    }
    @media(max-width:992px){
        .titleName{
            font-size:16px;
            font-weight:bold;
        }
        .detailStyle{
            background-color:#ece9df;
        }
    }
    
  </style>
<body>
    <div class="container pt-xl-5">
          <div class="bannerBackgroundColor"></div>
        <div class="row">
          <div class="level mt-5 col-xl-8 col-lg-12 p-0">
            <div style="background-color:#fff" >
                <div class="swiper-container gallery-top">
                    
                        <div class="swiper-wrapper">
                            <?php foreach ($venue['img_url'] as $key => $value) { ?>
                                <div class="swiper-slide">
                                    <img src="<?=$value?>" alt="">
                                </div>
                            <?php } ?>
                        </div>
                    
                        <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper" >
                        <?php foreach ($venue['img_url'] as $key => $value) { ?>
                            <div class="swiper-slide">
                                <img src="<?=$value?>" alt="" data-img="<?=$value?>">
                            </div>    
                        <?php } ?>
                    </div>
                </div>    
            </div>
          </div>
          <div class="level col-xl-4 infoStyle infoDiv p-4">
              <p class="infoTitleEn"><span> <?=$venue['english_name']?></span></p>
              <p class="infoTitleCh"><span> <?=$venue['chiness_name']?> </span></p>  
              <?php if($venue['offer']!=NULL && $venue['offer']!=''){ ?>
                <p class="pt-2 pb-2 "><span class="textIconStyleA"> 优惠</span><span class="pl-2 pl-3" style="font-size:16px;"><?=$venue['offer']?></span></p>  
              <?php } ?>
              <p class="pb-2"><span style="font-size:15px;"> 婚宴价格：</span> <span><?=$venue['money']?>元起/桌</span></p>  
              <p class="pb-2"><span style="font-size:15px;"> 容纳桌数：</span> <span><?=$venue['table_num']?>桌</span></p>  
              <p><span style="font-size:15px;"> 场馆优势：</span> <span><?=$venue['detail']?></span></p> 
              <div class="pt-3 pb-2 row "><div class="col-6 d-flex justify-content-center"><span class="btn textIconStyleB reservation-btn">立即预约</span></div><div class="col-6 d-flex justify-content-center"><span class="btn textIconStyleB order-btn order-submit-btn">查看档期</span></div></div>  
          </div>
        </div>
        <!-- 场馆介绍 -->
        <div class="row d-flex justify-content-center pt-xl-3 pt-3 detailStyle"><span class="titleName">场馆详情</span></div>
        <div class="text-center detailStyle row justify-content-center">
            <div style="width:90%"><img id="spLine" src="<?php echo base_url('assets/images/venue/1.png');?>"></div>
        </div>
        <div class="row image-detail detailStyle mb-5">
            <?php foreach ($venue['venue_img'] as $key => $value) {
                switch ($value['type']) {
                    case '1': ?>
                        <div class="col-12">
                            <div class="type-desc">
                            <div class="img-block">
                                <img src="<?=$value['path'][0]?>" alt="">
                            </div>
                            <div class="img-border-column">
                                <div class="img-block">
                                    <img src="<?=$value['path'][1]?>" alt="">
                                </div>
                                <div class="img-block">
                                    <img src="<?=$value['path'][2]?>" alt="">
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php break;
                    case '2': ?>
                        <div class="col-12">
                            <div class="type-desc">
                                <div class="img-block">
                                    <img src="<?=$value['path'][0]?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php break;
                    case '3': ?>
                        <div class="col-12">
                            <div class="type-desc">
                                <div class="img-block">
                                    <img src="<?=$value['path'][0]?>" alt="">
                                </div>
                                <div class="img-block">
                                    <img src="<?=$value['path'][1]?>" alt="">
                                </div>
                                <div class="img-block">
                                    <img src="<?=$value['path'][2]?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php break;
                }
            }?> 
        </div>
    </div>


    

  
  
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
            // freeMode: true,
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

        // $('.swiper-slide').on('click',function(){
        //     var img = $(this).data('img');
        //     $('.main-image').attr('src',img);
        // });

        

    });

    
  </script>
</body>
