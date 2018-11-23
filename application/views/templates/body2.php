     <style>
     li{
      width:120px;
      text-align:center;
     }
     h1{
       margin-top:-10px;
       margin-bottom:20px;
     }
     /* <!-- Demo styles --> */
  
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
      height: 300px;
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
  

     
     </style>
     <body>

     <div id="gotop">˄</div>
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
        <li><a onclick="A()" style="text-align:right;">中/英</a></li>
        <!-- <li><div class="contactus">CONTACT US</div></li> -->
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
    <!-- NAVBAR -->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators carouseldotdown">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url('assets/images/homePage/homePage1.jpg')?>"   alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <br>
              <br>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url('assets/images/homePage/homePage2.jpg')?>"  alt="Second slide">
          <div class="container">
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url('assets/images/homePage/homePage3.jpg')?>" alt="Third slide">
          <div class="container">
          </div>
        </div>
        <div class="item">
          <img class="forth-slide" src="<?php echo base_url('assets/images/homePage/homePage4.jpg')?>" alt="Forth slide">
          <div class="container">
            <div class="carousel-caption">
            
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<hr class="featurette-divider">
    <!-- /.carousel -->
    <!-- 品牌建置 -->
    <!-- First -->
    <div class="container" style="text-align:center">
      <h1>
        品牌建置
      </h1>
    </div>
    <div class="lead">
　　品牌建置是指品牌拥有者对品牌进行的规划、设计、宣传、管理的行为所需用到的渠道和工具的基本建置。

　　"品牌"是一种无形资产;"品牌"就是知名度，有了知名度就具有凝聚力与扩散力，就成为发展的动力。所以想要促成品牌的建设提高知名度，品牌建置是不可或缺的。



    </div>
    <div>
    <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
      <div class="swiper-slide">Slide 10</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="<?php echo base_url('assets/js/swiper.min.js')?>"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

    </div>


    <div class="container" id="customer">
    <h1 style="color:#337AB7">Customers</h1>
    <div class="row" style="padding-down:1000px">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="media">
    <img src="<?php echo base_url('assets/images/case1.jpg')?>" class="img-responsive media__image" >
    <div class="media__body" class="img-responsive" >
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <h2 class="featurette-heading">APP設計開發.
<span class="text-muted">App Design & Development.</span></h2>
    <p class="lead">
    IOS應用程式設計與開發、Android應用程式設計與開發、整體視覺規劃、程式前台與後台設計。
    </p>
    <p><a class="btn btn-lg btn-primary" href="http://www.texiulianmeng.com/" role="button">查看案例</a></p>
    </div>
    </div>
    </div>
    <hr class="featurette-divider">
    
    <!-- Second -->
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <h2 class="featurette-heading">網頁設計開發. <span class="text-muted">Web Design & Development.</span></h2>
    <p class="lead">
    企業購物網站設計、企業整體形象規劃、電商平台代管、FB粉絲團代管、廣告營銷活動規劃。
</p>
    <p><a class="btn btn-lg btn-primary" href="http://www.ficelle.com.tw/" role="button">查看案例</a></p>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
     <div class="media">
    <img src="<?php base_url('assets/images/case2.jpg')?>" class="img-responsive media__image featurette-image img-responsive pull-right" >
   <div class="media__body" class="img-responsive" >
    
    <img src="img/ficelle_logo.png" class="img-responsive" img style="display:block; margin:auto;">
    </div>
    </div>
    </div>
    </div>
    <hr class="featurette-divider">
    
    <!-- third -->
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" >
    <div style="text-align: center;" class="embed-responsive embed-responsive-4by3">
    <!-- <iframe src="http://player.youku.com/embed/XMTMyOTQ4MjEzMg==" allowfullscreen="" class="embed-responsive-item" frameborder="0" height="498" width="510"></iframe> -->
    <video width="450" height="360" controls>
      <source src="video/vesolo2.mp4" type="video/mp4">
    </video>

</div>
    </div>

    <h2 class="featurette-heading">多媒體行銷設計. <span class="text-muted"><br>Multimedia Design & Development.</span></h2>
    <p class="lead">
    企業形象與多媒體設計、影片拍攝、平面拍攝、企業形象行銷方案。</p>
    <p><a class="btn btn-lg btn-primary" href="http://www.texiulianmeng.com/vesolo/" role="button">查看案例</a></p>
    </div>
    </div>
    </div>
    <hr class="featurette-divider">
    <!-- Second -->
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <h2 class="featurette-heading">電子商務管理顧問. <span class="text-muted"><br>E-Bussiness Consultant.</span></h2>
    <p class="lead">
    電子商務策略規劃、自架電商平台運營管理、天貓商城運營管理、京東商城運營管理。
