<style>
.preview-img{
  width:20%;
}
.edit-layout{
  display:none;
}
input[type="file"].edit-layout{
  display:none;
}
</style>
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
            <?=$banquet['title']?> - 方案料理照片
          </h2>
      </div>
      <div class="body">
        <div class="row clearfix">
          <div class="col-sm-12">
              <div class="form-group">
                <form action="<?=base_url('consoleApi/addBanquetImg')?>" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="banquet_id" value="<?=$banquet['id']?>">
                  <input type="file" name="path" accept="image/*" required style="display:inline-block">
                  <button class="btn btn-primary" type="submit">新增照片</button>
                </form>
              </div>
              <div class="body table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>排序</th>
                              <th>图片</th>
                              <th>操作</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($banquet['img'] as $key => $value) { ?>
                          <tr data-imgid="<?=$value['id']?>">
                            <form action="<?=base_url('consoleApi/editBanquetImg')?>" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?=$value['id']?>">
                              <input type="hidden" name="banquet_id" value="<?=$banquet['id']?>">
                              <th><?=$value['sequence']+1?></th>
                              <td>
                                <img class="preview-layout preview-img" src="<?=$value['path']?>" alt="">
                                <input type="file" name="path" class="upload-img-input edit-layout">
                              </td>
                              <td>
                                <a class="btn bg-red waves-effect edit-img-btn preview-layout"><i class="material-icons">border_color</i></a>
                                <?php if($key > 0){ ?>
                                  <a class="btn bg-red waves-effect move-img-btn preview-layout" data-type="up"><i class="material-icons">arrow_upward</i></a>
                                <?php } ?> 
                                <?php if(count($banquet['img'])>($key+1)){ ?>
                                  <a class="btn bg-red waves-effect move-img-btn preview-layout" data-type="down"><i class="material-icons">arrow_downward</i></a>
                                <?php } ?>
                                <a class="btn bg-red waves-effect remove-img-btn preview-layout"><i class="material-icons">delete_forever</i></a>
                                <button class="btn bg-red waves-effect submit-img-btn edit-layout">送出</button>
                                <a class="btn bg-red waves-effect cancel-img-btn edit-layout">取消</a>
                              </td>
                            </form>
                          </tr>
                        <?php } ?>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(function(){

  $('.edit-img-btn').on('click',function(){
    $(this).closest('tr').find('.preview-layout').css('display','none');
    $(this).closest('tr').find('.edit-layout').css('display','inline-block');
  });
  $('.cancel-img-btn').on('click',function(){
    $(this).closest('tr').find('.preview-layout').css('display','inline-block');
    $(this).closest('tr').find('.edit-layout').css('display','none');
  });

  $('.remove-img-btn').on('click',function(){
    var id = $(this).closest('tr').data('imgid');
    var that = this;
      swal({
        title: "确定要删除吗？",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "确定",
        cancelButtonText: "取消",
        closeOnConfirm: false
      }, function () {
        swal({
          title: "处理中...",
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
        $.post("<?=base_url('consoleApi/removeBanquetImg')?>",{
          id:id
        },function(data){
          location.reload();
        },'json');
      });
  });

  $('.move-img-btn').on('click',function(){
    var id = $(this).closest('tr').data('imgid');
    var type = $(this).data('type');
    $.post("<?=base_url('consoleApi/moveBanquetImg')?>",{
        id:id,
        type:type
      },function(data){
        location.reload();
      },'json');
  });
})
</script>