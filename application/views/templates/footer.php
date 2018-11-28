<style>
.footerBanner{
background-image:url('<?php echo base_url('assets/images/footer/footerBanner.png')?>');
height:500px;
}
.footerText{
  color:white;
}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #fff;
    margin: 1em 0;
    padding: 0; 
}
@media (max-width:768px) {
    .disappear{
      display:none;
      
    }
    .textCenter{
      text-align:center;
    }
    
}
@media(max-width:991px){
    .disappear{
      display:none;
      
    }
}
.textColorBottom{
      color:gray;
    }

</style>    
      <footer>

      <div class="container-fluid footerBanner" >
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12 pt-md-5 pl-md-5">
               
                <div class="disappear"><img src="<?php echo base_url('assets/images/footer/footerLogo.png')?>"></div>
                <div class="row justify-content-center justify-content-md-start"><div class="pl-md-4 pt-md-4 pt-2"><img src="<?php echo base_url('assets/images/footer/footerPhoneIcon.png')?>"></div><div class="pt-md-4 pl-md-3 pt-2 footerText">400-1520-570</div></div>
                <div class="row justify-content-center justify-content-md-start"><div class="pl-md-4 pt-md-4"><img class="disappear" src="<?php echo base_url('assets/images/footer/footerLocationIcon.png')?>"></div><div class="pt-md-4 pl-md-3 pt-1 footerText ">上海市静安区高平路88号雅悦新天地婚宴展会中心</div></div>
                <div class="row disappear"><div class="pl-4 pt-4"><img src="<?php echo base_url('assets/images/footer/footerWechatIcon.png')?>"></div><div class="pt-4 pl-3 footerText">官方微信</div></div>
                <div class="row disappear"><div class="pl-4 pt-4"><img src="<?php echo base_url('assets/images/footer/footerQrcode.png')?>"></div></div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-xl-end justify-content-md-end justify-content-center pr-md-4 pt-md-5 pt-3">
              <img src="<?php echo base_url('assets/images/footer/footerMap.png')?>">
            </div>
          </div>
          <div class="pt-xl-5">
            <hr style="color:white p0"/>
            <div class="row textColorBottom">
              <div class="col-xl-6 col-12 d-flex justify-content-center justify-content-xl-start">2018 Copyright &copy;, OWAY.</div>
              <div class="col-xl-6 col-12 d-flex justify-content-center justify-content-xl-end">沪ICP备00213791号.Designed by OWAY</div>
            </div>
          </div> 
        </div>        
      </div>

        
        <!-- Boostrap 4.1.1 JS套件 -->
        <script href="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js')?>" rel="stylesheet"> </script>
        <script src="<?php echo base_url('assets/js/bootstrap/jquery-slim.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js')?>"></script>

        
        <!-- <p>&copy; 2016 Copyright, AVAWEAR. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
      </footer>
      <!-- </div> -->
</html>