</p>
    <p><a class="btn btn-lg btn-primary" href="https://agreat.tmall.com/?spm=a1z10.1-b-s.1997427721.d4918089.j0O1Jl" role="button">查看案例</a></p>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
     <div class="media">
    <img src="img/case3.jpg" class="img-responsive media__image featurette-image img-responsive pull-right" >
   <div class="media__body" class="img-responsive" >
    </div>
    </div>
    </div>
    </div>
    <hr class="featurette-divider">
    
    <!-- PRODUCT INTRODUCE END -->
    <!-- DESIGN  -->



    <div class="container" id="team">
    <div class="row">
    <!-- <div class="col-xs-12"> -->
    <h1 style="color:#337AB7">Team</h1>   
    </div>
     

    </div>
    
      <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-3">
    <div class="thumbnail text-center " >
    <div class="media">
      <img src="img/team/photo1.jpg" class="class__image img-responsive">
    <div>
  </div>

    </div>  
      <div class="caption">
        <h3>Joey  | 執行總監</h3>
        <p>
專長：電子商務運營管理、企業整體形象規劃、電商策略規劃、社群行銷策略規劃。
</p>
        
      </div>
    </div>
  </div>
  

   <div class="col-xs-6 col-sm-6 col-md-3">
    <div class="thumbnail text-center " >
    <div class="media">
      <img src="img/team/photo2.jpg" class="class__image img-responsive">
    <div>
  </div>

    </div> 
      <div class="caption">
        <h3>Joseph  | 營運總監</h3>
        <p>專長：企業行銷方案規劃、活動營銷專案策略規劃、多媒體行銷設計、廣告營銷活動設計。</p>
      </div>
    </div>
  </div>
    

    <div class="col-xs-6 col-sm-6 col-md-3">
    <div class="thumbnail text-center " >
    <div class="media">
      <img src="img/team/photo3.jpg" class="class__image img-responsive">
    <div>
  </div>
    </div> 
     <div class="caption">
        <h3>Arod  | 技術總監</h3>
        <p>專長：APP應用開發、網頁設計開發、企業ERP系統設計開發、程式應用設計規劃。</p>
      </div>
    </div>
  </div>
   



   <div class="col-xs-6 col-sm-6 col-md-3">
    <div class="thumbnail text-center " >
    <div class="media">
      <img src="img/team/photo4.jpg" class="class__image img-responsive">
    <div>
  </div>
    </div> 
      <div class="caption">
        <h3>Mo  | 美術總監</h3>
        <p>專長：企業整體視覺識別系統設計、形象設計、網頁整體視覺規劃設計、多媒體視覺設計。</p>
      </div>
    </div>
  </div>
</div>

    </div>
    <hr class="featurette-divider">
    <!-- DESIGN END -->
    <!-- CONTACTUS -->
     <div class="container" id="contactus">
      <div class="row" >
      <div class=" col-xs-12 col-lg-6">
        <h1 style="color:#337AB7">Contact us</h1>
      </div>
        
      </div>
      <h2 class="lead"> 如果您有任何意見或是合作提案, 歡迎與我們聯絡<br>我們收到您的訊息後, 會在24小時內EMAIL回覆您</h2>
      <form role="form" action="" method="post" name="formName" onclick="return checkValue()">
  <div class="form-group">

    <label for="exampleInputName">Name:</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="g_name">
    <label for="exampleInputEmail1">Email Address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="g_email">
    <label for="exampleMessage">Message:</label>
  <textarea class="form-control input-xlarge" data-rule-required="true" data-msg-required="Please give a message." id="exampleMessage" name="g_msg" rows="8" placeholder="Your Message"></textarea>
  </div>
  <button type="submit" id="submit" name="submit" class="submit" onclick="checkSubmit()">送出</button>
</form>

    <script type="text/javascript">
    
    function A (){

      if(document.getElementById("homeId").value =='1'){
      document.getElementById("homeId").value='2';

      document.getElementById("homeId").innerHTML='<?php echo $eng_home?>';
      document.getElementById("serviceId").innerHTML='<?php echo $eng_service?>';
      document.getElementById("customerId").innerHTML='<?php echo $eng_customer?>';
      document.getElementById("newsId").innerHTML='<?php echo $eng_news?>';
      document.getElementById("aboutId").innerHTML='<?php echo $eng_about?>';
      document.getElementById("contactusId").innerHTML='<?php echo $eng_contactus?>';

      }else{
      document.getElementById("homeId").value='1';

      document.getElementById("homeId").innerHTML='<?php echo $ch_home?>';
      document.getElementById("serviceId").innerHTML='<?php echo $ch_service?>';
      document.getElementById("customerId").innerHTML='<?php echo $ch_customer?>';
      document.getElementById("newsId").innerHTML='<?php echo $ch_news?>';
      document.getElementById("aboutId").innerHTML='<?php echo $ch_about?>';
      document.getElementById("contactusId").innerHTML='<?php echo $ch_contactus?>';



      }
      

    }
    
    
    
    </script>

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
    <hr class="featurette-divider">
    <!-- CONTACTUS END-->
    
    <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
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

        $("#gotop").click(function(){
            jQuery("html,body").animate({
                scrollTop:0
            },1000);
        });
        $(window).scroll(function() {
            if ( $(this).scrollTop() > 300){
                $('#gotop').fadeIn("fast");
            } else {
                $('#gotop').stop().fadeOut("fast");
            }
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

  </body>