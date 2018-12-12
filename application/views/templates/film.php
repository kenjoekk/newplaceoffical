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
      /* color:white!important; */
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
    .f-img-style_b{
      width:366.66px;
      height:271px;
    }   
    .f-img-style_c{
      width:366.66px;
      height:271px;
    } 

    @media(max-width:576px){
      .formNewPalacePic{
        padding:50px 0px 20px 0px;
      }
      .formNewPalaceBackground{
        background-color:#e2dfd3;
        margin-top:70px;
        padding-bottom:20px;
      }
      .formNewPalaceImg{
        width:100px;
        height:100px;
      }
      .f-img-style_c{
        margin-top:2rem;
      } 
      .formNewPalacePic img{
        position:absolute;
        top:-50px;
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
      <div class="filmBannerStyle">
        <!-- <img src="<?php echo base_url('assets/images/filmArea/banner.png');?>"> -->
        <video src="<?=$list['video']['path']?>" controls class="w-100"></video>
      </div>
    </div>
    <div class="container">
      <div class="row pb-xl-5 pb-4 pt-xl-5 pt-4">
        <div class="swiper-container col-12" >
              <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-wrapper" >
            <?php foreach($list['img'] as $f_w_key =>$f_w_value){ ?>
            <div class="swiper-slide" style="background-color:#eeeeee;"><img src="<?php echo $f_w_value['path']?>">
            </div>
            <?php }?>     
          </div>   
        </div>
      </div>
      <div class="row pb-lg-4 pb-md-4">
        <div class="col-lg-4 col-md-4 d-flex justify-content-center p-0"><img class="shadow-5 f-img-style_b" src="<?php echo base_url('assets/images/filmArea/w_1.jpg')?>"></div>
        <div class="col-lg-4 col-md-4 d-flex justify-content-center p-0"><img class="shadow-5 f-img-style_c" src="<?php echo base_url('assets/images/filmArea/w_2.jpg')?>"></div>
        
        <div class="col-lg-4 col-md-4  formNewPalaceBackground">
          <div class="d-flex justify-content-center formNewPalacePic"><img class="formNewPalaceImg" class="mb-lg-3 mb-md-3 mb-sm-3 mb-xs-3" src="<?php echo base_url('assets/images/filmArea/2.png')?>"></div>
          <div class="pt-xl-3 mb-2 mb-md-0" style="text-align: center;"><span style="color:#564802;font-size:14px;">雅悦新天地是一家集婚宴场地、婚宴饮食、婚庆策划、</span></div>
          <div class="pt-xl-2 mb-4 mb-md-0" style="text-align: center;"><span style="color:#564802;font-size:14px;">婚纱摄影、微电影制作、喜糖喜酒等服务的一站式婚宴会所。</span></div>
          <div class="pt-xl-3 pb-xl-3 mb-4 mb-md-0 d-flex justify-content-center"><img style="width:90%" src="<?php echo base_url('assets/images/filmArea/3.png')?>"></div>
          <div class="form-group">
            <form action="#" method="post">
              <div style="height:40px"><input type="text" id="form-name" name="userName" placeholder="请输入您的姓名" class="form-control formStyle form-control-sm"><br></div>
              <div style="height:40px"><input type="text" id="form-phone" name="userPhone" placeholder="请输入您的手机号" class="form-control formStyle form-control-sm"><br></div>
              <div class="pt-xl-3 d-flex justify-content-center p"><a onclick="checkSubmit()"  class="textIconStyle">预约报名</a></div>
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

  <script>
    function checkSubmit(){
        var name = $('#form-name').val();
        var phone = $('#form-phone').val();
        if(name== ""){
            alert('請填寫姓名');
        }else if(phone == ""){
            alert('請填寫电话');
        }else{
            $.post('<?=base_url('pageApi/insert_form')?>',{
            name:name,
            phone:phone
            },function(data){
            alert('感謝您的來信，我們會在24小時內回覆您。');
            location.reload();
            },'json');
        }
    }
   
</script>