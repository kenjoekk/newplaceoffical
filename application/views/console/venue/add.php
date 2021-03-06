<link rel="stylesheet" href="<?=base_url('assets/console/plugins/bootstrap-select/css/bootstrap-select.min.css')?>">
<style>
.w-100{
    width:100%;
}
.img-input{
  position:absolute;
  width: 20%;
  z-index: -1;
}
</style>
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
              新增會館
              <!-- <small>Different sizes and widths</small> -->
          </h2>
      </div>
      <div class="body">
        <div class="row clearfix">
          <form action="<?=base_url('consoleApi/addVenue');?>" method="POST" enctype= multipart/form-data>
            <div class="col-sm-12">
              <!-- <label for="">會館主圖</label>
              
              <div class="form-group">
                    <div class="col-sm-12 p-l-0 p-r-0"><img src="" alt="" class="col-xs-8 col-sm-4 p-l-0 p-r-0 img-preview"></div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url" accept="image/*" equired>
              </div> -->
              <label class="form-label">英文名稱</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="english_name" required>
                  </div>
              </div>
              <label class="form-label">中文名稱</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="chiness_name" required>
                  </div>
              </div>
              <label class="form-label">副标题</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="sub_title" required>
                  </div>
              </div>
              <label class="form-label">优惠</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="offer" required>
                  </div>
              </div>
              <label class="form-label">婚宴價格 (元起/桌)</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="money" required>
                  </div>
              </div>
              <label class="form-label">容納桌數 (桌)</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="table_num" required>
                  </div>
              </div>
              <label class="form-label">詳細介紹</label>
              <div class="form-group">
                  <div class="form-line">
                    <textarea rows="4" class="form-control no-resize" name="detail" required></textarea>
                  </div>
              </div>
              <label class="form-label">轮播图</label>
              <div class="row">
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第一张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url1" accept="image/*" equired>
                  </div>
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第二张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url2" accept="image/*" equired>
                  </div>
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第三张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url3" accept="image/*" equired>
                  </div>
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第四张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url4" accept="image/*" equired>
                  </div>
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第五张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url5" accept="image/*" equired>
                  </div>
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第六张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url6" accept="image/*" equired>
                  </div>
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第七张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url7" accept="image/*" equired>
                  </div>
                  <div class="col-6 col-md-3 add-img-block">
                    <p class="text-center">第八张</p>
                    <div class="col-sm-12 p-l-0 p-r-0">
                        <img src="<?=base_url('assets/console/images/chooseImg.png')?>" alt="" class="img-preview w-100">
                    </div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url8" accept="image/*" equired>
                  </div>
              </div>
              <!-- <label class="form-label">档期开始时间</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="start-schedule" class="datepicker form-control" data-dtp="dtp_izTTT" required>
                </div>
              </div>
              <label class="form-label">档期结束时间</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="end-schedule" class="datepicker form-control" data-dtp="dtp_izTTT" required>
                </div>
              </div> -->
              <button class="btn btn-default waves-effect" type="reset">重写</button>
              <button class="btn btn-primary waves-effect" type="submit">新增</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?=base_url('assets/console/plugins/bootstrap-select/js/bootstrap-select.min.js')?>"></script>
<script src="<?=base_url('assets/console/plugins/bootstrap-select/js/i18n/defaults-zh_TW.min.js')?>"></script>
<script>
$(function(){
  $('.selectpicker').selectpicker();

  $('.datepicker').bootstrapMaterialDatePicker({
      format: 'YYYY-MM-DD',
      clearButton: true,
      weekStart: 1,
      time: false
  });

  $('.img-input').on('change',function(){
    console.log('change');
    var that = this;
    var file = $(this)[0].files[0];
    if(file != undefined){
      swal({
        title: "载入中...",
        text: '<div class="preloader">'+
                    '<div class="spinner-layer pl-red">'+
                         '<div class="circle-clipper left">'+
                             '<div class="circle"></div>'+
                         '</div>'+
                         '<div class="circle-clipper right">'+
                             '<div class="circle"></div>'+
                         '</div>'+
                     '</div>'+
                 '</div>',
        showConfirmButton: false,
        html: true
      });
      var base = $.AdminBSB.fn.getBase64(file,function(status,base64){
          swal.close();
          if(status == '200'){
            $(that).closest('div').find('.img-preview').attr('src',base64);
            $(that).closest('div').find('.img-val').val(base64);
          }
      });
    }
  });

 
  $('.img-preview').on('click',function(){
    $(this).closest('.add-img-block').find('.img-input').click();
  });
})
</script>