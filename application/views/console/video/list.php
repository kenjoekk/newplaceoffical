<link rel="stylesheet" href="<?=base_url('assets/console/plugins/bootstrap-select/css/bootstrap-select.min.css')?>">
<style>
.add-block{
  display:none;
  margin-top:20px;
}
img,video{
  width:30%;
}
.edit-layout{
  display:none;
}
input[type="file"].edit-layout{
  display:none;
}
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                视频区
            </h2>
        </div>
        <div class="header">
            <button class="btn bg-red waves-effect add-new">新增</button>
            <div class="row clearfix add-block">
              <form action="<?=base_url('consoleApi/addVideo');?>" method="POST" enctype= multipart/form-data>
                <input type="hidden" name="tab" value="<?=$tab?>">
                <div class="col-sm-12">
                    <div class="form-group">
                    <select class="selectpicker" name="type" required>
                      <option value="">-- 选择要新增的项目 --</option>
                      <option value="1">影片</option>
                      <option value="2">轮播图</option>
                    </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                      <input type="file" name="path" required>
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control">
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                </div> -->
                <div class="col-sm-12">
                  <button class="btn btn-primary waves-effect add-new">送出</button>
                </div>
              </form>
            </div>
        </div>
        <div class="body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="<?php if($tab!=1){echo "active";}?>"><a href="#home" data-toggle="tab" aria-expanded="true">影片</a></li>
                <li role="presentation" class="<?php if($tab==1){echo "active";}?>"><a href="#profile" data-toggle="tab" aria-expanded="false">轮播图</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade <?php if($tab!=1){echo "active in";}?>" id="home">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>排序</th>
                              <th>影片</th>
                              <th>操作</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($list['video'] as $key => $value) {?>
                          <form action="<?=base_url('consoleApi/editVideo')?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$value['id']?>">
                            <input type="hidden" name="type" value="<?=$value['type']?>">
                            <input type="hidden" name="tab" value="0">
                            <tr data-id="<?=$value['id']?>" data-tab="0">
                                <th scope="row"><?=$value['sequence']+1?></th>
                                <td>
                                  <video src="<?=$value['path']?>" controls class="preview-layout"></video>
                                  <input type="file" name="path" class="edit-layout">
                                </td>
                                <td>
                                  <a class="btn bg-red waves-effect edit-img-btn preview-layout"><i class="material-icons">border_color</i></a>
                                  <?php if($key > 0){ ?>
                                    <a class="btn bg-red waves-effect move-img-btn preview-layout" data-type="up"><i class="material-icons">arrow_upward</i></a>
                                  <?php } ?> 
                                  <?php if(count($list['video'])>($key+1)){ ?>
                                    <a class="btn bg-red waves-effect move-img-btn preview-layout" data-type="down"><i class="material-icons">arrow_downward</i></a>
                                  <?php } ?>
                                  <a class="btn bg-red waves-effect remove-img-btn preview-layout"><i class="material-icons">delete_forever</i></a>
                                  <button class="btn bg-red waves-effect submit-img-btn edit-layout">送出</button>
                                  <a class="btn bg-red waves-effect cancel-img-btn edit-layout">取消</a>
                                </td>
                            </tr>
                          </form>
                        <?php } ?>
                      </tbody>
                  </table>
                </div>
                <div role="tabpanel" class="tab-pane fade <?php if($tab==1){echo "active in";}?>" id="profile">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>排序</th>
                              <th>图片</th></th>
                              <th>操作</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($list['img'] as $key => $value) {?>
                          <form action="<?=base_url('consoleApi/editVideo')?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$value['id']?>">
                            <input type="hidden" name="type" value="<?=$value['type']?>">
                            <input type="hidden" name="tab" value="1">
                            <tr data-id="<?=$value['id']?>" data-tab="1">
                                <th scope="row"><?=$value['sequence']+1?></th>
                                <td>
                                  <img src="<?=$value['path']?>" alt="" class="preview-layout">
                                  <input type="file" name="path" class="edit-layout">
                                </td>
                                <td>
                                <a class="btn bg-red waves-effect edit-img-btn preview-layout"><i class="material-icons">border_color</i></a>
                                  <?php if($key > 0){ ?>
                                    <a class="btn bg-red waves-effect move-img-btn preview-layout" data-type="up"><i class="material-icons">arrow_upward</i></a>
                                  <?php } ?> 
                                  <?php if(count($list['img'])>($key+1)){ ?>
                                    <a class="btn bg-red waves-effect move-img-btn preview-layout" data-type="down"><i class="material-icons">arrow_downward</i></a>
                                  <?php } ?>
                                  <a class="btn bg-red waves-effect remove-img-btn preview-layout"><i class="material-icons">delete_forever</i></a>
                                  <button class="btn bg-red waves-effect submit-img-btn edit-layout">送出</button>
                                  <a class="btn bg-red waves-effect cancel-img-btn edit-layout">取消</a>
                                </td>
                            </tr>
                          </form>
                        <?php } ?>
                      </tbody>
                  </table>
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

    $('.add-new').on('click',function(){
      $(this).next('.add-block').slideToggle();
    });

    $('.edit-img-btn').on('click',function(){
      $(this).closest('tr').find('.preview-layout').css('display','none');
      $(this).closest('tr').find('.edit-layout').css('display','inline-block');
    });
    $('.cancel-img-btn').on('click',function(){
      $(this).closest('tr').find('.preview-layout').css('display','inline-block');
      $(this).closest('tr').find('.edit-layout').css('display','none');
    });

    $('.remove-img-btn').on('click',function(){
      var id = $(this).closest('tr').data('id');
      var tab = $(this).closest('tr').data('tab');
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
          $.post("<?=base_url('consoleApi/removeVideo')?>",{
            id:id,
            tab:tab
          },function(data){
            location.href="<?=base_url('console/video_list/');?>"+tab;
          },'json');
        });
    });

    $('.move-img-btn').on('click',function(){
      var id = $(this).closest('tr').data('id');
      var tab = $(this).closest('tr').data('tab');
      var type = $(this).data('type');
      $.post("<?=base_url('consoleApi/moveVideo')?>",{
          id:id,
          type:type,
          tab:tab
        },function(data){
          location.href="<?=base_url('console/video_list/');?>"+tab;
        },'json');
    });
  })
</script>