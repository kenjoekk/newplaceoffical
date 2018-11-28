  <style>
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
    .filmBannerStyle{
      width:100%;
      
    }
    .formStyle{
      background-color:#ebebeb;
      border-color:#bd9e0c;border-width:1.5px;
      padding: 2px 100px 2px 15px ;
      border-radius: 16px;
      color:white!important;
    } 
    .textIconStyle{
        background-color:#574800;
        padding: 6px 40px 6px 40px ;
        border-radius: 12px;
        color:white!important;
        
    }
    .boxShadow{
      box-shadow: 10px 10px 5px grey;
    }
    @media(max-width:576px){
      .formNewPalacePic{
        padding:20px 0px 20px 0px;
      }
      .formNewPalaceBackground{
        background-color:#e2dfd3;
        margin-top:20px;
        padding-bottom:20px;
      }
      .formNewPalaceImg{
        width:100px;
        height:100px;
      }
    }
    @media(min-width:577px){
      .formNewPalaceImg{
        width:68px;
        height:68px;
      }

    }  
  </style>
  <body>
    <div class="container-fluid m-0 p-0">
      <div class="filmBannerStyle"><img src="<?php echo base_url('assets/images/filmArea/banner.png');?>"></div>
    </div>
    <div class="container">
      <?php 
        $f_w_data[0]['f_w_img']=base_url('assets/images/filmArea/w_1.jpg');
        $f_w_data[1]['f_w_img']=base_url('assets/images/filmArea/w_2.jpg');
        $f_w_data[2]['f_w_img']=base_url('assets/images/filmArea/w_3.jpg');
        $f_w_data[3]['f_w_img']=base_url('assets/images/filmArea/w_4.jpg');
        $f_w_data[4]['f_w_img']=base_url('assets/images/filmArea/w_5.jpg');
      ?>
      
      <div class="row pb-5 pt-5">
        <div class="swiper-container col-12" >
              <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-wrapper" >
            <?php foreach($f_w_data as $f_w_key =>$f_w_value){ ?>
            <div class="swiper-slide" style="background-color:#eeeeee;"><img src="<?php echo $f_w_value['f_w_img']?>">
            </div>
            <?php }?>     
          </div>   
        </div>
      </div>
      <div class="row pb-lg-4 pb-md-4">
        <div class="col-lg-4 col-md-4 d-flex justify-content-center"><img class="shadow-5" src="<?php echo base_url('assets/images/filmArea/w_1.jpg')?>"></div>
        <div class="col-lg-4 col-md-4 d-flex justify-content-center"><img class="shadow-5" src="<?php echo base_url('assets/images/filmArea/w_2.jpg')?>"></div>
        <div class="col-lg-4 col-md-4 p-0 formNewPalaceBackground">
          <div class="d-flex justify-content-center formNewPalacePic"><img class="formNewPalaceImg" class="mb-lg-3 mb-md-3 mb-sm-3 mb-xs-3" src="<?php echo base_url('assets/images/filmArea/2.png')?>"></div>
          <div style="text-align: center;"><span style="color:#bd9e0c;">雅悦新天地是一家集婚宴场地、婚宴饮食、婚庆策划、</span></div>
          <div style="text-align: center;"><span style="color:#bd9e0c;">婚纱摄影、微电影制作、喜糖喜酒等服务的一站式婚宴会所。</span></div>
          <img src="<?php echo base_url('assets/images/filmArea/3.png')?>">
          <div class="form-group">
            <form action="#" method="post">
              <div class="pt-2" style="height:40px"><input type="text" name="userName" placeholder="姓名" class="form-control formStyle form-control-sm"><br></div>
              <div class="pt-2" style="height:40px"><input type="text" name="userPhone" placeholder="联络方式" class="form-control formStyle form-control-sm"><br></div>
              <div class="pt-2 d-flex justify-content-center p"><input type="submit" value="预约报名" class="textIconStyle"></div>            
            </form>
          </div>
          
        </div>
      </div>         
    </div>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 20,
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