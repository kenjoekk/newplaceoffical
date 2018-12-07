<style>
.add-img-block-desc{
  border: 1px solid #dbdbdb;
  border-radius:5px;
  padding: 5px;
  margin-bottom:20px
}
.add-img-block-desc p{
  text-align:center;
}
.add-img-block-desc .type-desc{
  display:flex;
}
.add-img-block-desc .img-block{
  background:#dbdbdb;
  margin:5px;
  flex:1;
  height:200px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.add-img-block-desc .img-border-column .img-block{
  height:95px;
  flex:unset;
  display: flex;
  justify-content: center;
  align-items: center;
}

.add-img-block-desc .img-block span{
  font-weight:900;
  font-size:20px;
  color:gray;
}

.add-img-block-desc .img-border-column{
  
  /* background:#dbdbdb; */
  flex:1;
  display: flex;
  flex-direction: column;
}
</style>
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
              新增活动
              <!-- <small>Different sizes and widths</small> -->
          </h2>
      </div>
      <div class="body">
        <div class="row clearfix">
          <form action="<?=base_url('consoleApi/addNews');?>" method="POST" enctype= multipart/form-data>
            <div class="col-sm-12">
              <label for="">活動主圖 (720X600比例)</label>
              
              <div class="form-group">
                    <div class="col-sm-12 p-l-0 p-r-0"><img src="" alt="" class="col-xs-8 col-sm-4 p-l-0 p-r-0 img-preview"></div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url" accept="image/*" equired>
              </div>
              <label class="form-label">活动连结</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="active_url">
                  </div>
                  <input type="checkbox" name="order_confirm" id="check_order_confirm">
                  <label for="check_order_confirm"> 预约弹窗</label>
              </div>
              <label class="form-label">活动标题</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="title" required>
                  </div>
              </div>
              <label class="form-label">活动副标</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="sub_title" required>
                  </div>
              </div>
              <label class="form-label">詳細介紹</label>
              <div class="form-group">
                  <div class="form-line">
                    <textarea rows="4" class="form-control no-resize" name="detail" required></textarea>
                  </div>
              </div>
              <label class="form-label">人气指数</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="hot_num" required>
                  </div>
              </div>
              <label class="form-label">参与人数</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="order_num" required>
                  </div>
              </div>
              <label class="form-label">活动到期日</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="active_time" class="datepicker form-control" data-dtp="dtp_izTTT" required>
                </div>
              </div>
              <button class="btn btn-default waves-effect" type="reset">重写</button>
              <button class="btn btn-primary waves-effect" type="submit">新增</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(function(){
  

  $('.datepicker').bootstrapMaterialDatePicker({
      format: 'YYYY-MM-DD',
      clearButton: true,
      weekStart: 1,
      time: false
  });
  
  $('.img-input').on('change',function(){
    console.log('change');
    var that = this;
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
    var base = $.AdminBSB.fn.getBase64($(this)[0].files[0],function(status,base64){
        swal.close();
        if(status == '200'){
          $(that).closest('div').find('.img-preview').attr('src',base64);
          $(that).closest('div').find('.img-val').val(base64);
        }
    });
  });

  $('#check_order_confirm').on('click',function(){
    if($(this).prop('checked')){
      $('[name="active_url"]').prop('disabled',true);
      $('[name="active_url"]').prop('placeholder','已选择预约弹窗！');
    }else{
      $('[name="active_url"]').prop('disabled',false);
      $('[name="active_url"]').prop('placeholder','');
    }
  });
})
</script>