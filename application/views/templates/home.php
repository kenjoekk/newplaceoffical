
     <style>
     li{
      width:120px;
      text-align:center;
     }
     h1{
       margin-top:-10px;
       margin-bottom:20px;
     }
     /* <!-- swiper styles --> */
    a:hover{
      text-decoration: none;
    }
    html, body {
      position: relative;
      height: 100%;
    }
    
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;

      
    }
    .brandIntro {
    }
    @media(max-width:767px){
      .brandIntro{
        width:100%;
      }
    }
    
    .homeMidPic{
      padding:10%;
      color:white;
      background-size:cover;
      background-attachment:fixed;
    }
    .homeMidPic h3{
      font-size:20px;  
    }
    /* h3{
      font-size:x-large;
      font-weight:lighter;
      font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;

    } */
    
    .reservationPic{
      width:100%;
    }
    .carousel{
      margin-bottom:0;
      height:unset;
    }
  /* ----------------------------------------------------- */
  .title-font-style{
    color:#5A4D18 !important;
  }
  .content-color{
    color:#6C6C6C !important;
  }
    .title-with-top-img{
      padding-top:50px;
      background-repeat: no-repeat;
      background-position-x: center;
      margin-bottom:3rem;
      font-size:1.25rem;
      background-size: 250px;
    }
    .pt-6{
      padding-top: 6rem!important;
    }
    .my-hr{
      margin:6rem 0;
      border-top: 1px solid #C5C4C4;
    }
    .detail{
      font-size:1.00rem;
      line-height: 48px;
    }
    .title-b-line{
      height:2px;
      background:#5A4D18;
      width:100px;
      margin-bottom: 5px;
    }
    .card-img-top-block{
      position:relative;
      overflow:hidden;
    }
    .card-img-top-block:hover .hover-img{
      display:flex;
    }
    .card-img-top-block .hover-img{
      position: absolute;
      top: 0px;
      height: 100%;
      width: 100%;
      display:none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: rgba(0,0,0,0.7);
    }
    
    .card-img-top-block .hover-img .btn-go-detail{
      border: 1px solid white;
      color: white !important;
      padding: 3px 30px;
    }
    .card-img-top-block .hover-img .btn-go-detail:hover{
      border: 1px solid white;
      color: rgba(0,0,0,0.7) !important;
      background:white;
    }
    .card-img-top-block .card-img-top{
      transition:transform .3s ease-in;
    }
    .card-img-top-block:hover .card-img-top{
      transform:scale(1.6);
    }
    .btn-order{
      border:2px solid #5A4D18;
      color:#5A4D18 !important;
      padding:3px 30px;
    }
    .card{
      box-shadow:0px 3px 3px 0px rgba(0,0,0,0.2);
    }
    .btn-more-div{
      background-repeat: no-repeat;
      background-position: center;
    }
    .inline-form{
      display: flex;
      flex-direction: row;
      margin-bottom: 25px;
    }
    .inline-form label{
      font-size: 16px;
      position: relative;
      bottom: -5px;
      margin-bottom:0;
    }
    .inline-form input{
      border: 0px;
      border-bottom: 1px solid #989898;
      margin-left: 10px;
      flex: 1;
    } 
    .form-btn-order{
      background:#554813;
      color:white !important;
      width:100%;
      border-radius:5px;
      display:block;
      text-align:center;
      padding:3px;
    }
    .carousel-block{
      padding: 3% 3.6%;
      background-size: 100%;
      background-repeat: no-repeat;
      background-position: center;
    }
    .order-title{
      font-size:20px;
      
    }
    .swiper-button-next,.carousel-control-next-icon{
      background-image:url('../assets/images/homePage/next.png');
      width:35px;
      height:35px;
      background-size: 100%;
    }
    .swiper-button-prev,.carousel-control-prev-icon{
      background-image:url('../assets/images/homePage/prev.png');
      width:35px;
      height:35px;
      background-size: 100%;
    }
    .swiper-title-top{
      position: relative;
      height: 34px;
      border-bottom: 1px solid #BFA536;
      margin-bottom: 20px;
    }
    .swiper-title-top p{
      color:#5A4D18 !important;
      font-size:20px;
      position: absolute;
      border-bottom: 3px solid #BFA536;
      bottom:-18px;
    }
    .swiper-title-bottom{
      position: relative;
      height: 20px;
      border-bottom: 1px solid #BFA536;
      margin-bottom: 50px;
    }
    .swiper-title-bottom p{
      color:#5A4D18 !important;
      font-size:20px;
      position: absolute;
      border-top: 3px solid #BFA536;
      right:0px;
      bottom:-48px;
    }
    .btn-outline-light:hover{
      color:black !important;
    }
    .h_text_info{
        text-align:center;
    }
    .h_center_banner_text_style{
      font-size:16px;font-weight:lighter;
    }
    .h_img_info{
      padding-top:6rem;
    }
    
    @media(max-width:767px){
      .carousel-block{
        padding: 6% 7.2%;
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center;
      }
      .order-card{
        padding-bottom:30px;
      }
      
      .h_text_info{
        text-align:center;
      }
      .detail{
        font-size:0.75rem;
        line-height: 24px;
      }
      .title-font-style{
        font-size:1.25rem;
      }
      .title-with-top-img{
        padding-top:50px;
        background-repeat: no-repeat;
        background-position-x: center;
        margin-bottom:2rem;
        background-position-y: 12px;
      }
      .h_center_banner_text_style{
      font-size:14px;letter-spacing:2px;text-align:left;
      }
      
      .venue-card-btn-block .btn-order{
        border-radius:50px;
        background:#5B4F01;
        color:white !important;
      }
      .h_img_info{
        padding-top:3rem;
      }
      .my-hr{
        margin:3rem 0;
      }
    }

    .swiper-venue{
      position:relative;
      width:100%;
      overflow:hidden;
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
    .venue-card-btn-block{
      display: flex;
      flex-direction: row;
      width: 100%;
      justify-content: space-around;
    }
    
    
</style>
     <body>

      <div id="homeTitlePic" >
        <img id="hImg" src="<?=base_url('assets/images/homePage/home-p-1.png');?>" alt="">
        </div>
      <!-- 手机画面   -->
      <div class="container h_img_info h_t_style1">
        <h3 class="text-center title-with-top-img title-font-style" style="background-image:url('<?=base_url('assets/images/homePage/title-top-img.png');?>')">我們的服務</h3>
        <p class="detail content-color h_text_info">
          采取当今新型婚礼服务模式(一站式婚礼会所)，
        </p>
        <p class="detail content-color h_text_info">提供以下服务：婚宴场地、婚宴饮食、婚庆策划、婚纱摄影、</p>
        <p class="detail content-color h_text_info">微电影制作、喜糖、喜酒等</p>
        <p class="detail content-color h_text_info">我们的特点：省心、省力、高效率、高品质！</p>
        <hr class="my-hr">
      </div>
      <!-- pc画面 -->
      <div class="container h_img_info h_t_style2">
        <h3 class="text-center title-with-top-img title-font-style" style="background-image:url('<?=base_url('assets/images/homePage/title-top-img.png');?>')">我們的服務</h3>
        <p class="detail content-color h_text_info">
          采取当今新型婚礼服务模式(一站式婚礼会所)，提供以下服务：婚宴场地、婚宴饮食、婚庆策划、婚纱摄影、微电影制作、喜糖、喜酒等我们的特点：省心、省力、高效率、高品质！
        </p>
        <hr class="my-hr">
      </div>
   
  
    <div class="container">
      <h3 class="text-center title-with-top-img title-font-style" style="background-image:url('<?=base_url('assets/images/homePage/title-top-img.png');?>')">婚宴場館</h2>
      <div class="row hidden-mobile-f">
        <?php foreach ($venue_list as $key => $value) { ?>
          <div class="col-md-6 col-lg-4 mb-4" >
            <div class="card">
              <div class="card-img-top-block">
                <img class="card-img-top" src="<?php echo $value['img_url'][0]?>" alt="Card image cap">
                <div class="hover-img">
                  <a class="btn-go-detail" href="<?=base_url('pages/venue_info/').$value['id'];?>">查看场馆</a>
                </div>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title title-font-style"><?=$value['chiness_name']?></h5>
                <div class="title-b-line"></div>
                <p class="content-color"><?=$value['sub_title']?></p>
                <div>
                  <a class="btn-order go-order reservation-btn">立即预约</a>
                </div>
              </div>
            </div>
          </div>    
        <?php } ?>
      </div>
      <div class="row show-mobile">
        <div class="col-12" >
          <div class="card">
            <div class="swiper-venue gallery-top">
              <div class="swiper-wrapper">
                  <?php foreach ($venue_list as $key => $value) { ?>
                      <div class="swiper-slide" data-name="<?=$value['chiness_name']?>" data-subname='<?=$value['sub_title']?>'>
                          <img src="<?=$value['img_url'][0]?>" alt="">
                      </div>
                  <?php } ?>
              </div>
              <div class="swiper-button-next venue-swiper-button-next"></div>
              <div class="swiper-button-prev venue-swiper-button-prev"></div>
            </div>
            <div class="card-body d-flex flex-column align-items-center venue-card-body">
                <h5 class="card-title title-font-style"><?=$venue_list[0]['chiness_name']?></h5>
                <div class="title-b-line"></div>
                <p class="content-color"><?=$venue_list[0]['sub_title']?></p>
                <div class="venue-card-btn-block">
                  <a class="btn-order go-order reservation-btn show-mobile">立即预约</a>
                  <a class="btn-order" href="<?=base_url('pages/venue_list')?>">更多場館</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div style="padding-top:50px" class="hidden-mobile">
      <div class="text-center btn-more-div" style="background-image:url('<?php echo base_url('assets/images/homePage/more-bg.png')?>')">
        <a class="title-font-style" style="font-size:1.75rem;font-weight:500" href="<?=base_url('pages/venue_list');?>">更多场馆</a>
      </div>
    </div>  
    
    <hr class="featurette-divider">

    <div class="homeMidPic" style="text-align:center;background-image:url('<?php echo base_url('assets/images/homePage/home-p-2.png')?>')">
      <!-- 手机画面 -->
      <div class="h_t_style1">
        <div class="row justify-content-center flex-column align-items-center p-3">
          <span class="pb-3"><h3 style="letter-spacing: 5px;">魔都最好吃的婚宴料理</h3></span>
          <div class="d-flex flex-column">
            <span class="pt-4 h_center_banner_text_style" >从食材的采购、挑选、清洗到颜色的搭</span>
            <span class="pt-2 h_center_banner_text_style">配、烹饪的火侯花式的摆盘.....特聘顶级</span>
            <span class="pt-2 h_center_banner_text_style">厨师严格把控每场料理的一分一毫，给予</span>
            <span class="pt-2 h_center_banner_text_style">参加婚宴的宾客最极致的味蕾体验！最幸</span>
            <span class="pt-2 h_center_banner_text_style">福的时刻我们用美味与之相伴</span>
          </div>
          <div>
            <a class="btn btn-outline-light mt-5" href="<?=base_url('pages/wedding_feast');?>">了解更多</a>
          </div>
        </div>
      </div>
      <!-- pc画面 -->
      <div class="h_t_style2">
        <div class="row justify-content-center flex-column p-3">
          <span class="pb-3"><h3>魔都最好吃的婚宴料理</h3></span>
          <span class="pt-4 h_center_banner_text_style" >从食材的采购、挑选、清洗到颜色的搭配、烹饪的火侯、花式的摆盘.....</span>
          <span class="pt-3 h_center_banner_text_style" >特聘顶级厨师严格把控每场料理的一分一毫，给予参加婚宴的宾客最极致的味蕾体验！</span>
          <span class="pb-5 pt-3 h_center_banner_text_style" >最幸福的时刻我们用美味与之相伴</span>
          <div>
            <a class="btn btn-outline-light mt-5" href="<?=base_url('pages/wedding_feast');?>">了解更多</a>
          </div>
        </div>
      </div>       
    </div>

    
    <hr class="featurette-divider"> 
    <!-- 立即预约 -->
    
    <div class="container mt-5">
      <div class="row shadow order-card">
        <div class="col-md-6 carousel-block mb-3 mb-md-0" style="background-image:url('<?=base_url('assets/images/homePage/order-bg.png')?>')">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php foreach ($news as $key => $value) { ?>
                <div class="carousel-item <?php if($key == 0){echo 'active';}?>">
                  <img class="d-block reservationPic" src="<?=$value['img_url']?>" alt="First slide">
                </div>  
              <?php }?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6 reservationPic px-5 d-flex flex-column justify-content-center">
          <div>
            <h3 class="text-center title-with-top-img order-title title-font-style mb-2" style="background-image:url('<?=base_url('assets/images/homePage/order-title.png');?>')">立即预约</h2>
          </div>
          <form>
            <div class="inline-form">
              <label for="form-name">姓名 : </label>
              <input type="text" id="form-name" name="g_name">
            </div>
            <div class="inline-form">
              <label for="form-phone">电话 : </label>
              <input type="text" id="form-phone" name="g_email">
            </div>
            <div class="inline-form mb-5">
              <label for="form-question">谘询的问题 : </label>
              <input type="text" id="form-question" name="g_msg">
            </div>
            <a class="form-btn-order" onclick="checkSubmit()">预约</a>
          </form>
        </div>
      </div>
    </div>
    
    
    
    <hr class="featurette-divider"> 

  <div class="container">
    <div class="swiper-title-top">
      <p>婚禮實錄</p>
    </div>
    <div class="row">
      <div class="swiper-container col-12" >
            <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      <div class="swiper-wrapper" >
        <?php foreach($case as $b_p_key =>$b_p_value){ ?>
        <div class="swiper-slide" style="background-color:#eeeeee;"><img src="<?php echo $b_p_value['path']?>">
        </div>
        <?php }?>     
      </div>   
      </div>
    </div>
    <div class="swiper-title-bottom">
      <p>婚禮實錄</p>
    </div>
  </div>

  
 

<script type="text/javascript">
   
    function checkSubmit(){
      var name = $('#form-name').val();
      var phone = $('#form-phone').val();
      var question = $('#form-question').val();
      if(name== ""){
        alert('請填寫姓名');
      }else if(phone == ""){
        alert('請填寫电话');
      }else if(question == ""){
        alert('請填寫想要谘询的问题');
      }else{
        $.post('<?=base_url('pageApi/insert_form')?>',{
          name:name,
          phone:phone,
          question:question
        },function(data){
          alert('感謝您的來信，我們會在24小時內回覆您。');
          location.reload();
        },'json');
      }
    }
</script>
    </div>
    <!-- CONTACTUS END-->
   
    <script language="javascript">
      $(function(){
        $('.home').click(function(){
          $('html,body').animate({scrollTop: '0px'}, 800);
        }); 
        
        $('.customer').click(function(){
          $('html,body').animate({scrollTop:$('#customer').offset().top}, 400);
        });

        $('.team').click(function(){
          $('html,body').animate({scrollTop:$('#team').offset().top}, 800);
        });
        
        $('.contactus').click(function(){
          $('html,body').animate({scrollTop:$('#contactus').offset().top}, 1000);
        });

       
        //視窗大小變化時
        $(window).resize(function() {
            var x=($(window).width()-1500)/2;//目前寬
            $(".item>img").css({top: 0, left: x, position:'absolute'});
        });
        //reload執行
        var x=($(window).width()-1500)/2;//目前寬
        $(".item>img").css({top: 0, left: x, position:'absolute'});
        
      });
      </script>
        


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      // loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1024: {
          slidesPerView: 2,
          spaceBetween: 0,
          slidesPerGroup: 1,
          loop: true,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
          slidesPerGroup: 1,
          loop: true,
        },
      },
      autoplay:{
        delay: 3000,
      },
    });

    var galleryTop = new Swiper('.swiper-venue', {
        spaceBetween: 10,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on:{
          slideChange:function(){
            console.log($(this));
          }
        }
    });

    $('.venue-swiper-button-next,.venue-swiper-button-prev').on('click',function(){
      console.log($('.swiper-venue .swiper-slide-active'));
      var name = $('.swiper-venue .swiper-slide-active').data('name');
      var subname = $('.swiper-venue .swiper-slide-active').data('subname');
      console.log(name);
      console.log(subname);
      $('.venue-card-body').fadeIn('normal',function(){
        $('.venue-card-body').fadeOut('normal',function(){
          $('.venue-card-body').find('.card-title').html(name);
          $('.venue-card-body').find('.content-color').html(subname);
        });
      });
    });
    
    
  </script>
    <script>
      $(function(){
          var w = $(window).width();
          var h = $(window).height();
        if(w<768){
          $('#hImg').attr('src','<?php echo base_url('assets/images/homePage/home-p-1-2.png');?>');
          $('.h_t_style2').hide();
          $('.h_t_style1').show();
          $('.navbar-brand').find('img').attr('src','<?php echo base_url('assets/images/footer/footerLogo.png');?>');
         }else{
          $('.h_t_style2').show();
          $('.h_t_style1').hide();
        }    
      })
    </script>
    

  </body>