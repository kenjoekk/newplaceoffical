<!-- 处理schedule -->
<?php 
$schedule = explode('~',$venue['schedule']);
$venue['start-schedule'] = $schedule[0];
$venue['end-schedule'] = $schedule[1];
?>

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
          <form action="<?=base_url('consoleApi/editVenue');?>" method="POST" enctype= multipart/form-data>
            <input type="hidden" name="v_id" value="<?=$venue['id']?>">
            <div class="col-sm-12">
              <label for="">會館主圖</label>
              <div class="form-group">
                    <div class="col-sm-12 p-l-0 p-r-0"><img src="<?=$venue['img_url']?>" alt="" class="col-xs-8 col-sm-4 p-l-0 p-r-0 img-preview"></div>
                    <input type="hidden" class="img-val">
                    <input type="file" class="form-control img-input" name="img_url" accept="image/*" equired>
              </div>
              <label class="form-label">英文名稱</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="english_name" value="<?=$venue['english_name']?>" required>
                  </div>
              </div>
              <label class="form-label">中文名稱</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="chiness_name" value="<?=$venue['chiness_name']?>" required>
                  </div>
              </div>
              <label class="form-label">婚宴價格</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="money" value="<?=$venue['money']?>" required>
                  </div>
              </div>
              <label class="form-label">容納桌數</label>
              <div class="form-group">
                  <div class="form-line">
                      <input type="text" class="form-control" name="table_num" value="<?=$venue['table_num']?>" required>
                  </div>
              </div>
              <label class="form-label">詳細介紹</label>
              <div class="form-group">
                  <div class="form-line">
                    <textarea rows="4" class="form-control no-resize" name="detail" required><?=$venue['detail']?></textarea>
                  </div>
              </div>
              <label class="form-label">档期开始时间</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="start-schedule" class="datepicker form-control" value="<?=$venue['start-schedule']?>" data-dtp="dtp_izTTT" required>
                </div>
              </div>
              <label class="form-label">档期结束时间</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="end-schedule" class="datepicker form-control" value="<?=$venue['end-schedule']?>" data-dtp="dtp_izTTT" required>
                </div>
              </div>
              <button class="btn btn-default waves-effect" type="reset">重写</button>
              <button class="btn btn-primary waves-effect" type="submit">送出</button>
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
})
</script>