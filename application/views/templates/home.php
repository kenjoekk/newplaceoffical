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
  
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
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
    }@media(max-width:767px){
      .brandIntro{
        width:100%;
      }
    }
    #homeTitlePic {
      background-size:cover;
    }
    .homeTitleTxt{
      padding:30%;
      color:white;
      font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .homeMidPic{
      padding:10%;
      color:white;
      background-size:cover;


    }
    h3{
      font-size:x-large;
      font-weight:lighter;
      font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;

    }
    
    .reservationPic{
      height:500px;
      width:100%;
    }
    .carousel{
      margin-bottom:0;
    }
     
     </style>
     <body>

      <div id="homeTitlePic" style="text-align:center;background-image:url('<?php echo base_url('assets/images/homePage/home_f_1.jpg')?>')">
        <div class="homeTitleTxt">
          <h1>雅悦新天地</h1>
        </div>  
      </div>





    
    <!-- 品牌建置 --> 
    
    <div class="container d-flex justify-content-center pt-3" >
      <div class="row">
         <h2 class="p-4">我們的服務
      </div>
    </div>
    
    <div class="lead" >

    　<p style="text-align:center">我们的服务：采取当今新型婚礼服务模式一站式婚礼会所提供以下服务：婚宴场地、婚宴饮食、婚庆策划、婚纱摄影、微电影制作、喜糖、喜酒等

       我们的特点：省心、省力、高效率、高品质！
      </p>

    </div>
    
    
 <!-- 場館介紹 -->
  <?php 
    $data[0]['b_r_img'] = base_url('assets/images/homePage/intro1.jpg');
    $data[0]['b_r_title']="宝石厅";
    $data[0]['b_r_coupon'] ="One person for free";
    $data[0]['b_r_features']="婚宴价格：5199元/桌 - 6999元/桌<br/> 容纳桌数：32桌";
    
    $data[1]['b_r_img'] = base_url('assets/images/homePage/intro2.jpg'); 
    $data[1]['b_r_title']="钻石厅"; 
    $data[1]['b_r_coupon'] ="Two person for free";
    $data[1]['b_r_features']="婚宴价格：5199元/桌 - 6999元/桌<br/> 容纳桌数：32桌";    
    
    $data[2]['b_r_img'] = base_url('assets/images/homePage/intro3.jpg'); 
    $data[2]['b_r_title']="黄石厅";
    $data[2]['b_r_coupon'] ="Three person for free";
    $data[2]['b_r_features']="婚宴价格：5199元/桌 - 6999元/桌<br/> 容纳桌数：32桌";

    $data[3]['b_r_img'] = base_url('assets/images/homePage/intro4.jpg');
    $data[3]['b_r_title']="肆石厅";
    $data[3]['b_r_coupon'] ="Four person for free";
    $data[3]['b_r_features']="婚宴价格：5199元/桌 - 6999元/桌<br/> 容纳桌数：32桌";

    $data[4]['b_r_img'] = base_url('assets/images/homePage/intro5.jpg');
    $data[4]['b_r_title']="舞石厅";
    $data[4]['b_r_coupon'] ="Five person for free";
    $data[4]['b_r_features']="婚宴价格：5199元/桌 - 6999元/桌<br/> 容纳桌数：32桌";

    $data[5]['b_r_img'] = base_url('assets/images/homePage/intro6.jpg');
    $data[5]['b_r_title']="陆石厅";
    $data[5]['b_r_coupon'] ="Six person for free";
    $data[5]['b_r_features']="婚宴价格：5199元/桌 - 6999元/桌<br/> 容纳桌数：32桌";
    
     
  ?>
   
  
    <div class="container">
      <div class="row">
        <?php foreach ($data as $key => $value) { ?>
          <div class="col-md-4 mb-4" >
            <div class="card p-4">
              <img class="card-img-top" src="<?php echo $value['b_r_img']?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">优惠：</h5>
                <p class="card-text"><?php echo $value['b_r_coupon']?></p>
                <h5 class="card-title">特色：</h5>
                <p class="card-text"><?php echo $value['b_r_features']?></p>
                <div class="card text-center">
                  <button type="button" class="btn btn-outline-primary ">预约场馆</button>
                </div>
              </div>
            </div>
          </div>    
        <?php } ?>
      </div>
    </div>

    <div style="padding-top:50px">
      <div style="text-align:center" >
        <button type="button" class="btn btn-primary" >more</button>
      </div>
    </div>  
    
    <hr class="featurette-divider">

    <div class="homeMidPic" style="text-align:center;background-image:url('<?php echo base_url('assets/images/homePage/home_f_2.jpg')?>')">
      <div>
        <div class="row justify-content-center p-3">
           <h1>魔都最好吃的婚宴料理</h1>
        </div>
        <div class="row justify-content-center p-5">
          <h3>从食材的采购、挑选、清洗到颜色的搭配、烹饪的火侯、花式的摆盘.....</h3>
          <h3>特聘顶级除湿严格把控每场料理的一分一毫，给予参加婚宴的宾客最极致的味蕾体验！最幸福的时刻我们用美味与之相伴</h3>
        </div>
        <div class="row justify-content-center  pt-5">
          <button type="button" class="btn btn-outline-light">了解更多</button>
        </div>
      </div>  
    </div>

    

    <!-- 立即预约 -->
    <div>
      <div class="container d-flex justify-content-center pt-3" >
        <div class="row">
          <h2 class="p-4">立即预约
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block reservationPic" src="<?php echo base_url('assets/images/homePage/intro1.jpg')?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block reservationPic" src="<?php echo base_url('assets/images/homePage/intro2.jpg')?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block reservationPic" src="<?php echo base_url('assets/images/homePage/intro3.jpg')?>" alt="Third slide">
                </div>
              </div>
            </div>
          <div class="col-md-6 reservationPic">
            <form>
              <div class="form-group mt-5">
                <label for="inputName">请输入您的姓名</label>
                <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="请输入您的姓名">
              </div>
              <div class="form-group mt-5">
                <label for="inputPhone">请输入您的手机</label>
                <input type="tel" class="form-control" id="inputPhone" placeholder="请输入您的手机">
              </div>
              <div class="form-group mt-5">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-5">预约</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <br>
    <hr class="featurette-divider"> 

  <?php 
    $b_p_data[0]['b_img']=base_url('assets/images/homePage/bottom01.jpg');
    $b_p_data[1]['b_img']=base_url('assets/images/homePage/bottom02.jpg');
    $b_p_data[2]['b_img']=base_url('assets/images/homePage/bottom03.jpg');
    $b_p_data[3]['b_img']=base_url('assets/images/homePage/bottom04.jpg');
    $b_p_data[4]['b_img']=base_url('assets/images/homePage/bottom05.jpg');
  ?>
  <div class="container">
    <div class="row pb-5">
      <div class="swiper-container col-12" >
            <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      <div class="swiper-wrapper" >
        <?php foreach($b_p_data as $b_p_key =>$b_p_value){ ?>
        <div class="swiper-slide" style="background-color:#eeeeee;"><img src="<?php echo $b_p_value['b_img']?>">
        </div>
        <?php }?>     
      </div>   
      </div>
    </div>
  </div>
    

 

<script type="text/javascript">
   
   function checkSubmit(){
    if(document.formName.g_name.value == ""){

        alert('請填寫姓名');
    }else if(document.formName.g_email.value == ""){

        alert('請填寫郵件地址');

    }else if(document.formName.g_msg.value == ""){

        alert('請填寫疑問');
    }else{

         alert('感謝您的來信，我們會在24小時內回覆您。');   
            $(function () {
            $("#submit").click(function () {
                alert("感謝您的來信，我們會在24小時內回覆您。")
                
            });
        });

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
    
  </script>
  

  </body>